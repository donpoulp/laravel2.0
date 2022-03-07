@php
use App\Models\Product;    
@endphp

@extends('template')
@section('titre', 'Poduct List')

@section('h1', 'Liste des produits')

@section('contenue')
    <div class="container">
        <div class="row">
            {{-- @foreach ($produit as $products) --}}
            @foreach (Product::all() as $products)
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{ URL::asset($products->image)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$products->name}}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{$products->price}} $</h6>
                                    <p class="card-text">{{$products->description}}</p>
                                        <a href="/public/cart" class="btn mr-2 btn1"><i class="fas fa-link"></i> Ajouter au Panier</a>
                                        <a href="/public/product/{{$products->id}}" class="btn btn1"><i class="fab fa-github"></i> ...</a>
                        </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
