@extends('layouts/app')

@section('content')

<section id="comic-item">
    
    <div class="comic-post">

        <div class="container">
            <div class="comic-image">
                <img src="https://www.coverbrowser.com/image/action-comics/1-1.jpg" alt="">
            </div>
        </div>

    </div>

    @include('partials/comicItem')

    @include('partials/comicItemTable')

</section>


@endsection
