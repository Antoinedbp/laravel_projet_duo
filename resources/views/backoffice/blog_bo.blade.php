@extends('template.BO')

@section('content')
<h1>PAGE BLOG</h1>

    <div class="buttonPodback">
    <a href="{{route('')}}">
        <button type="submit">Ajouter un élément</button>
        </a>
        <a href="{{route('')}}">
        <button type="submit">Retour backoffice</button>
        </a>
    </div>
    <div class="globaleProduct">
        <div>
            <p>titre:</p>
            <p>lien image:</p>
            <p>description:</p>
            <div class="buttonDelEd">
                @method('DELETE')
                <button type="submit">DELETE</button>
                <a href="{{route('')}}">
                    <button type="submit">
                        EDIT
                    </button>
                </a>
            </div>
        </div>
    </div>

@endsection