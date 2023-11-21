<?php

namespace App\Http\Controllers;

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
        $data = $this->cartService->getCartProducts();

        return view('cart', $data);
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
