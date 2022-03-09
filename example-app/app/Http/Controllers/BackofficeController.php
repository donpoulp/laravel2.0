<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use App\Models\Categorie;
use App\Models\User;

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
        $userList = User::all();
        return view('back_office',['productList' => $productList, 'userList' => $userList]);
    }

    public function addProduct(Request $request){

        $newProduct = new Product();

        $newProduct->name = $request->input('name');
        $newProduct->price = $request->input('price');
        $newProduct->description = $request->input('description');
        $newProduct->image = $request->input('image');
        $newProduct->categorie_id = $request->input('categorie_id');

        $validator = Validator::make($request->all(),[
            'name' => 'bail|required|between:1,200',
            'price' => 'bail|required|integer|between:1,50000',
            'description' => 'bail|required',
            'image' => 'bail|required|url',
            'categorie_id' => 'bail|required'
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

    public function addUser(Request $request){

        $validator = Validator::make($request->all(),[
            'name' => 'bail|required|between:1,200',
            'email' => 'bail|required',
            'password' => 'bail|required',
            'cart_id' => 'bail|required|integer'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $newUser = new User();

        $newUser->name = $request->input('name');
        $newUser->email = $request->input('email');
        $newUser->password = $request->input('password');
        $newUser->cart_id = $request->input('cart_id');

        $newUser->save();

        return redirect('/backoffice');


    }

    public function deleteUser($id){
        // $id = $request->input('id');

        User::destroy($id);

        return redirect('/backoffice');
    }
}

