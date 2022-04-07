<?php

namespace App\Modules\Product\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'image',
        'name',
        'upc',
        'url',
        'price',
        'quanty',
        'description',
        'colorid',
        'brandid',
        'userid',

        

    ];
    
  
    
}
