<div id="link-section">

    <div class="container">

        <div class="useful-links">
            @foreach($footerLinks as $footerLink) 
            <ul>
                <span class="title-link">{{$footerLink['title']}}</span>
                @foreach($footerLink['links'] as $link)
                    <li class="link">
                        {{$link}}
                    </li>
                @endforeach
            </ul>
            @endforeach

        </div>

        <p>
            All site Content TM and c 2020 Entertnainment, unless otherwhise <span>noted here</span>. All rights reserved. <span>Cookies settings</span>
        </p>
    </div>

</div>