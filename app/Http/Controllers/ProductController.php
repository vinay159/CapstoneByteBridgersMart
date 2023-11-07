<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::query()
            ->where('status', 1)
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
            ->latest()
            ->limit(4)
            ->get();

        return view('product', [
            'product' => $product,
            'related_products' => $related_products
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
}
