<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Specialty;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactForm;

class EmailController extends Controller
{
    function sendContact(Request $request){
        $validated = $request->validate([
            'specialty'       => 'required|exists:specialties,id',
            'pacient'       => 'required|min:3|max:50',
            'rut'           => 'required|cl_rut',
            'email'         => 'required|email|max:50',
            'message'       => 'required|min:3|max:1000',
        ]);
        $specialty = Specialty::find($request->specialty);
        $contact = new Contact;
        $contact->specialty_id = $request->specialty;
        $contact->specialty = $specialty->name;
        $contact->pacient   = $request->pacient;
        $contact->rut       = $request->rut;
        $contact->phone     = $request->phone;
        $contact->email     = $request->email;
        $contact->message   = $request->message;
        if($contact->save()){
            Mail::to(['secretaria@cistem.cl'])->send(new ContactForm($contact));
            return redirect()->back()->withErrors([
                'request_status'=> "success",
                'request_message' => 'Mensaje enviado correctamente'
            ])->withInput();
        }
        
        return redirect()->back()->withErrors([
            'request_status'=> "danger",
            'request_message' => 'Error al enviar mensaje'
        ])->withInput();
    }
}
