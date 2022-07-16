@extends('layouts.base')

@section('page-title')
    All Comics
@endsection

@section('page-content')
    <h1>Comics</h1>
    @dump($comics)
@endsection