@extends('layout')

@section('title', 'Home')

@section('content')
    <h1>Bienvenid@ {{$name ?? "Invitado"}}</h1>
@endsection