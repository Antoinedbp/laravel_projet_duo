@extends('template.BO')
@section('content')
<h1 class="title_home">PAGE HOME</h1>
<a href="{{route('home')}}">
  <button type="submit">RETOUR VERS LE SITE</button>
</a>
<div class="globaleHome" >
  <div class="globale2">

    <div class="blog">
      <h3>Modification BLOG</h3>
      <p>CRUD BLOG</p>
      <a href="{{route('blog_bo')}}">
      <button type="submit">DIRECTION BLOG</button>
      </a>
    </div>
    <div class="portfolio">
        <h3>Modification PORFOLIO</h3>
        <p>CRUD PORFOLIO</p>
        <a href="{{route('portfolio_bo')}}">
          <button type="submit">DIRECTION PORTFOLIO</button>
        </a>
    </div>
  </div>
  
</div>
@endsection

