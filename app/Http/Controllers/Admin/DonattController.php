<?php

namespace App\Http\Controllers\Admin;

use App\Donatt;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DonattController extends Controller
{
    //

    private $donatt;

    public function __construct(Donatt $donatt)
    {
        $this->donatt = $donatt;
    }
    public function index(){
        $donatts = $this->donatt->all();
        return view('admin.donatt', compact('donatts'));
        }
}
