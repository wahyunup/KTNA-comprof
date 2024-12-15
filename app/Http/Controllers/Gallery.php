<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Gallery extends Controller
{
   public function showGallery() {

       $gallerys = [
           ['image' => asset('images/gallery/1.jpg')],
           ['image' => asset('images/gallery/2.jpg')],
           ['image' => asset('images/gallery/3.jpg')],
           ['image' => asset('images/gallery/4.jpg')],
           ['image' => asset('images/gallery/5.jpg')],
           ['image' => asset('images/gallery/6.jpg')],
           ['image' => asset('images/gallery/7.jpg')],
           ['image' => asset('images/gallery/8.jpg')],
           ['image' => asset('images/gallery/9.jpg')],
           ['image' => asset('images/gallery/10.jpg')],
       ];
       
       
       $slice = array_slice($gallerys,0, 4);

       return view('pages.gallery' , compact('gallerys', 'slice'));
   }
   
}
