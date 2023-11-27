<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show(Request $request, $id)
    {
        $order = Order::where('id', $id)->first();

        if (!$order) {
            return redirect()->route('home');
        }

        if ($order->user_id != Auth::id()) {
            return redirect()->route('home');
        }

        $order->load('items.product.category');

        return view('order', [
            'order' => $order,
        ]);
    }

    public function index()
    {
        return view('orderDetails');
    }
}
