@extends('layouts.main-layout')

@section('content')

<div class="container">
    <h1>Update Movie</h1>
    <form action="{{ route('movie.update', $movie) }}"method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" value="{{$movie -> name}}">
        <br>
        <label for="year">Year</label>
        <input type="number" name="year" value="{{$movie -> year}}">
        <br>
        <label for="cashOut">Cash-Out</label>
        <input type="number" name="cashOut" value="{{$movie -> cashOut}}">
        <br>
        <h3>Genre</h3>
        <select name="genre_id">
            @foreach ($genres as $genre)
            <option value="{{$genre -> id}}" 
                @if ($movie -> genre -> id == $genre -> id)
                    selected
                @endif>
                {{$genre -> name}}
            </option>
            @endforeach
        </select>
        <h3>Tags</h3>
        @foreach ($tags as $tag)
            <input type="checkbox" name="tags[]" value={{ $tag -> id }}
            @foreach ($movie -> tags as $tagMovie)
                @if ($tagMovie -> id == $tag -> id)
                checked
                @endif
            @endforeach> 
            <label for="tags">{{ $tag -> name }}</label>
            <br>            
        @endforeach
        <br>
        <input type="submit" value="Update Movie">
    </form>
</div>
@endsection