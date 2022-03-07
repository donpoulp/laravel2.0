@extends('template')
<link rel="stylesheet" href="{{ URL::asset('css/formulaire.css')}}">
@section('titre', 'BackOffice')

@section('h1')
BackOffice
@endsection

@section('contenue')

<div class="form-body">
    <div class="row">
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    <h3>Add new product</h3>
                    <form action="/public/backoffice/add" method="POST" class="requires-validation" novalidate>
                        {{csrf_field()}}
                        <div class="col-md-12">
                           <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" placeholder="Name" required>
                           @error('name')
                           <div class="invalid-feedback">Name field cannot be blank!</div>
                           @enderror
                        </div>

                        <div class="col-md-12">
                            <input class="form-control @error('price') is-invalid @enderror" type="text" name="price" placeholder="Price" required>
                            @error('price')
                             <div class="invalid-feedback">Email field cannot be blank!</div>
                             @enderror
                        </div>

                        <div class="col-md-12">
                            <input class="form-control @error('description') is-invalid @enderror" type="text" name="description" placeholder="Description" required>
                            @error('description')
                             <div class="invalid-feedback">Email field cannot be blank!</div>
                             @enderror
                        </div>

                        <div class="col-md-12">
                            <input class="form-control @error('image') is-invalid @enderror" type="text" name="image" placeholder="Image (URL)" required>
                            @error('image')
                             <div class="invalid-feedback">Email field cannot be blank!</div>
                             @enderror
                        </div>

                        <div class="form-button mt-3">
                            <button id="submit" type="submit" class="btn btn-primary">Go</button>
                        </div>

                    


                       {{-- <div class="col-md-12 mt-3">
                        <label class="mb-3 mr-1" for="gender">Gender: </label>

                        <input type="radio" class="btn-check" name="gender" id="male" autocomplete="off" required>
                        <label class="btn btn-sm btn-outline-secondary" for="male">Male</label>

                        <input type="radio" class="btn-check" name="gender" id="female" autocomplete="off" required>
                        <label class="btn btn-sm btn-outline-secondary" for="female">Female</label>

                        <input type="radio" class="btn-check" name="gender" id="secret" autocomplete="off" required>
                        <label class="btn btn-sm btn-outline-secondary" for="secret">Secret</label>
                           <div class="valid-feedback mv-up">You selected a gender!</div>
                            <div class="invalid-feedback mv-up">Please select a gender!</div>
                        </div>--}}
{{-- 
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                      <label class="form-check-label">I confirm that all data are correct</label>
                     <div class="invalid-feedback">Please confirm that the entered data are all correct!</div>
                    </div>
               --}}



                    </form>
                </div>
            </div>
        {{-- </div> --}}
    {{-- </div> --}}
{{-- </div> --}}

    <div class="row">
        <div class="form-content">
            <div class="form-items">
                <h3 class='mb-4'>Delete old product</h3>
                
                @foreach ($productList as $product)
                <div class="form-items2 mb-3">
                    {{-- <form action="/public/backoffice/delete/{{$product->id}}" method="POST" class="requires-validation" novalidate>
                        {{csrf_field()}} --}}
                        
                            <div class="row col-md-12 pr-3">
                            {{-- <select class="form-select mt-3" required> --}}
                                {{-- <option selected disabled value="">Choice product</option> --}}
                                   

                                
                                    
                                    <div class="col-md-12 mx-auto justify-content-center">{{$product->id}}. {{$product->name}}
                                        <img src="{{ URL::asset($product->image)}}" class="imgDelete pr-3" alt="...">
                                        <a href="/public/backoffice/delete/{{$product->id}}" id="submit" type="submit" class="btn btnred col-md-2">Delete</a>
                    {{-- </form> --}}
                    {{-- <form action="/public/backoffice/update/{{$product->id}}" method="POST" class="requires-validation" novalidate>
                        {{csrf_field()}} --}}
                                        <a  href="/public/backoffice/update/{{$product->id}}" id="submit" type="submit" class="btn btnorange col-md-2">Update</a>
                                    </div>
                                {{-- </form>             --}}
                            </div>
                </div>        
                @endforeach       
            </div>
        </div>
    </div>


@endsection