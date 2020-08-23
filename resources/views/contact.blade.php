@extends('layout')

@section('title', 'Contact')

@section('content')

    <div class="container">

        <div class=" mx-auto">
            

            @include('partials.session-status')

            <form class="bg-white shadow rounded py-3 px-4" action=" {{route('message.store')}} " method="post">
                @csrf
                <h1 class="display-5 mx-auto">@lang('Contact')</h1>
                <hr>

                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input class="form-control bg-light shadow-sm 
                    @error('name')
                        is-invalid
                    @else 
                        border-0
                    @enderror" 
                    type="text" name="name" id="name" placeholder="Escriba aquí tu nombre..." value=" {{old('name')}} ">
                    
                    @error('name')
                        <span class="invalid-feedback">
                            <strong> {{$message}} </strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control bg-light shadow-sm
                    @error('email')
                        is-invalid
                    @else 
                        border-0
                    @enderror"
                    type="email" name="email" id="email" placeholder="Escriba aquí tu email..." value=" {{old('email')}} "><br>
                    
                    @error('email')
                        <span class="invalid-feedback">
                            <strong> {{$message}} </strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="subject">Asunto</label>
                    <input class="form-control bg-light shadow-sm
                    @error('subject')
                        is-invalid
                    @else 
                        border-0
                    @enderror"
                    type="text" name="subject" id="subject" placeholder="Escriba aquí el asunto de tu mensaje..." value=" {{old('subject')}} ">
                    
                    @error('subject')
                        <span class="invalid-feedback">
                            <strong> {{$message}} </strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="message">Mensaje</label>
                    <textarea class="form-control bg-light shadow-sm
                    @error('message')
                        is-invalid
                    @else 
                        border-0
                    @enderror"
                    type="" name="message" id="message" placeholder="Escriba aquí el contenido de tu mensaje..."> {{old('message')}} </textarea>
                    
                    @error('message')
                        <span class="invalid-feedback">
                            <strong> {{$message}} </strong>
                        </span>
                    @enderror
                </div>

                <button class="btn btn-primary btn-lg btn-block" type="submit">@lang('Send')</button>
            </form>
        </div>

    </div>

@endsection