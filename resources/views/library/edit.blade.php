@extends('layout.app')

@section('title', 'Add Comic Strip')

@section('elements')

<div class="container">

    @if (session('update'))
        <div class="alert alert-success mt-3">
            {{ session('update') }}
        </div>
    @endif

    <form action="{{route('Library.update', ['Library' => $comicStrip])}}" method="POST">

        @csrf
        @method('PUT')

        
        <div class="mb-3">
            <label for="title" class="form-label">title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title', $comicStrip->title)}}"/>
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Url Image</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value="{{old('thumb',$comicStrip->thumb)}}"/>
            @error('thumb')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror">{{old('description',$comicStrip->description)}}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" inputmode="numeric" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{old('price', $comicStrip->price)}}"/>
            @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" inputmode="numeric" class="form-control @error('series') is-invalid @enderror" id="series" name="series" value="{{old('series', $comicStrip->series)}}" />
            @error('series')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale date</label>
            <input type="date" inputmode="numeric" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" value="{{old('sale_date', $comicStrip->sale_date)}}"/>
            @error('sale_date')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" inputmode="numeric" class="form-control @error('type') is-invalid @enderror" id="type" name="type" value="{{old('type', $comicStrip->type)}}"/>
            @error('type')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update</button>

    </form>
</div>




@endsection