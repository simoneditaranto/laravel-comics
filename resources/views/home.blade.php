@extends('layouts/app')

@section('content')

    <main>
        
        <div class="container">

            <div class="current-series">
                Current series
            </div>
            
            <div class="comics-cards">

                @foreach($comics as $comicItem)
                <div class="comic-card">
                    <div class="comic-img">
                        <img src="{{$comicItem['thumb']}}" alt="">
                    </div>
                    <span>{{ $comicItem['series'] }}</span>
                </div>
                @endforeach

            </div>

            <button class="btn"> 
                Load more
            </button>

        </div>

    </main>

    <section class="icons">

        <div class="container">
            testo
        </div>

    </section>

@endsection