@extends('layout')

@section('title', 'Portfolio')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="display-4 mb-0">@lang('Projects')</h1>

            @auth
                <a class="btn btn-primary" href=" {{route('project.create')}} ">@lang('Crear nuevo proyecto')</a>
            @endauth
        </div>

        <p class="lead text-secondary">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore repudian.
        </p-lead>

        <ul class="list-group">
            @isset($projects)
                @foreach ($projects as $project)
                    <li class="list-group-item border-0 mb-3 shadow-sm">
                        <a class="text-secondary d-flex justify-content-between align-items-center" href="{{route('project.show', $project)}}">
                            <span class=" font-weight-bold">
                                {{$project->title}}
                            </span>
                            <span class="text-black-50">
                                {{$project->created_at->format('d/m/y')}}
                            </span>
                        </a>
                    </li>
                @endforeach
            @else
                <li class="list-group-item border-0 mb-3 shadow-sm">
                    No hay proyectos que mostar
                </li>
            @endisset
            
        </ul>
    </div>

@endsection