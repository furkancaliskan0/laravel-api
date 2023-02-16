@extends('layouts.main-layout')

@section('content')

<div class="container">
    <a href="{{ route('movie.create') }}">Create a New Movie</a>
    <h1>Movies</h1>
    @foreach ($genres as $genre)
        <h2 class="d-inline">Genre: {{ $genre -> name }}</h2>
        <ul>
            @foreach ($genre -> movies as $movie)
                @include('components.movie.list-item')
            @endforeach
        </ul>
        <hr>
    @endforeach
</div>
@endsection