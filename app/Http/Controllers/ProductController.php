<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    public function productList()
    {
        $product = Product::all();
        dd($product);
        //return View::make('products')->with(compact('product'));
       return view('views.products', compact('product'));
    }
}
