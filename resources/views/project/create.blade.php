@extends('layout')

@section('title', 'Crear Proyecto')
    
@section('content')

    <h1>@lang('Crear nuevo proyecto')</h1>

    <form action=" {{route('project.store')}} " method="post">
        @csrf
        
        <label for="title">
            Titulo del proyecto <br>
            <input type="text" name="title" id="title">
        </label>

        <br>
        
        <label for="url">
            URL del proyecto <br>
            <input type="text" name="url" id="url">
        </label>

        <br>

        <label for="description">
            Descripcion del proyecto <br>
            <textarea name="description" id="description"></textarea>
        </label>

        <br>

        <button>Guardar</button>
    </form>

@endsection