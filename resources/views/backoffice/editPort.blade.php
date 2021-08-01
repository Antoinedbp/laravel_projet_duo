@extends('template.BO')
@section('content')
<h1>EDIT BLOG</h1>
<form action="{{route('updatePortfolio',$portfolio->id )}}" method="POST">
    @method('PUT')
    @csrf
    <label for="">titre</label>
    <input type="text" name="titre">
    <label for="">lien image</label>
    <input type="text" name="img1">
    <label for="">petit-titre:</label>
    <input type="text" name="titre_small">
    <label for="">lien image</label>
    <input type="text" name="img2">
    <label for="">lien image</label>
    <input type="text" name="img3">
    <label for="">lien image</label>
    <input type="text" name="img4">
    <label for="">lien image</label>
    <input type="text" name="img5">
    <label for="">description</label>

    <input type="text" name="description">

    <button type="submit">EDIT</button>

   
</form>


@endsection

