@extends('base')

@section('title', 'Create')

@section('content')

<form action="{{route('beers.store')}}" method="post">
    @csrf
    {{-- scriviamo a mano l'input --}}
    {{-- <input name="_method" type="hidden" value="POST"> --}}
    {{-- oppure usiamo blade --}}
    @method('POST')

    <div class="form-group {{ $errors->has('brewer') ? 'is-invalid' : 'Destroy' }}">
        <label for="title">Brewer</label>
        <input class="form-control" type="text" name="brewer" placeholder="Brewer">
        <div class="invalid-feedback">
            {{$errors->first('brewer')}}
        </div>
    </div>

    <div class="form-group">
        <label for="name">Name</label>
        <input class="form-control" type="text" name="name" placeholder="Name">
    </div>

    <div class="form-group">
        <label for="price">Price</label>
        <input class="form-control" type="text" name="price" placeholder="Price">
    </div>

    <div class="form-group">
        <label for="cover">Cover</label>
        <input class="form-control" type="text" name="cover" placeholder="Cover Url">
    </div>

    <input type="submit" value="Invia">
    </form>

    <a href="/beers" class="btn btn-primary">Return Home</a>

@endsection
