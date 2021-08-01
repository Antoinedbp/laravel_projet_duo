@extends('template.BO')

@section('content')
<h1>PAGE BLOG</h1>

    <div class="buttonPodback">
    <a href="{{route('createBlog')}}">
        <button type="submit">Ajouter un élément</button>
        </a>
        <a href="{{route('hombo')}}">
        <button type="submit">Retour backoffice</button>
        </a>
    </div>
    <div class="globaleProduct">
        
        
        @foreach ($dataBlog as $item)
        <div>
        <p>titre:{{$item->titre}}</p>
        <p>lien image:{{$item->img}}</p>
        <p>description:{{$item->description}}</p>
            <div class="buttonDelEd">
            <form action="{{route('deleteBlog', $item->id)}}" method="post">
                @csrf
                    @method('DELETE')
                    <button type="submit">DELETE</button>
                </form>
                <a href="{{route('editBlog', $item->id)}}">
                    <button type="submit">
                        EDIT
                    </button>
                </a>
            </div>
        </div>
        @endforeach
    </div>

@endsection