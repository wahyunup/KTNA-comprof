<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

use function Laravel\Prompts\alert;

class CloudinaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
//     public function index()
//     {
//        return view('pages');
//     }

//     public function upload(Request $request){
//     $path = 'ktna_images';

//     $file = $request->file('image')->getClientOriginalName();
//     $fileName = pathinfo($file, PATHINFO_FILENAME);

//     $publicId = date('y-m-d_His') . '_' . $fileName;

//     $upload = Cloudinary::upload($request->file('image')->getRealPath(), [
//         "public_id" => $publicId,
//         "folder" => $path,
//     ]);

//     $publicIdPath = $upload->getPublicId();
//     $cloudName = "dage2ethb";
//     $originalUrl = "https://res.cloudinary.com/{$cloudName}/image/upload/{$publicIdPath}";
//     $image = new Product();
//     $image->image_url = $originalUrl;
//     $image->save();    
//     dd($originalUrl);

//     return view('pages.test.dashboard', compact('upload'));
// }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
