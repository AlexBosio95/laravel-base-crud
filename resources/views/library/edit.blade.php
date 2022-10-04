@extends('layout.app')

@section('title', 'Add Comic Strip')

@section('elements')

<div class="container">

    <form action="{{route('Library.update', ['Library' => $comicStrip])}}" method="POST">

        @csrf
        @method('PUT')

        
        <div class="mb-3">
            <label for="title" class="form-label">title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$comicStrip->title}}"/>
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Url Image</label>
            <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comicStrip->thumb}}"/>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea id="description" name="description" class="form-control">{{$comicStrip->description}}</textarea>
        </div>
        
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" inputmode="numeric" class="form-control" id="price" name="price" value="{{$comicStrip->price}}"/>
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" inputmode="numeric" class="form-control" id="series" name="series" value="{{$comicStrip->series}}" />
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale date</label>
            <input type="date" inputmode="numeric" class="form-control" id="sale_date" name="sale_date" value="{{$comicStrip->sale_date}}"/>
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" inputmode="numeric" class="form-control" id="type" name="type" value="{{$comicStrip->type}}"/>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>

    </form>
</div>




@endsection