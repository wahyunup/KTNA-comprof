<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{

    
    public function showProducts(Request $request) {
        $category = $request->query('category');

        $category ? $products = Product::where('category', $category)->get() : $products = Product::all();
    
        $categories = Product::select('category')->distinct()->pluck('category');

    return view('pages.product', compact('products','categories'));
    }

    public function showProductdetails($slug) {
        $product = Product::where('slug',$slug)->first();
        return view('pages.productDetail', ['product' => $product]);
    }
}
