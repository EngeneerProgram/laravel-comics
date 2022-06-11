@extends('layout.app')
@section('custom-css')
<link rel="stylesheet" href="{{asset('css/comics.css')}}">
@endsection
@section('content');
<div class="container-fluid hero_bg">
<a class="btn series current" href="#">Current Series</a>
</div>
<div class="container-fluid card_container">
<div class="container comics">
    <div class="row row-col-1 row-col-md-2 row-col-sm-2 row-col-lg-3">
        @forelse($comics as $index => $comic)
        <a href="{{route('single-comic', $index)}}">

        <div class="col">
            <div class="comic">
                <img src="{{$comic['thumb']}}" alt="">
                <p>{{$comic['series']}}</p>
            </div>
        </div>
        </a>

        @empty
        <div class="col">
            <p>no comic to show!!</p>
            
        </div>

        @endforelse

        <a class=" mt-5 center btn series" href="/">Load More</a>
    </div>

    
</div>
</div>

<div class="container-fluid card_img">
    <div class="container ico_section">
    <div class="row row-col-1 row-col-md-2 row-col-sm-2 row-col-lg-3">
        <div class="col d-flex align-items-center">
            <img class="ico"  src="../img/buy-comics-digital-comics.png" alt="">
            <p>digital comics</p>
        </div>

        <div class="col d-flex align-items-center">
            <img class="ico" src="../img/buy-comics-merchandise.png" alt="">
            <p>dc merchandise</p>
        </div>

        <div class="col d-flex align-items-center">
            <img class="ico" src="../img/buy-comics-subscriptions.png" alt="">
            <p>subscription</p>
        </div>

        <div class="col d-flex align-items-center">
            <img class="ico" src="../img/buy-comics-shop-locator.png" alt="">
            <p>comics shop locator</p>
        </div>

        <div class="col d-flex align-items-center">
            <img class="ico" src="../img/buy-comics-subscriptions.png" alt="">
            <p>dc power visa</p>
        </div>
    </div>
    </div>
</div>

@endsection