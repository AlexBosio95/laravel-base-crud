@extends('layout.app')

@section('title', 'Library List')

@section('elements')


<div class="container overflow-auto">
        <a class="btn btn-primary mt-3" href="{{route('Library.create')}}">Add Comics</a>
        <table class="table table-striped my-4 border">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Price</th>
                    <th scope="col">Series</th>
                    <th scope="col">Sale date</th>
                    <th scope="col">Type</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach ($comicsList as $comicStrip)
                <tr>
                    <th scope="row">{{$comicStrip->id}}</th>
                    <td>{{$comicStrip->title}}</td>
                    <td>{{$comicStrip->price}}</td>
                    <td>{{$comicStrip->series}}</td>
                    <td>{{$comicStrip->sale_date}}</td>
                    <td>{{$comicStrip->type}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route('Library.show', ['Library' => $comicStrip])}}">View</a>
                    </td>
                </tr>
                @endforeach
    
            </tbody>
        </table>
    </div>

@endsection