<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Services\CartService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Stripe\Charge;
use Stripe\Stripe;
use Throwable;

class CheckoutController extends Controller
{

    public function __construct(private CartService $cartService)
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $data = $this->cartService->getCartProducts();

        return view('checkout', $data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'address_1' => 'required',
            'country' => 'required',
            'state' => 'required',
            'zip' => 'required',
            'stripeToken' => 'required',
        ]);

        $total_price = $final_price = 0;

        $cart_products = $this->cartService->getCartProducts();

        $order_items = [];

        foreach ($cart_products['cart_data'] as $cart_product) {
            $product = $cart_products['products'][$cart_product['product_id']];

            $order_items[] = [
                'product_id' => $cart_product['product_id'],
                'quantity' => $cart_product['quantity'],
                'price' => $cart_product['price'],
                'actual_price' => $product['price'],
            ];

            $total_price += $product['price'] * $cart_product['quantity'];
            $final_price += $cart_product['price'] * $cart_product['quantity'];
        }

        $address = implode(',', $request->only('address_1', 'address_2', 'country', 'state', 'zip'));

        $order = [
            'user_id' => auth()->id(),
            'order_id' => 'ORD' . time(),
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'address' => $address,
            'total_price' => $total_price,
            'final_price' => $final_price,
        ];

        $order = Order::create($order);

        foreach ($order_items as $order_item) {
            $order_item['order_id'] = $order->id;

            OrderItem::create($order_item);
        }

        Stripe::setApiKey(config('constants.stripe.secret_key'));

        try {
            $charge = Charge::create([
                'amount' => 100 * $final_price,
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

        $this->cartService->clearCart();

        return redirect()->route('order.show', [$order->id])->with('success', 'Order created successfully.');
    }
}
