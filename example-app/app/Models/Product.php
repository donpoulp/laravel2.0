<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cart;
use App\Models\Categorie;

class Product extends Model
{
    use HasFactory;

    protected $table = 'produit';
    protected $primaryKey = 'id';
    public $incrementing = true;

    protected $fillable = [
        'name' => 'required',
        'price' => 'required',
        'description' => 'required',
        'image' => 'required',
    ];
    // public function cart(){
    //     return $this->belongToMany(Cart::class, 'carts');
    // }
    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }
}
