@extends('template')
<link rel="stylesheet" href="{{ URL::asset('css/formulaire.css')}}">
@section('titre', 'Update')

@section('h1', 'Update')

@section('contenue')
<div class="form-body">
    <div class="row">
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    @foreach ($id as $id)
                    <h3>Update product N°{{$id->id}}</h3>
                    <form action="/public/backoffice/update/push/{{$id->id}}" method="POST" class="requires-validation" novalidate>
                        {{csrf_field()}}
                        <div class="col-md-12">
                           <input class="form-control" type="text" name="name" placeholder="Name" required>
                           <div class="valid-feedback">Name field is valid!</div>
                           <div class="invalid-feedback">Name field cannot be blank!</div>
                        </div>

                        <div class="col-md-12">
                            <input class="form-control" type="text" name="price" placeholder="Price" required>
                             <div class="valid-feedback">Email field is valid!</div>
                             <div class="invalid-feedback">Email field cannot be blank!</div>
                        </div>

                        <div class="col-md-12">
                            <input class="form-control" type="text" name="description" placeholder="Description" required>
                             <div class="valid-feedback">Email field is valid!</div>
                             <div class="invalid-feedback">Email field cannot be blank!</div>
                        </div>

                        <div class="col-md-12">
                            <input class="form-control" type="text" name="image" placeholder="Image (URL)" required>
                             <div class="valid-feedback">Email field is valid!</div>
                             <div class="invalid-feedback">Email field cannot be blank!</div>
                        </div>

                        <div class="form-button mt-3">
                            <button id="submit" type="submit" class="btn btn-primary">Go</button>
                        </div>
@endforeach
@endsection