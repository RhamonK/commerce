<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $products = Product::inRandomOrder()
            ->whereActive(true)
            ->orderByDesc('updated_at')
            ->paginate();

        return view('products.index', compact('products'));
    }
}