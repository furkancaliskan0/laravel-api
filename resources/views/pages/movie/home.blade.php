@extends('layouts.main-layout')

@section('content')
     <div class="container">
        <h1>All Movies</h1>
            @foreach ($movies as $movie)
                @include('components.movie.list-item')
            @endforeach
     </div>
@endsection