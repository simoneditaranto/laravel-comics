@extends('layouts/app')

@section('content')

    <main>
        
        <div class="container">

            <div class="current-series">
                Current series
            </div>
            
            <div class="comics-cards">

                @foreach($comics as $comicItem)
                <a href="comicsDescription" class="comic-card">
                    <div class="comic-img">
                        <img src="{{$comicItem['thumb']}}" alt="">
                    </div>
                    <span>{{ $comicItem['series'] }}</span>
                </a>
                @endforeach

            </div>

            <button class="btn"> 
                Load more
            </button>

        </div>

    </main>

    <section class="icons">

        <div class="cards container">
            
            @foreach($iconLinks as $icon)
                <div class="card-item">
                    <div class="card-img">
                        <img src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="">
                    </div>
                    <div class="icon-text">
                        {{$icon['icon-title']}}
                    </div>
                </div>
            @endforeach

        </div>

    </section>

@endsection