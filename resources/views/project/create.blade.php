@extends('layout')

@section('title', 'Crear Proyecto')
    
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-g-6 mx-auto">
                
                @include('partials.validation-errors')

                <form class="bg-white shadow rounded py-3 px-4" action=" {{route('project.store')}} " method="post">
                    <h1 class="display-4">@lang('Nuevo proyecto')</h1>
                    <hr>

                    @include('project._form', ['btnText' => 'Guardar'])

                </form>
            </div>
        </div>
    </div>

@endsection