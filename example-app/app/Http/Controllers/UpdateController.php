<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class UpdateController extends Controller
{
    public function show($id){
        $backUpdate = Product::where('id', $id)->get();
        return view('update',['id' => $backUpdate]);
    }
    public function updateProduct(Request $request, $id){

        $updateProduct = Product::find($id);

        $updateProduct->name = $request->input('name');
        $updateProduct->price = $request->input('price');
        $updateProduct->description = $request->input('description');
        $updateProduct->image = $request->input('image');

        $updateProduct->save();
        return redirect('/backoffice');
    }
}
