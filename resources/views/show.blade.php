@extends('layouts.app')
@section('content')
{{-- @dump($movie) --}}
<div class="container-fluid bg-detail-movie">
    <div class="container color-white py-5">
       <div class="row gy-4">
           <div class="col-lg-3 col-md-3 col-sm-12">
               <div class="card border-0 rounded-3" style="width: 100%;">
                    <a href="#">
                        <img src="{{'https://image.tmdb.org/t/p/w500/'.$movie['poster_path']}}" class="card-img-top">
                    </a>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12">
                <div class="mt-3">
                    <h1 class="fw-bold"><a href="#">{{ $movie['title'] }}</a> <span class="fw-normal color-grey">({{substr($movie['release_date'],0,4)}})</span></h1>
                </div>
                <div class="fact">
                    <span class="certification">TV-MA</span>
                    @foreach ($movie['genres'] as $genre)
                        <span>{{$genre['name']}}@if(!$loop->last), @endif</span>
                        @endforeach
                        <span class="titik">
                            @if ($jam < 1)
                            {{$menit."m"}}
                            @else
                            {{$jam.'h'." ".$menit."m"}}
                            @endif
                        </span>
                </div>
                <div class="mt-4">
                    <h4 class="fw-light fst-italic"></h4>
                    <h4 class="fw-bolder mt-2">Kilasan Singkat</h4>
                    <p class="fw-500">{{$movie['overview']}}</p>
                </div>
               <div class="row mt-lg-3 mt-md-3">
                   @foreach ($credit['crew'] as $credit) 
                   @if ($credit['job'] == 'Screenplay')
                        <div class="col-4">
                            <a href="#"><p class="mb-0">{{$credit['original_name']}}</p></a>
                            <p>{{$credit['job']}}</p>
                        </div>
                        @elseif($credit['job'] == 'Director')
                            <div class="col-4">
                                <a href="#"><p class="mb-0">{{$credit['original_name']}}</p></a>
                                <p>{{$credit['job']}}</p>
                            </div>
                        @elseif($credit['job'] == 'Writer')
                            <div class="col-4">
                                <a href="#"><p class="mb-0">{{$credit['original_name']}}</p></a>
                                <p>{{$credit['job']}}</p>
                            </div>
                        @elseif($credit['job'] == 'Novel')
                            <div class="col-4">
                                <a href="#"><p class="mb-0">{{$credit['original_name']}}</p></a>
                                <p>{{$credit['job']}}</p>
                            </div>
                            @elseif($credit['job'] == 'Story')
                            <div class="col-4">
                                <a href="#"><p class="mb-0">{{$credit['original_name']}}</p></a>
                                <p>{{$credit['job']}}</p>
                            </div>
                        @elseif($credit['job'] == 'Story')
                            <div class="col-4">
                                <a href="#"><p class="mb-0">{{$credit['original_name']}}</p></a>
                                <p>{{$credit['job']}}</p>
                            </div>
                        @elseif($credit['job'] == 'Story')
                            <div class="col-4">
                                <a href="#"><p class="mb-0">{{$credit['original_name']}}</p></a>
                                <p>{{$credit['job']}}</p>
                            </div>
                   @endif 
                    @endforeach
               </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <p>test</p>
</div>
@endsection