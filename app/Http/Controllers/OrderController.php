<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Charge;
use Stripe\Stripe;
use Throwable;

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

        if ($order->status == 'ACCEPTED') {
            Stripe::setApiKey(config('constants.stripe.secret_key'));

            $charge = Charge::retrieve($order->payment_id);
        }

        return view('order', [
            'order' => $order,
            'charge' => $charge ?? null,
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'stripeToken' => 'required',
        ]);

        $order = Order::findOrFail($id);

        if ($order->status == 'ACCEPTED') {
           return redirect()->back()->withErrors('Order already paid');
        }

        Stripe::setApiKey(config('constants.stripe.secret_key'));

        try {
            $charge = Charge::create([
                'amount' => 100 * $order->final_price,
                'currency' => 'cad',
                'source' => $request->input('stripeToken'),
                'description' => $order->order_id
            ]);

            $order->payment_id = $charge->id;

            if ($charge->status == Charge::STATUS_SUCCEEDED) {
                $order->payment_status = 'SUCCESS';
                $order->payment_date = Carbon::now();
                $order->status = 'ACCEPTED';
            } elseif ($charge->status == Charge::STATUS_PENDING) {
                $order->payment_status = 'IN_PROCESS';
            } else {
                $order->payment_status = 'FAILED';
            }
        } catch (Throwable $throwable) {
            $order->payment_status = 'FAILED';
        }

        $order->save();

        return redirect()->route('order.show', [$order->id])->with('success', 'Order updated successfully.');
    }

    public function index()
    {
        return view('yourOrder');
    }
}
