<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    
}
