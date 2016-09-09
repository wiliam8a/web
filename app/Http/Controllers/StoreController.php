<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;

class StoreController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        //dd($products);
        return view('store.index', compact('products','categories'));
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first();
        //dd($product);

        return view('store.show', compact('product'));
    }
}
