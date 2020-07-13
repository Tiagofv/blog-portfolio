<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth')->except('store');
    }
    public function index(){
        return view('contact.index')->with(['contacts' => Contact::all()]);
    }
    public function store(Request $request){

        Contact::create(  $request->validate([
            'email' => 'required|email|max:100',
            'subject' => 'required|max:100',
            'message' => 'required|max:1000'
        ])
        );
        return redirect()->back()->withSuccess('Sua mensagem foi enviada com sucesso!');
    }


    public function destroy(Contact $contact){
        $contact->delete();
        return redirect()->back()->withSuccess('Contato deletado com sucesso.');
    }
}
