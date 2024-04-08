<nav>

    <div class="nav-top">
        <div class="container d-flex justify-content-end gap-4 text-white py-1">
            <div class="visa">
                dc power visa 
            </div>
            <div class="sites">
                additional sites
            </div>
        </div>
    </div>

    <div class="nav-bot">

        <div class="container d-flex justify-content-between align-items-center">
            <img class="logo" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo comics">
        
            <ul>
                @foreach($navLinks[0] as $link)
                    <li>{{$link}}</li>
                @endforeach
            </ul>

            <div class="search">
                Search
            </div>
        </div>


    </div>




</nav>