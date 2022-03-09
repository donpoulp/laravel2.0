<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Http\Controllers\CartController;

class Cart extends Model
{
    use HasFactory;

    public function products(){
        return $this->belongsToMany(Product::class);
    }
    public function users(){
        return $this->belongsTo(User::class);
    }
}
