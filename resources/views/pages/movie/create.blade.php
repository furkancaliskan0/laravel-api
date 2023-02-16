@extends('layouts.main-layout')

@section('content')

<div class="container">
    <h1>Create New Movie</h1>
    <form action="{{route('movie.store')}}" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name">
        <br>
        <label for="year">Year</label>
        <input type="number" name="year">
        <br>
        <label for="cashOut">Cash-Out</label>
        <input type="number" name="cashOut">
        <br>
        <h3>Genre</h3>
        <select name="genre_id">
            @foreach ($genres as $genre)
                <option value="{{ $genre -> id }}">{{ $genre -> name }}</option>    
            @endforeach
        </select>
        <h3>Tags</h3>
        @foreach ($tags as $tag)
            <input type="checkbox" name="tags[]" value="{{ $tag -> id }}" id="{{ $tag -> id}}">
            <label for="{{ $tag -> id}}">{{ $tag -> name }}</label>
            <br>            
        @endforeach
        <br>
        <input type="submit" value="Create New Movie">
    </form>
</div>
@endsection