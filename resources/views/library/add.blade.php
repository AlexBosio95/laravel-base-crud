@extends('layout.app')

@section('title', 'Add Comic Strip')

@section('elements')

<div class="container">

    <form action="{{route('Library.store')}}" method="POST">

        @csrf

        
        <div class="mb-3">
            <label for="title" class="form-label">title</label>
            <input type="text" class="form-control" id="title" name="title" />
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Url Image</label>
            <input type="text" class="form-control" id="thumb" name="thumb" />
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea id="description" name="description" class="form-control"></textarea>
        </div>
        
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" inputmode="numeric" class="form-control" id="price" name="price" />
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" inputmode="numeric" class="form-control" id="series" name="series" />
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale date</label>
            <input type="date" inputmode="numeric" class="form-control" id="sale_date" name="sale_date" />
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" inputmode="numeric" class="form-control" id="type" name="type" />
        </div>

        <button type="submit" class="btn btn-primary">Add Comic Strip</button>

    </form>
</div>




@endsection