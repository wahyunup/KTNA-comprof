<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{

    //test demo product pake tinker
    // App\Models\Product::create([    
    //  'productName' => 'Philodendrun golden finger',    
    //  'category' => 'tanaman',    
    //  'price' => 350000,    
    //  'stock' => 50000,    
    //  'description' => 'Philodendrun golden finger adalah tanaman...']);
    
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
