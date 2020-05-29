<?php

namespace App\Http\Controllers\Admin;

use App\Donatt;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;

class DepositController extends Controller
{

    private $donnat;
    private $deposit;


    public function __construct(Donatt $donatt)
    {
        $this->donnat = $donatt;
    }

    //
    public function create(Request $request, $user)
    {

        try {
            $donat = $this->donnat->find($user);
            // dd($donat->deposits()->sum('value'));
            if (!$donat) {
                flash('):!');
                return back();
            }
            return view('admin.deposit', compact('donat'));
        } catch (Exception $e) {
            flash($e->getMessage());
            return back();
        }
    }

    public function store(Request $request)
    {
        // dd($request->user);
        $donat = $this->donnat->find($request->user);
        $donat->deposits()->create($request->all());
        $donat->save();
        flash('Depósito feito com Sucesso')->success();
        return redirect()->route('admin.deposit.create', ['user' => $donat->id]);
    }
}
