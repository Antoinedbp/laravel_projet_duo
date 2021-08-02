@extends('template.BO')
@section('content')
<h1>EDIT BLOG</h1>
<form action="{{route('updateBlog', $blog->id)}}" method="POST">
    @csrf
    @method('PUT')
    <label for="">titre</label>
    <input type="text" name="titre">
    <label for="">img</label>
    <input type="text" name="img">
    <label for="">description</label>
    <input type="text" name="description">
    <button type="submit">edit</button>
</form>


@endsection

