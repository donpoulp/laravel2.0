@extends('template')
@section('titre', 'Poduct List')

@section('h1', 'Liste des produits')

@section('contenue')
    <div class="container mx-auto mt-4">
        <div class="row">
            @for ($i=0;$i<3;$i++)
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{ URL::asset('IMG/ZTkt4I5.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn mr-2 btn1"><i class="fas fa-link"></i> Ajouter au Panier</a>
                                        <a href="#" class="btn btn1"><i class="fab fa-github"></i> ...</a>
                        </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
@endsection
