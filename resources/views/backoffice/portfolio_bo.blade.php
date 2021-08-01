@extends('template.BO')

@section('content')
<h1>PAGE Portfolio</h1>

    <div class="buttonPodback">
    <a href="{{route('createPortfolio')}}">
        <button type="submit">Ajouter un élément</button>
        </a>
        <a href="{{route('hombo')}}">
        <button type="submit">Retour backoffice</button>
        </a>
    </div>
    <div class="globaleProduct">
        @foreach ($dataPort as $item)
        <div>
        <p>titre:{{$item->titre}}</p>
            <p>lien image:{{$item->img1}}</p>
            <p>petit-titre:{{$item->titre_small}}</p>
            <p>description:{{$item->description}}</p>
            <p>lien image:{{$item->img2}}</p>
            <p>lien image:{{$item->img3}}</p>
            <p>lien image:{{$item->img4}}</p>
            <p>lien image:{{$item->img5}}</p>
    <div class="buttonDelEd">
    <form action="{{route('deletePortfolio', $item->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">DELETE</button>

                </form>
                <a href="{{route('editPortfolio', $item->id)}}">
                    <button type="submit">
                        EDIT
                    </button>
                </a>
            </div>
        </div>
        @endforeach
    </div>

@endsection