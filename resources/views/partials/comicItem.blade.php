<div id="comic-item ">

    <div class="container py-5">

        <div class="description">

            <h2>{{$comics[0]['title']}}</h2>
            
            <div class="price">
                <div class="number-price">
                    <span class="from">U.S. Price:</span>
                    <span class="number">{{$comics[0]['price']}}</span>
                </div>

                <div class="is-avaiable">
                    <span class="avaiable">avaiable</span>

                    <span class="check">Check Availability</span>
                </div>
                
            </div>
    
            <p>
                {{$comics[0]['description']}}
            </p>
        </div>

        <div class="apply-now">
            <h2>advertisement</h2>
            <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="">
        </div>

    </div>

</div>