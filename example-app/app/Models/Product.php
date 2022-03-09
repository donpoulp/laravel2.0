<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cart;
use App\Models\Categorie;
use App\Models\User;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'id';
    public $incrementing = true;

    protected $fillable = [
        'name' => 'required',
        'price' => 'required',
        'description' => 'required',
        'image' => 'required',
    ];

    public function carts(){
        return $this->belongsToMany(Cart::class);
    }
    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }
}
