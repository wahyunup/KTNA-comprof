<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // protected $table = 'products';
    protected $fillable = [
        'slug',
        'productName',
        'image_url',
        'category',
        'price',
        'stock',
        'description',
    ];
}
