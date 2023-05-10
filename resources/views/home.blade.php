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
                    <img src="{{$comic['thumb']}}" alt="">
                    <p>{{$comic['series']}}</p>
                </div>
            @endforeach
          
        </div>
        <div class="loading">
          <span>LOAD MORE</span>
        </div>
      </div>
@endsection