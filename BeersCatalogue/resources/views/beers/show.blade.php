{{--
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">

        <title>Beer Catalogue</title>

    </head>
    <body>

      <h1>Beer Catalogue</h1>

      @foreach ($beers as $beer)
        <p>{{$beer->brewer}}</p>
      @endforeach

        <div class="card" style="width: 10rem;">
            <img src="{{$beer->cover}}" class="card-img-top" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$beer->brewer}}</h5>
                <p>{{$beer->name}}</p>
                <a href="/beers" class="btn btn-primary">Return</a>
            </div>
        </div>



    </body>
</html --}}
@extends('base')

@section('title','Show')

@section('content')
<div class="card" style="width: 10rem;">
    <img src="{{$beer->cover}}" class="card-img-top" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">{{$beer->brewer}}</h5>
        <p>{{$beer->name}}</p>
        <a href="/beers" class="btn btn-primary">Return</a>
    </div>
</div>
@endsection
