<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Services\CartService;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(private CartService $cartService)
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $cart_data = $this->cartService->getCart();

        $cart_count = $cart_data->count();

        $products = [];

        if ($cart_count > 0) {
            $product_ids = $cart_data->pluck('product_id')->toArray();

            $products = Product::query()
                ->whereIn('id', $product_ids)
                ->get()
                ->keyBy('id')
                ->toArray();
        }

        return view('cart', [
            'cart_data' => $cart_data,
            'cart_count' => $cart_count,
            'products' => $products,
        ]);
    }

    public function store(Request $request)
    {
        $this->cartService->addToCart($request->input('product_id'), $request->input('quantity'), $request->input('price'));

        return back()->with('success', 'Product added to cart successfully!');
    }

    public function delete(Request $request)
    {
        $this->cartService->removeFromCart($request->input('product_id'));

        return back()->with('success', 'Cart updated successfully!');
    }
}
