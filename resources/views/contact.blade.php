@extends('layout')

@section('title', 'Contact')

@section('content')
    <h1>Contact</h1>

    <form action=" {{route('contact')}} " method="post">
        @csrf
        <input type="text" name="name" placeholder="nombre" value=" {{old('name')}} "><br>
        {!! $errors->first('name', '<small>:message</small><br>') !!}

        <input type="email" name="email" placeholder="Email..." value=" {{old('email')}} "><br>
        {!! $errors->first('email', '<small>:message</small><br>') !!}

        <input type="text" name="subject" placeholder="asunto" value=" {{old('subject')}} "><br>
        {!! $errors->first('subject', '<small>:message</small><br>') !!}

        <textarea type="" name="message"> {{old('message')}} </textarea><br>
        {!! $errors->first('message', '<small>:message</small><br>') !!}

        <button type="submit">Enviar</button>
    </form>

@endsection