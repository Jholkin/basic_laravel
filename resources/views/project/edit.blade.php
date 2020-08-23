@extends('layout')

@section('title', 'Editar Proyecto')
    
@section('content')

    <h1>@lang('Editar nuevo proyecto')</h1>

    @include('partials.validation-errors')

    <form action=" {{route('project.update', $project)}} " method="post">
        
        @method('PATCH')

        @include('project._form', ['btnText' => 'Actualizar'])

    </form>

@endsection