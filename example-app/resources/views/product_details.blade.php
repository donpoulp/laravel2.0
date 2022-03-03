@extends('template')
@section('titre', 'Poduct')

@section('h1')

@foreach ($test as $test)
{{$test->name}}

@endsection
@section('contenue')

<img src="{{ URL::asset($test->image)}}" class="card-img-top" alt="...">

@endforeach

@endsection

    {{-- <h1 class="container text-center">Produit {{ $test }}</h1> --}}