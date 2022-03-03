<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;  

class ProductController extends Controller
{
    public function show($id)
    {
        // $produitSeul = DB::select('select * from produit where id='.$id);
        $produitSeul = Product::where('id', $id)->get();
        return view('product_details',['test' => $produitSeul]);
    }

    public function showlist(){
        //dd(phpinfo());
        // $productList = DB::select('select * from produit');
        return view('product_list');
    }
}
