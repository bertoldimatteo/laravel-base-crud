@extends('layouts.base')

@section('page-title')
    {{$comic->title}}
@endsection

@section('page-content')
    <a href="{{route('comics.index')}}">Home</a>
    <h1>{{$comic->title}}</h1>
    <img src="{{$comic->image}}" alt="{{$comic->title}}">
    <p>{{$comic->description}}</p>
    <h3>{{$comic->price}}</h3>
@endsection