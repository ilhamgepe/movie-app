<div class="popular-movies col-lg-2 col-md-4 col-sm-12 d-flex justify-content-center my-2">
   
    <div class="kartu">
        <a href="{{route('movie.show', $movie['id'])}}"><img src="{{'https://image.tmdb.org/t/p/w500/'.$movie['poster_path']}}" alt=""></a>
        <div class="description px-2">
            <h6 class="fw-bold pt-2"><a href="{{route('movie.show', $movie['id'])}}">{{$movie['title']}}</a></h6>
            <div class="d-flex justify-content-between">
                <p class="color-gray">{{$movie['release_date']}}</p>
                <span ><i class="fas fa-star"></i>{{$movie['vote_average']}}</span>
            </div>

            <div class="genres-card">

                @foreach ($movie['genre_ids'] as $genre)
                {{-- untuk maksimal genre paling banyak 4 buah --}}
                 @if ($loop->index <= 3)
                    <span class="color-gray">{{ $genres->get($genre)  }}@if(!$loop->last), @endif</span>
                 @endif
                @endforeach    
                                        
            </div>

        </div>
    </div>
    
</div>