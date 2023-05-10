<footer>
    <div class="footer-up">
        <div class="container d-flex">
            <div class="">
                <h3>Dc Comics</h3>
                <ul>
                    @foreach ($dc_comics as $dc_comic )
                    <li>
                        <a href="{{$dc_comic['href']}}">{{$dc_comic['text']}}</a>
                    </li>
                    @endforeach
                </ul>
                <h3>Shop</h3>
                <ul>
                    @foreach ($shop as $element )
                    <li>
                        <a href="{{$element['href']}}">{{$element['text']}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>

            <div class="dc">
                <h3>DC</h3>
                <ul>
                    @foreach ($dc as $dc_element )
                    <li>
                        <a href="{{$dc_element['href']}}">{{$dc_element['text']}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="sites">
                <h3>Sites</h3>
                <ul>
                    @foreach ($sites as $site )
                    <li>
                        <a href="{{$site['href']}}">{{$site['text']}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        
    </div>
</footer>