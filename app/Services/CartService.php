<?php

namespace App\Services;

use App\Models\Cart;
use App\Models\Product;
use Auth;
use Exception;
use Session;

class CartService
{
    public function __construct(private Cart $cart)
    {
    }


    /**
     * @throws Exception
     */
    public function addToCart($product_id, $quantity, $price)
    {
        $cart_data = [
            'product_id' => $product_id,
            'quantity' => $quantity,
            'price' => $price,
        ];

        $cart = $this->getCart();

        $cart_product = $cart->where('product_id', $product_id)->first();

        if (Auth::check()) {
            if ($cart_product) {
                $cart_product->quantity += $quantity;

                if ($cart_product->quantity > 5) {
                    throw new Exception('You can not add more than 5 quantity of same product.');
                }

                $cart_product->price = $price;
                $cart_product->save();
            } else {
                $cart_data['user_id'] = Auth::user()->id;

                $this->cart->create($cart_data);
            }
        } else {
            $cart = $cart->toArray();

            if ($cart_product) {
                $cart[$product_id]['quantity'] += $quantity;

                if ($cart[$product_id]['quantity'] > 5) {
                    throw new Exception('You can not add more than 5 quantity of same product.');
                }

                $cart[$product_id]['price'] += $quantity;
            } else {
                $cart[$product_id] = $cart_data;
            }

            Session::put('cart', $cart);
        }

        return true;
    }

    /**
     * @throws Exception
     */
    public function updateCart($product_id, $quantity): bool
    {
        $cart = $this->getCart();

        $cart_product = $cart->where('product_id', $product_id)->first();

        if (Auth::check()) {
            if ($cart_product) {
                $cart_product->quantity = $quantity;

                if ($cart_product->quantity > 5) {
                    throw new Exception('You can not add more than 5 quantity of same product.');
                }

                $cart_product->save();
            }
        } else {
            $cart = $cart->toArray();

            if ($cart_product) {
                $cart[$product_id]['quantity'] = $quantity;

                if ($cart[$product_id]['quantity'] > 5) {
                    throw new Exception('You can not add more than 5 quantity of same product.');
                }
            }

            Session::put('cart', $cart);
        }

        return true;
    }

    public function removeFromCart($product_id): bool
    {
        $cart = $this->getCart();

        if (Auth::check()) {
            $this->cart->where('user_id', Auth::user()->id)
                ->where('product_id', $product_id)
                ->delete();
        } else {
            $cart = $cart->toArray();

            unset($cart[$product_id]);

            Session::put('cart', $cart);
        }

        return true;
    }

    public function getCart()
    {
        if (Auth::check()) {
            $cart = $this->cart->where('user_id', Auth::user()->id)->get();
        } else {
            $cart = collect(Session::get('cart', []));
        }

        return $cart;
    }

    public function getCartCount()
    {
        return $this->getCart()->count();
    }

    public function getCartProducts()
    {
        $cart_data = $this->getCart();

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

        return [
            'cart_data' => $cart_data,
            'cart_count' => $cart_count,
            'products' => $products,
        ];
    }

    public function mergeCart($user_id)
    {
        $cart = Session::get('cart', []);

        if (empty($cart)) {
            return true;
        }

        foreach ($cart as $item) {
            $item['user_id'] = $user_id;

            $this->cart->create($item);
        }

        Session::forget('cart');

        return true;
    }

    public function clearCart()
    {
        if (Auth::check()) {
            $this->cart->where('user_id', Auth::user()->id)->delete();
        } else {
            Session::forget('cart');
        }

        return true;
    }
}
