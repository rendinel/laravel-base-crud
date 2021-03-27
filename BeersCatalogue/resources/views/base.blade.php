<html>

<head>
    <title>Boolean Laravel - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
    <script src="{{ asset('js/app.js') }}"></script>

</head>

<body>

    {{-- @php
      dump($errors);
        if($errors->has('brewer')) {
            echo 'Il titolo ha un errore';
            echo $errors->first('brewer');
        }
    @endphp --}}

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="container">
        @yield('content')
    </div>

</body>

</html>
