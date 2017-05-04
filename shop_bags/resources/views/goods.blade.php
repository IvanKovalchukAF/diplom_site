@extends('layouts.main')

@section('content')
    @foreach($goods as $good)
        <div class="contain">
            <div class="col-sm-1 col-md-4">
                <div class="reply">
                        @foreach(App\GoodsImages::all() as $image)
                            @if($image->product_id == $good->id)
                                <img src="{{$image->path_image}}" height="200px" width="200px" />
                            @break
                            @endif
                        @endforeach

                    <div class="caption">
                        <h4>{{$good->name}}</h4>
                        <p>{{substr(($good->description), 0, 25)}}...</p>
                        <p><a href="/goods/{{$good->id}}" class="btn btn-primary" role="button">Overview</a> </p>
                    </div>
                </div>
            </div>
        </div>
        {{--<p>
            <a href="/goods/{{$good->id}}">
                {{$good->name}}

            </a>
        </p>
--}}
    @endforeach
@endsection

