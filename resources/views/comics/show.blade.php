@extends('layout.app')
@section('custom-css')
<link rel="stylesheet" href="{{asset('css/comics.css')}}">
@endsection
@section('content');
<div class="container single_show d-flex text-center align-items-center justify-content-center">
    <div class="img_single">
    <img class="img-fluid single" src="{{$comic['thumb']}}" alt="">
    </div>
    <div class="text_single">
    <h5>{{$comic['series']}}</h5>
    <p>{{$comic['description']}}</p>
    <div class="info d-flex text-center  ml-3">
    <span class=" text-center data_uscita">{{$comic['sale_date']}}</span>
    <span class="text-center price ml-3">{{$comic['price']}}</span>
    </div>
    </div>
</div>



@endsection