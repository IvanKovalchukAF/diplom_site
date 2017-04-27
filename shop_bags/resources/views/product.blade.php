@extends('layouts.main')

@section('content')
        @foreach($images as $image)
            <img src="{{$image->path_image}}" height="150px" width="150px" />
        @endforeach
        <p>
            <p>{{$good->name}}</p>
            <p>{{$good->description}}</p>
            <p>$ {{$good->price}}</p>
        </p>
    <form action="/order/{{$good->id}}">
        <input type="submit" value="order" class="btn btn-primary">
    </form>
@endsection