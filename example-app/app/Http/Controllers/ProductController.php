<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function show($id)
    {
        $produitSeul = DB::select('select * from produit where id='.$id);
        return view('product_details',['test' => $produitSeul]);
    }

    public function showlist(){
        //dd(phpinfo());
        $productList = DB::select('select * from produit');
        return view('product_list', ['produit' => $productList]);
    }
}
