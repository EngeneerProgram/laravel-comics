
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

<div class="container-fluid   card card-info">
    <div class="sinistra  ">
        <div class="up ">
            
            <div class="info1">Art by: 
               
            </div>
            <div class="artist">
                @forelse (
                   $response as $item)
                   <small>{{$item}}</small>
                   
               @empty
                   
               @endforelse
               <hr>
            </div>
        </div>
        <div class="up">

             
            <div class="info1">Writen by: 
               
            </div>
            <div class="artist">
                @forelse (
                   $responses as $items)
                   <small>{{$items}}</small>
                   
               @empty
                   
               @endforelse
               <hr>

            </div>
        </div>
        
    </div>

    
    <div class="destra d-flex flex-column">
        <small>Series: {{$comic['series']}}</small>
        
        <small>U:S. Price{{$comic['price']}}</small>
        
        <small>On sale date: {{$comic['sale_date']}}</small>
        
    </div>
</div>



@endsection