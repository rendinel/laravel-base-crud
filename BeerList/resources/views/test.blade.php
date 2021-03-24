<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Beer Catalogue</title>

    </head>
    <body>

      <h1>Beer Catalogue</h1>

      @foreach ($beers as $beer)
        <p>{{$beer->brewer}}</p>
      @endforeach

    </body>
</html>
