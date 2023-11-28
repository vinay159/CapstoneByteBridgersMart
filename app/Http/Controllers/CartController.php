<?php

namespace App\Http\Controllers;

use App\Services\CartService;
use Exception;
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
        try {
            $this->cartService->addToCart($request->input('product_id'), $request->input('quantity'), $request->input('price'));
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }

        return back()->with('success', 'Product added to cart successfully!');
    }

    public function update(Request $request, $product_id)
    {
        try {
            $this->cartService->updateCart($product_id, $request->input('quantity'));
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }

        return back()->with('success', 'Cart updated successfully!');
    }

    public function delete(Request $request)
    {
        $this->cartService->removeFromCart($request->input('product_id'));

        return back()->with('success', 'Cart updated successfully!');
    }
}
