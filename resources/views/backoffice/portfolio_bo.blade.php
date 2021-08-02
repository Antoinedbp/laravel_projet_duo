@extends('template.BO')

@section('content')
<h1 class="titresBO">PAGE Portfolio</h1>

    <div class="buttonsBO">
        <a href="{{route('createPortfolio')}}" class="aBtn">
            <button class="monBtn1" type="submit">Ajouter un élément</button>
        </a>
        <a href="{{route('hombo')}}" class="aBtn">
            <button class="monBtn2" type="submit">Retour backoffice</button>
        </a>
    </div>
    <div class="globaleProduct">
        @foreach ($dataPort as $item)
        <div class="maDiv2">
            <p>titre:{{$item->titre}}</p>
            <p>lien image 1:{{$item->img1}}</p>
            <p>petit-titre:{{$item->titre_small}}</p>
            <p>description:{{$item->description}}</p>
            <p>lien image 2:{{$item->img2}}</p>
            <p>lien image 3:{{$item->img3}}</p>
            <p>lien image 4:{{$item->img4}}</p>
            <p>lien image 5:{{$item->img5}}</p>
            <div class="buttonDelEd">
                <form action="{{route('deletePortfolio', $item->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btnDel" type="submit">DELETE</button>

                </form>
                <a href="{{route('editPortfolio', $item->id)}}">
                    <button class="btnEd" type="submit">
                        EDIT
                    </button>
                </a>
            </div>
        </div>
        @endforeach
    </div>

@endsection