@extends('template.welcome')
@section('content')

@include('partials.homept1')
   <main id="main" class="site-main">
        @include('partials.homept2')
        @include('partials.homept3')
        @include('partials.homept4')
        @include('partials.homept5')
        @include('partials.homept6')
        </main><!-- /.site-main -->
@endsection