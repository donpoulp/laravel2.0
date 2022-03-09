@extends('template')
@section('titre', 'Cart')

@section('h1', 'Panier')

@section('contenue')
<section class="h-100 h-custom" style="background-color: black">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12">
          <div class="card card-registration card-registration-2 cardpanier" style="border-radius: 15px;">
            <div class="card-body p-0">
              <div class="row g-0">
                <div class="col-lg-8">
                  <div class="p-5">
                    <div class="d-flex justify-content-between align-items-center mb-5">
                      <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                      {{-- <h6 class="mb-0 text-muted">{{$pastille}} items</h6> --}}
                    </div>
                    <hr class="my-4">
                    @foreach ($cart->products as $product)
                    <div class="row mb-4 d-flex justify-content-between align-items-center">
                      <div class="col-md-2 col-lg-2 col-xl-2">
                        <img
                          src="{{$product->image}}" class="img-fluid rounded-3" alt="">
                      </div>
                      <div class="col-md-3 col-lg-3 col-xl-3">
                        {{-- <h6 class="text-muted">{{$product->name}}</h6> --}}
                        <h6 class="text-black mb-0">{{$product->name}}</h6>
                      </div>
                      <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                        
                      </div>
                      <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                        <h6 class="mb-0">{{$product->price}}$</h6>
                      </div>
                      <a href="/public/cart/delete/{{$product->id}}" id="submit" type="submit" class="btn btnred col-md-1">Delete</a>
                    </div>
                    @endforeach
                    
                    <hr class="my-4">
  
                    <div class="pt-5">
                      <h6 class="mb-0"><a href="/public/product" class="text-body"><i
                            class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a></h6>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 bg-grey">
                  <div class="p-5">
                    <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                    <hr class="my-4">
  

  
                    <h5 class="text-uppercase mb-3">Livraison</h5>
  
                    <div class="mb-4 pb-2">
                      <select class="select">
                        <option value="1">Livraison Standard- $5.00</option>
                        <option value="2">Livraison Rapide- $10.00</option>
                        <option value="3">Téléportation- $100.00</option>
                      </select>
                    </div>
  
                    <hr class="my-4 mt-5">
  
                    <div class="d-flex justify-content-between mb-5">
                      <h5 class="text-uppercase">Total</h5>
                      <h5>$ {{$total}}</h5>
                    </div>
  
                    <button type="button" class="btn btn-dark btn-block btn-lg"
                      data-mdb-ripple-color="dark">Valider le Panier</button>
  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

{{-- <button class="btn btn-link px-2 btn2"
                          onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                          <i class="fas fa-minus"></i>
                        </button>
  
                        <input id="form1" min="0" name="quantity" value="1" type="number"
                          class="form-control form-control-sm" />
  
                        <button class="btn btn-link px-2 btn2"
                          onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                          <i class="fas fa-plus"></i>
                        </button> --}}

