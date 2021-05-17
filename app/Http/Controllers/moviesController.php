<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class moviesController extends Controller
{

    private const TOKEN_APP = 'eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiIxNzNhOGMzM2VkNTU2Zjc5YThkZmMxYjc3MDRlMDZkOCIsInN1YiI6IjYwOGEyMzUzMmRjNDRlMDA2ZmU5NzFmYyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.EeQzQBii0FIXduWKA-o7-eITeSQV3drv5eBHdUJcLJE';   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $popularMovies = Http::withHeaders([
            'Authorization' => 'Bearer '.self::TOKEN_APP,
            ])
            ->get('https://api.themoviedb.org/3/movie/popular')->json()['results'];


        $nowPlayingMovies = Http::withHeaders([
            'Authorization' => 'Bearer '.self::TOKEN_APP,
            ])
            ->get('https://api.themoviedb.org/3/movie/now_playing')->json()['results'];


        $genresArray = Http::withHeaders([
            'Authorization' => 'Bearer '.self::TOKEN_APP,
            ])
            ->get('https://api.themoviedb.org/3/genre/movie/list')->json()['genres'];

        $genres = collect($genresArray)->mapWithKeys( function($genre){
            return [$genre['id'] => $genre['name']];
        });
        // dump($nowPlayingMovies);
        
    
        return view('index', [
            'popularMovies' => $popularMovies,
            'nowPlayingMovies' => $nowPlayingMovies,
            'genres'=> $genres,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Http::withHeaders([
            'Authorization' => 'Bearer '.self::TOKEN_APP,
            ])
            ->get('https://api.themoviedb.org/3/movie/'.$id)->json();
        return view ('show',[
            'movie' => $movie,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // self::TOKEN_APP
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
