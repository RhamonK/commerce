<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index(Request $request)
    {
        $products = Product::inRandomOrder()
            ->whereActive(true)
            ->orderByDesc('updated_at')
            ->paginate();


        if (isset($request["search"])) {
            $query = Product::query()->orderBy('created_at', 'DESC');
            $name = $request->input('search');
            $query = $query->where('name', 'like', "%{$name}%");
            $query = $query->OrWhere('description', 'like', "%{$name}%");
            $products = $query->paginate(15);
        }



        return view('products.index', compact('products'));
    }
}
