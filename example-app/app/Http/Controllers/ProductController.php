<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
    {
        return view('product_details',['test' => $id]);
    }

    public function showlist(){
        return view('product_list');
    }
}
