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

      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Brewer</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Cover</th>
          </tr>
        </thead>
        <tbody>
         @foreach ($beers as $beer)
          <tr>
            <th scope="row">{{$beer->id}}</th>
            <td><a href="/beers/{{$beer->id}}">{{$beer->brewer}}</a></td>
            <td><a href="{{route('beers.show', ['beer' => $beer->id ])}}">{{$beer->brewer}}</a></td>
            <td><a href="{{route('beers.show', compact('beer'))}}">{{$beer}}</a></td>
            <td>{{$beer->name}}</td>
            <td>{{$beer->price}}</td>
            <td><img src="{{$beer->cover}}" alt=""></td>
          </tr>
          @endforeach
        </tbody>
      </table>



    </body>
</html --}}

@extends('base')

@section('title', 'Index')

@section('content')
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Brewer</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Cover</th>
        <th scope="col">Icon</th>
      </tr>
    </thead>
    <tbody>
     @foreach ($beers as $beer)
      <tr>
        <th scope="row">{{$beer->id}}</th>
        {{-- <td><a href="/beers/{{$beer->id}}">{{$beer->brewer}}</a></td> --}}
        <td><a href="{{route('beers.show', ['beer' => $beer->id ])}}">{{$beer->brewer}}</a></td>
        {{-- <td><a href="{{route('beers.show', compact('beer'))}}">{{$beer}}</a></td> --}}
        <td>{{$beer->name}}</td>
        <td>{{$beer->price}}</td>
        <td><img src="{{$beer->cover}}" alt=""></td>
        <td><a href="/beers/create" class="btn btn-primary">Form</a></td>
        <td>
            <a href="{{route('beers.show', ['beer' => $beer->id ])}}">
                <i class="fas fa-eye"></i>
            </a>
        </td>
        <td>
            <a href="{{route('beers.edit', ['beer' => $beer->id ])}}">
                <i class="fas fa-eye"></i>
            </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
