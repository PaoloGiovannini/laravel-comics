@extends('layouts.app')

@section('page-title', 'Home page')

@section('content')

    <div id="jumbotron">
    </div>
    <div class="wrap-up">
        <div class="container">
            <span class="button">Current Series</span>
        </div>
        <div id="container-fumetti" class="container d-flex">
            @foreach ($comics as $comic)
                <div class="card">
                    <img src="{{ $comic['thumb'] }}" alt="">
                    <p>{{ $comic['series'] }}</p>
                </div>
            @endforeach

        </div>
        <div class="loading">
            <span>LOAD MORE</span>
        </div>
    </div>
    <div>
        <div class="wrap-down">
            <div class="container d-flex space-around">
                <div class="d-flex flex-center">
                    <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="digital comics">
                    <span>DIGITAL COMICS</span>
                </div>
                <div class="d-flex flex-center">
                    <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="Merchandise">
                    <span>DC MERCHANDISE</span>
                </div>
                <div class="d-flex flex-center">
                    <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="subscription">
                    <span>SUBSCRIPTION</span>
                </div>
                <div class="d-flex flex-center">
                    <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="Comic shop locator">
                    <span>COMIC SHOP LOCATOR</span>
                </div>
                <div class="d-flex flex-center">
                    <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="DC power visa">
                    <span>DC POWER VISA</span>
                </div>
            </div>
        </div>

    </div>
@endsection
