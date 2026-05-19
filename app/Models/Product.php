<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // products
    protected $fillable = [
        'user_id',
        'product_image',
        'product_name',
        'category',
        'price',
        'stock',
        'description'
    ];

    public function User(){
        return $this->belongsTo(User::class);
    }
}
