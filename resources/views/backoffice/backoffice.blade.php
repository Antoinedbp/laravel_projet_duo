@extends('template.welcome')

@section('content')
    <div class="container">
        <h1>BACK OFFICE | dashboard</h1>
        <button>Retour vers le site</button>
        <div class="row">
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Modification Home</h5>
                  <p class="card-text">CRUD HOME</p>
                  <a href="{{route('home')}}" class="btn btn-primary">Direction HOME</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Modification About</h5>
                  <p class="card-text">CRUD About</p>
                  <a href="{{route('about')}}" class="btn btn-primary">Direction about</a>
                </div>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Modification Product</h5>
                  <p class="card-text">CRUD Product</p>
                  <a href="{{route('product')}}" class="btn btn-primary">Direction PRODUCT</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Modification Store</h5>
                  <p class="card-text">CRUD Store</p>
                  <a href="{{route('store')}}" class="btn btn-primary">Direction STORE</a>
                </div>
              </div>
            </div>
        </div>
    </div>

@endsection