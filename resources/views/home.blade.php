@extends('layout')

@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 mb-4">
                <h1 class="display-4 text-primary">Desarrollo Web</h1>

                <p class="lead text-secondary">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Adipisci repudiandae natus laboriosam dolorum aliquid est facere, blanditiis at incidunt 
                    accusamus amet molestiae culpa, aliquam voluptas, cumque alias pariatur quisquam! Magni?
                </p>

                <a class="btn btn-lg btn-block btn-primary" href=" {{route('contact')}} ">Contactame</a>
                <a class="btn btn-lg btn-block btn-outline-primary" href=" {{route('project.index')}} ">Portafolio</a>
            </div>
            <div class="col-12 col-lg-6">
                <img class="img-fluid" src="/img/home.svg" alt="Desarrollo Web">
            </div>
        </div>
    </div>
@endsection