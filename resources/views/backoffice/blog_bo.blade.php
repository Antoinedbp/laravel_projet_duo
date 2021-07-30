@extends('template.welcome')

@section('content')
    <h1>Page Home Product</h1>
    <h4>Liste de produits existants:</h4>
    <div class="row">
        <button class="btn btn-success">Ajouter un produit</button>
        <button class="btn btn-secondary">Retour backoffice</button>
    </div>
    @foreach ( as )
        <div class="card" style="width: 18rem;">
            <div class="card-body">
            <h5 class="card-title">Produit numéro </h5>
            <h6 class="card-subtitle mb-2 text-muted">Titre</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
            </div>
        </div>
    @endforeach

@endsection