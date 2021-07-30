@extends('template.welcome')
@section('content')

    @include('partialsHome.sec1')

    <main id="main" class="site-main">
        @include('partialsHome.sec2')
        @include('partialsHome.sec3')
        @include('partialsHome.sec4')
        @include('partialsHome.sec5')
        @include('partialsHome.sec6')
    </main><!-- /.site-main -->
@endsection