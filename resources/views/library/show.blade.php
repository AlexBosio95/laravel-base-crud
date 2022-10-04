@extends('layout.app')

@section('title', 'Comic Strip')

@section('elements')

    <div class="container d-flex justify-content-center">
        {{-- <div class="card" style="width: 20rem;">
            <img src="{{$comicStrip->thumb}}" class="card-img-top" alt="{{$comicStrip->title}}">
            <div class="card-body">
                <h5 class="card-title">{{$comicStrip->title}}</h5>
                <p class="card-text desc">{{$comicStrip->description}}</p>
                <p class="card-text">{{$comicStrip->price . ' €'}}</p>
                <p class="card-text">{{$comicStrip->series}}</p>
                <p class="card-text">{{$comicStrip->sale_date}}</p>
                <p class="card-text">{{$comicStrip->type}}</p>
            </div>
        </div> --}}

        <div class="card mb-3" style="max-width: 840px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{$comicStrip->thumb}}" class="image-float rounded-start" alt="{{$comicStrip->title}}">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{$comicStrip->title}}</h5>
                        <p class="card-text desc">{{$comicStrip->description}}</p>
                        <p class="card-text">{{$comicStrip->series}}</p>
                        <p class="card-text">{{$comicStrip->sale_date}}</p>
                        <p class="card-text">{{$comicStrip->type}}</p>
                        <p class="card-text"><small class="text-muted">{{$comicStrip->price . ' €'}}</small></p>
                    </div>
                </div>
                </div>
            </div>
    </div>

@endsection