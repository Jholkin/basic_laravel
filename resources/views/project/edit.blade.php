@extends('layout')

@section('title', 'Editar Proyecto')
    
@section('content')

    <h1>@lang('Editar nuevo proyecto')</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

    <form action=" {{route('project.update', $project)}} " method="post">
        @csrf
        @method('PATCH')

        <label for="title">
            Titulo del proyecto <br>
            <input type="text" name="title" id="title" value=" {{ old('title', $project->title) }} ">
        </label>

        <br>
        
        <label for="url">
            URL del proyecto <br>
            <input type="text" name="url" id="url" value=" {{ old('url', $project->url) }} ">
        </label>

        <br>

        <label for="description">
            Descripcion del proyecto <br>
            <textarea name="description" id="description">{{ old('description', $project->description) }}</textarea>
        </label>

        <br>

        <button>Guardar</button>
    </form>

@endsection