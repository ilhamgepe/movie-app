@extends('layouts.app')
@section('content')
    <div class="hero"style='background-image: url({{asset("images/hero.jpg")}});'>
        <div class="container py-5">
            <h1 class="fw-bolder mt-5">Welcome.</h1>
            <p class="fw-bold">Millions of movies, TV shows and people to discover. Explore now.</p>
            <a href="#" class="btn btn-success mt-3 mx-auto"><h3>Subscibe now</h3></a>
        </div>
    </div>
    {{-- <div class="container mt-5 mb-5">
        <div class="row popular-movies d-flex justify-content-center">
                <x-actor-card />
        </div>
    </div> --}}
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
{{-- modal --}}
{{-- <div class="footer-kartu text-center">
                   
    <div class="modal fade" id="movie{{$movie['id']}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">{{$movie['title']}}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            ...
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        </div>
    </div>
</div> --}}