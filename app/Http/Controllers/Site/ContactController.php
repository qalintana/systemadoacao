<?php

namespace App\Http\Controllers\Site;

use App\Contact;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use Exception;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    private $contact;

    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function  store(ContactRequest $request)
    {
        try{
            $this->contact->create($request->all());
            flash('Mensagem enviada com sucesso! responderemos com a maior brevidade possível')->success();
            return redirect()->route('site.index');
        } catch(Exception $e){
            flash('Envio de mensagem falhou! Por favor, tente novamente...')->error();
            return back();
        }

        dd($request->all());
    }
}
