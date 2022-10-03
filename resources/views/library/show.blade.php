@extends('layout.app')

@section('title', 'Comic Strip')

@section('elements')

    <div class="container d-flex justify-content-center">
        <div class="card my-3" style="width: 20rem;">
            <img src="{{$comicStrip->thumb}}" class="card-img-top" alt="{{$comicStrip->title}}">
            <div class="card-body">
                <h5 class="card-title">{{$comicStrip->title}}</h5>
                <p class="card-text">{{$comicStrip->description}}</p>
                <p class="card-text">{{$comicStrip->price}}</p>
                <p class="card-text">{{$comicStrip->series}}</p>
                <p class="card-text">{{$comicStrip->sale_date}}</p>
                <p class="card-text">{{$comicStrip->type}}</p>
            </div>
        </div>
    </div>

@endsection