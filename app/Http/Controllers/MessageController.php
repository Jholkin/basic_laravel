<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageReceived;

class MessageController extends Controller
{
    public function store() //Request $request
    {
        //return $request->get('name');

        // Otra forma de manejar los requests
        //return request('email');

        //validando datos del formulario
        request()->validate([
            'name'=>'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required|min:5'
        ]);

        // Enviar el email
        Mail::to('palaciosmarianojhil@gmail.com')->send(new MessageReceived);

        return back()->with('status', 'Recibimos tu mensaje, te responderemos en menos de 24 horas.');
    }
}
