<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    public function index()
    {

        return view('site.index');
    }

    public function contact(){
        return view('site.contact');
    }

    public function about(){
        return view('site.about');
    }
}
