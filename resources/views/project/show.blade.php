@extends('layout')

@section('title', 'Portafolio | ' . $project->title)

@section('content')
    <h1>{{$project->title}}</h1>

    <a href=" {{route('project.edit')}} ">Editar</a>

    <p> {{$project->description}} </p>
@endsection