<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;

class BackofficeController extends Controller
{
        // public function __construct(){
            // $name = $_POST['name'];
            // $price = $_POST['price'];
            // $description = $_POST['description'];
            // $image = $_POST['image'];
        // }

    public function show(){
        $productList = Product::all();
        return view('back_office',['productList' => $productList]);
    }

    public function addProduct(Request $request){

        $newProduct = new Product();

        $newProduct->name = $request->input('name');
        $newProduct->price = $request->input('price');
        $newProduct->description = $request->input('description');
        $newProduct->image = $request->input('image');

        $validator = Validator::make($request->all(),[
            'name' => 'bail|required|between:1,200',
            'price' => 'bail|required|integer|between:1,50000',
            'description' => 'bail|required',
            'image' => 'bail|required|url'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $newProduct->save();

        return redirect('/backoffice');


    }

    public function deleteProduct($id){
        // $id = $request->input('id');

        Product::destroy($id);

        return redirect('/backoffice');
    }
}
