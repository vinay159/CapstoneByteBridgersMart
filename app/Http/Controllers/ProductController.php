<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::query()
            ->where('status', 1)
            ->inRandomOrder()
            ->limit(8)
            ->get();

        return view('welcome', [
            'products' => $products
        ]);
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);

        $related_products = Product::query()
            ->where('id', '!=', $id)
            ->where('status', 1)
            ->inRandomOrder()
            ->limit(4)
            ->get();

        return view('product', [
            'product' => $product,
            'related_products' => $related_products
        ]);
    }

    public function allProducts()
    {
        $products = Product::query()
            ->where('status', 1)
            ->inRandomOrder()
            ->limit(8)
            ->get();

        return view('all_products', [
            'products' => $products
        ]);
    }
}
