<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{

    //test demo product pake tinker
    // App\Models\Product::create(['productName'=>'Tanaman 4', 'category'=>'tanaman', 'price'=> 500000, 'stock'=>19, 'description'=>'ini adalah tanaman 4']);
    
    public function showProducts() {

        $products = Product::all();

    return view('pages.product', compact('products'));
    }

    public function showProductdetails($id) {
        $product = Product::findOrFail($id);
        $url = route('products.show', ['id' => $product->id]);  
    return view('pages.productDetail', compact('product'));
    }
}
