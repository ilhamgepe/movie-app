@extends('layouts.app')
@section('content')
    <div class="hero"style='background-image: url({{asset("images/hero.jpg")}});'>
        <div class="container py-5">
            <h1 class="fw-bolder mt-5">Welcome.</h1>
            <p class="fw-bold">Millions of movies, TV shows and people to discover. Explore now.</p>
            <a href="#" class="btn btn-success mt-3 mx-auto"><h3>Subscibe now</h3></a>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row popular-movies d-flex justify-content-center">
            <h1 class="pb-2">Popular Movies</h1>

            @foreach ($popularMovies as $movie)
                <x-movie-card :movie="$movie" :genres="$genres" />
                @endforeach
                
            </div>
            <div class="row now-playing d-flex justify-content-center">
                <h1 class="pb-2">Now playing Movies</h1>
                @foreach ($nowPlayingMovies as $movie)  
                    <x-movie-card :movie="$movie" :genres="$genres" /> 
                @endforeach

            </div>
    </div>

@endsection
