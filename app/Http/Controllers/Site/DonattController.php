<?php

namespace App\Http\Controllers\Site;

use App\Donatt;
use App\Http\Controllers\Controller;
use App\Http\Requests\DonattRequest;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;

class DonattController extends Controller
{
    //

    private $donatt;

    public function __construct(Donatt $donatt)
    {
        $this->donatt = $donatt;
    }

    public function create()
    {
        return view('site.donate.create');
    }

    public function store(DonattRequest $request)
    {

        try {

            // dd(Carbon::now()->subYears(13)->format('d/m/Y'));
            $data = $request->all();
            $data['password'] = bcrypt($data['password']);
            $this->donatt->create($data);
            return 'criado com sucesso';
        } catch (Exception $e) {
            //throw $th;
            flash($e->getMessage())->warning();
            return back();
        }
    }
}
