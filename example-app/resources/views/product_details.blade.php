@extends('template')
@section('titre', 'Poduct')

@section('h1')

@foreach ($test as $test)
{{$test->name}}

@endsection
@section('contenue')

<img src="{{ URL::asset($test->image)}}" class="card-img-top" alt="...">
{{-- <div class="container-fluid" style="background-image: url({{ URL::asset($test->image)}})" style="height: 100%">
frefergv
</div> --}}
@endforeach

@endsection

    {{-- <h1 class="container text-center">Produit {{ $test }}</h1> --}}