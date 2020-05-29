<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    //

    private $contact;


    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function index(Request $request)
    {


        $messages = [];
        $status = $request->query('status');

        if ($status && $status == 'sim') {
              $messages = $this->contact->orderBy('id', 'DESC')->whereStatus(true)->get();
        } else  if ($status && $status == 'nao') {
            $messages = $this->contact->orderBy('id', 'DESC')->whereStatus(false)->get();
        } else {
            $messages = $this->contact->orderBy('id', 'DESC')->get();
        }
        return view('admin.message', compact('messages'));
    }

    public function messageNaoLida()
    {
        $messages = $this->contact->whereStatus(false)->get();
        dd($messages);
    }
}
