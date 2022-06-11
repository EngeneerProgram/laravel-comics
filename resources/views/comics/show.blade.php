
@extends('layout.app')

@section('custom-css')

<link rel="stylesheet" href="{{asset('css/comics.css')}}">
@endsection
@section('content');
<div class="container-fluid hero_bg">
<div class="container-fluid full"></div>
</div>
<div class="container mt-5 single_show ">
    <div class="img_single">
    <img class="img-fluid single" src="{{$comic['thumb']}}" alt="">


    </div>
<div class="container d-flex">
    <div class="card_info">
        <h1 class="title">{{$comic['title']}}</h1>
        <div class="price  d-flex">
            <div class="left d-flex justify-content-between bg-success">
                <span class="price">U.S. Price: {{$comic['price']}}</span>
                <span class="available">Avaible|</span>
            </div>
            <div class="right bg-success">
                <span>check availability &caron;</span>
            </div>
        </div>
        <div class="description_card">
        <p class="description">{{$comic['description']}}</p>
        </div>
    </div>

    <div class="thumb">
        
        
    </div>

    
   
   
</div>

<div class="container-fluid card">
    <div class="sinistra">
        <div class="up d-flex">
            <div class="info1">Art by: 
               
            </div>
            <div class="artist">
                
            </div>
        </div>
        
        
    </div>

    
    <div class="destra"></div>
</div>



@endsection