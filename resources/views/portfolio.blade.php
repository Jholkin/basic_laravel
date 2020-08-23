@extends('layout')

@section('title', 'Portfolio')

@section('content')
    <h1>Portfolio</h1>

    <ul>
        @isset($portafolio)
            @foreach ($portafolio as $itemPortafolio)
                <li> {{$itemPortafolio->title}} <small>{{ $loop->last ? "es el ultimo" : "" }}</small> </li>
            @endforeach
        @else
            <p>No hay proyectos que mostar</p>
        @endisset
    </ul>

@endsection