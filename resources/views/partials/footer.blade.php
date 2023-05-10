<footer>
    <div class="footer-up">
        <div class="container d-flex">
            <div class="">
                <h3>Dc Comics</h3>
                <ul>
                    @foreach ($dc_comics as $dc_comic)
                        <li>
                            <a href="{{ $dc_comic['href'] }}">{{ $dc_comic['text'] }}</a>
                        </li>
                    @endforeach
                </ul>
                <h3>Shop</h3>
                <ul>
                    @foreach ($shop as $element)
                        <li>
                            <a href="{{ $element['href'] }}">{{ $element['text'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="dc">
                <h3>DC</h3>
                <ul>
                    @foreach ($dc as $dc_element)
                        <li>
                            <a href="{{ $dc_element['href'] }}">{{ $dc_element['text'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="sites">
                <h3>Sites</h3>
                <ul>
                    @foreach ($sites as $site)
                        <li>
                            <a href="{{ $site['href'] }}">{{ $site['text'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>
    <div class="footer-down">
        <div class="container d-flex space-between flex-center">
            <div class="button-sign-up">
                <span>SIGN-UP NOW</span>
            </div>
            <div>
                <span class="follow">FOLLOW US</span>
                <img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="facebook logo">
                <img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="twitter logo">
                <img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="youtube logo">
                <img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="pinterest logo">
                <img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="periscope logo">
            </div>
        </div>
    </div>
</footer>
