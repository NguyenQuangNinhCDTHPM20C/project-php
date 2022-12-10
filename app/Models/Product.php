<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'description',
         'color',
         'ram',
         'storage',
         'front_camera',
         'back_camera',
         'price',
         'stock',
         'image'
        ];
}
