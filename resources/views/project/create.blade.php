@extends('layout')

@section('title', 'Crear Proyecto')
    
@section('content')

    <h1>@lang('Crear nuevo proyecto')</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

    <form action=" {{route('project.store')}} " method="post">
        @csrf

        <label for="title">
            Titulo del proyecto <br>
            <input type="text" name="title" id="title" value=" {{old('title')}} ">
        </label>

        <br>
        
        <label for="url">
            URL del proyecto <br>
            <input type="text" name="url" id="url" value=" {{old('url')}} ">
        </label>

        <br>

        <label for="description">
            Descripcion del proyecto <br>
            <textarea name="description" id="description">{{old('description')}}</textarea>
        </label>

        <br>

        <button>Guardar</button>
    </form>

@endsection