@extends('layout.app')

@section('title', 'Library List')

@section('elements')

<div class="container overflow-auto">

    @if (session('status'))
        <div class="alert alert-danger mt-3">
            {{ session('status') }}
        </div>
    @endif


    @if (session('add'))
        <div class="alert alert-success mt-3">
            {{ session('add') }}
        </div>
    @endif

        <a class="btn btn-primary mt-3" href="{{route('Library.create')}}">Add Comics</a>
        <table class="table table-striped my-4 border">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Series</th>
                    <th scope="col">Sale date</th>
                    <th scope="col">Type</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach ($comicsList as $comicStrip)
                <tr>
                    <th scope="row">{{$comicStrip->id}}</th>
                    <td>{{$comicStrip->title}}</td>
                    <td>{{$comicStrip->series}}</td>
                    <td>{{$comicStrip->sale_date}}</td>
                    <td>{{$comicStrip->type}}</td>
                    <td>{{$comicStrip->price . ' €'}}</td>
                    <td class="d-flex">
                        <a href="{{route('Library.show', ['Library' => $comicStrip])}}"><i class="fa-solid fa-eye fs-5 m-2 text-primary"></i></a>
                        <a href="{{route('Library.edit', ['Library' => $comicStrip])}}"><i class="fa-solid fa-pen-to-square fs-5 m-2 text-warning"></i></a>
                        <form id="btn" action="{{route('Library.destroy', ['Library' => $comicStrip])}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure ?')" class="border-0 bg-transparent p-0"><i class="fa-solid fa-trash fs-5 m-2 text-danger"></i></button>
                        </form>
                    </td>

                </tr>
                @endforeach
    
            </tbody>
        </table>
</div>



@endsection