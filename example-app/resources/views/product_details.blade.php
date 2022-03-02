@extends('template')
@section('titre', 'Poduct')

@section('h1')
Produit
@endsection

@section('contenue')

@foreach ($test as $test)

<img src="{{ URL::asset($test->image)}}" class="card-img-top" alt="...">

@endforeach

@endsection

    {{-- <h1 class="container text-center">Produit {{ $test }}</h1> --}}