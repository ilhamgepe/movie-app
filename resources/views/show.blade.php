@extends('layouts.app')
@section('content')
@dump($movie)
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
                    <span class="titik">1h 50m</span>
                </div>
                <div class="mt-4">
                    <h4 class="fw-light fst-italic">Winter Is Coming</h4>
                    <h4 class="fst-normal mt-2">Kilasan Singkat</h4>
                    <p>Tujuh keluarga bangsawan berjuang untuk menguasai tanah mitos Westeros. Gesekan antara rumah-rumah mengarah ke perang skala penuh. Semua sementara kejahatan yang sangat kuno terbangun di utara terjauh. Di tengah-tengah perang, perintah militer yang diabaikan, Night's Watch, adalah yang berdiri di antara alam manusia dan kengerian es di luarnya.</p>
                </div>
                <ol class="p-0">
                    <div class="row">
                        <div class="col-5">
                            <li>
                                <p class="mb-0 fw-bold"><a href="#">David Benioff</a></p>
                                <p class="fw-light">Kreator</p>
                            </li>
                        </div>
                        <div class="col-5">
                            <li>
                                <p class="mb-0 fw-bold"><a href="#">D. B. Weiss</a></p>
                                <p class="fw-light">Kreator</p>
                            </li>
                        </div>
                    </div>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection