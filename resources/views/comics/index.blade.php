@extends('layouts.base')

@section('page-title')
    All Comics
@endsection

@section('page-content')
    <h1>Comics</h1>
    <div class="container">
        <div class="row">
        @foreach ($comics as $comic)
            <div class="col-lg-2">
                <img src="{{$comic->image}}" alt="{{$comic->title}}">
                <h2>{{$comic->title}}</h2>
                <div>
                    <a class="btn btn-danger" href="{{route('comics.show', $comic->id)}}">More Info</a>
                </div>  
            </div>
        @endforeach
        </div>
    </div>
@endsection