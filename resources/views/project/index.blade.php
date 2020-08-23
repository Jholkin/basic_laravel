@extends('layout')

@section('title', 'Portfolio')

@section('content')
    <h1>@lang('Projects')</h1>

    @auth
        <a href=" {{route('project.create')}} ">@lang('Crear nuevo proyecto')</a>
    @endauth

    <ul>
        @isset($projects)
            @foreach ($projects as $project)
                <li> <a href="{{route('project.show', $project)}}">{{$project->title}}</a> <small>{{ $loop->last ? "es el ultimo" : "" }}</small> </li>
            @endforeach
        @else
            <p>No hay proyectos que mostar</p>
        @endisset
    </ul>

@endsection