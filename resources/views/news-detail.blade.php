@extends("layouts.master")

@section('title', 'Games News | ' . ucfirst($slug))

@section('content')
    <h1> {{ ucfirst($slug) }} </h1>
@stop
