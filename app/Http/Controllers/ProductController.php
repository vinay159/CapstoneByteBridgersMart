<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['update']);
    }


    public function index()
    {
        $products = Product::query()
            ->where('status', 1)
            ->withAvg('reviews', 'stars')
            ->latest()
            ->limit(8)
            ->get();

        return view('home', [
            'products' => $products
        ]);
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);

        $related_products = Product::query()
            ->where('id', '!=', $id)
            ->where('status', 1)
            ->withAvg('reviews', 'stars')
            ->latest()
            ->limit(4)
            ->get();

        $existing_review = null;

        if (auth()->check()) {
            $existing_review = $product->reviews()->where('user_id', auth()->user()->id)->first();
        }

        $product_reviews = $product->reviews()
            ->select([
                'user_id',
                'stars',
                'review',
            ])->with(['user' => function ($user) {
                $user->select([
                    'id',
                    'name'
                ]);
            }])
            ->latest()
            ->when($existing_review, function ($query, $existing_review) {
                return $query->where('id', '!=', $existing_review->id);
            })
            ->limit(3)
            ->get();

        $product_review_data = [];

        foreach ($product_reviews as $product_review) {
            $product_review_data[] = [
                'name' => $product_review->user->name,
                'stars' => $product_review->stars,
                'review' => $product_review->review,
            ];
        }

        return view('product', [
            'product' => $product,
            'related_products' => $related_products,
            'existing_review' => $existing_review,
            'product_review_data' => $product_review_data,
        ]);
    }

    public function allProducts(Request $request)
    {
        $products_query = Product::query()
            ->where('status', 1)
            ->when($request->input('filter_order', 'cheapest'), function ($query, $filter_order) {
                if ($filter_order == 'cheapest') {
                    return $query->orderBy('price', 'asc');
                } elseif ($filter_order == 'most_popular') {
                    return $query->orderBy('created_at', 'desc');
                }

                return $query;
            })
            ->when($request->input('on_sale_products'), function ($query, $on_sale_products) {
                if ($on_sale_products == '1') {
                    return $query->where('discount', '>', 0);
                }

                return $query;
            })
            ->when($request->input('category'), function ($query, $category_id) {
                return $query->where('category_id', $category_id);
            });

        $products = $products_query->clone()
            ->limit(8)
            ->get();

        $total_products = Product::query()
            ->where('status', 1)
            ->count();

        $on_sale_products = $products_query->where('discount', '>', 0)->clone()->count();

        $categories = Category::query()
            ->withCount([
                'products' => function ($query) use ($request) {
                    $query->where('status', 1)
                        ->when($request->input('on_sale_products'), function ($query, $on_sale_products) {
                            if ($on_sale_products == '1') {
                                return $query->where('discount', '>', 0);
                            }

                            return $query;
                        });
                },
            ])
            ->where('status', 1)
            ->orderBy('name', 'asc')
            ->get();

        return view('all_products', [
            'products' => $products,
            'categories' => $categories,
            'total_products' => $total_products,
            'on_sale_products' => $on_sale_products,
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'stars' => 'required',
            'review' => 'required',
        ]);

        $product = Product::findOrFail($id);

        if (is_null($product)) {
            return back()->with('error', 'Product not found!');
        }

        $user_id = auth()->user()->id;

        $existing_review = $product->reviews()->where('user_id', $user_id)->first();

        if ($existing_review) {
            $existing_review->update([
                'stars' => $request->input('stars'),
                'review' => $request->input('review'),
            ]);

            return back()->with('success', 'Review updated successfully!');
        }

        $product->reviews()->create([
            'user_id' => $user_id,
            'stars' => $request->input('stars'),
            'review' => $request->input('review'),
        ]);

        return back()->with('success', 'Review updated successfully!');
    }
}
