@extends('layout.app')

@section('title', 'Add Comic Strip')

@section('elements')

<div class="container">

    <form class="mt-4" action="{{route('Library.store')}}" method="POST">

        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input placeholder="My Title" type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title')}}"/>
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Url Image</label>
            <input placeholder="https://" type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value="{{old('thumb')}}"/>
            @error('thumb')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea placeholder="Min 50 characters" id="description" name="description" class="form-control @error('description') is-invalid @enderror">{{old('description')}}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input placeholder="0,00 €" type="text" inputmode="numeric" class="form-control @error('price') is-invalid @enderror " id="price" name="price" value="{{old('price')}}"/>
            @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" inputmode="numeric" class="form-control @error('series') is-invalid @enderror" id="series" name="series" value="{{old('series')}}"/>
            @error('series')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale date</label>
            <input type="date" inputmode="numeric" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" value="{{old('sale_date')}}"/>
            @error('sale_date')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" inputmode="numeric" class="form-control @error('type') is-invalid @enderror" id="type" name="type" value="{{old('type')}}"/>
            @error('type')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Add Comic Strip</button>

    </form>
</div>




@endsection