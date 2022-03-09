<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    public function show(){
        $carts = Cart::find(1);

        // $total
        $A = 0;
        $B = 0;
        foreach($carts->products as $product){
         $A = $product->price;
         $B+=$A;  
        }

        return view('cart',['cart' => $carts, 'total' => $B]);
    }
    public function addProduct($id){

        $product = Product::find($id);
        $cart = Cart::find(1);

        $cart->products()->attach($product);

        return redirect('/cart');


    }
    public function deleteProduct($id){

        $product = Product::find($id);
        $cart = Cart::find(1);

        $cart->products()->detach($product);

        return redirect('/cart');
    }
}
