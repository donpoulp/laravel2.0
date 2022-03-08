<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cart;
use App\Models\Product;

class product_has_carts extends Model
{
    use HasFactory;

    public function product(){
        return $this->belongToMany(Product::class);
    }

    public function cart(){
        return $this->belongToMany(Cart::class, 'carts');
    }
}
