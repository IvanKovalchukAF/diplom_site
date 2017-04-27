@extends('layouts.head')

@section('body')

<!-- WELCOME -->
<div id="shop_bags" class="text-center" >
    <h2>WELCOME to Burmistrovy SHOP!</h2>
    <p>We have the best prices for quality products!!!</p>
</div>


    <!-- categories column -->
<div class="starter-template">
    <div class="row">
        <div class="col-md-3">
            @include('categories')
        </div>
        <div class="col-md-9">
            @yield('content')

        </div>
    </div>
</div>

@endsection

