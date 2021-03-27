{{-- @php

    if(isset($edit) && !empty($edit)) {
        $method = 'PUT';
        $url = route('beers.update', compact('beer'));
    } else {
        $method = 'POST';
        $url = route('beers.store');
    }

@endphp

<form action="{{$url}}" method="post">

    @csrf

    @method('PUT')

    <div class="form-group {{ $errors->has('brewer') ? 'is-invalid' : 'Destroy' }}">
        <label for="title">Brewer</label>
        <input class="form-control" type="text" name="brewer" placeholder="Brewer" value="{{ isset($beer) ? $beer->brewer : ''}}">
        <div class="invalid-feedback">
            {{$errors->first('brewer')}}
        </div>
    </div>

    <div class="form-group">
        <label for="name">Name</label>
        <input class="form-control" type="text" name="name" placeholder="Name" value="{{isset($beer) ? $beer->name : ''}}">
    </div>

    <div class="form-group">
        <label for="price">Price</label>
        <input class="form-control" type="text" name="price" placeholder="Price" value="{{isset($beer) ? $beer->price : ''}}">
    </div>

    <div class="form-group">
        <label for="cover">Cover</label>
        <input class="form-control" type="text" name="cover" placeholder="Cover Url" value="{{isset($beer) ? $beer->cover : ''}}">
    </div>

    <input type="submit" value="Invia">
    </form>

    <a href="/beers" class="btn btn-primary">Return Home</a> --}}

