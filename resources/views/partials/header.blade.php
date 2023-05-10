<header>

    <div class="container">
        <div class="d-flex space-between flex-center">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo dc">
            <ul>
                @foreach ($dc_comics as $dc_comic )
                <li>
                    <a href="{{$dc_comic['href']}}">{{$dc_comic['text']}}</a>
                </li>
                @endforeach
                <li>
                    <input type="search" placeholder="Search">
                </li>
            </ul>
        </div>
    </div>


</header>
