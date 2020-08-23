@extends('layout')

@section('title', 'Crear Proyecto')
    
@section('content')

    <h1>@lang('Crear nuevo proyecto')</h1>

    @include('partials.validation-errors')

    <form action=" {{route('project.store')}} " method="post">

        @include('project._form', ['btnText' => 'Guardar'])

    </form>

@endsection