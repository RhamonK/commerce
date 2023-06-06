<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        $products = Product::query();
        if(isset($request['category'])){
            if($request->input('category') != "all"){
                $category = Category::where('name', $request->input('category'))->first();
                $products->where('category_id', $category->id);
            }
        }else{
            $products = $products->inRandomOrder()
                ->whereActive(true)
                ->orderByDesc('updated_at');
        }



        if (isset($request["search"])) {
            $products = $products->orderBy('created_at', 'DESC');
            $name = $request->input('search');
            $products = $products->where('name', 'like', "%{$name}%");
            // $products = $products->OrWhere('description', 'like', "%{$name}%");
        }

        $products = $products->paginate(16);
        return view('products.index', compact('products'));
    }
}
