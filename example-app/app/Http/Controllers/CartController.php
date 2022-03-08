<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    // public function show()
    // {
    //     $carts = Cart::find(1)->product()->orderBy('name')->get();
    //     return view('cart',['carts' => $carts]);
    // }
    public function show(){
        $carts = Cart::all();
        return view('cart',['carts' => $carts]);
    }
    public function addProduct($id){

        $newCart = new Cart();

        $addProductToCart = Product::find($id);

        $newCart->id =  $addProductToCart->id;
        $newCart->quantity + 1;

        $addProductToCart->save();

        return redirect('/cart');


    }
}
