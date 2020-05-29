<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class DonattRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        //dd(Carbon::now()->subYears(15)->format('d/m/Y'));
        $data = Carbon::now()->subYears(10)->format('d/m/Y');
        //dd($data);
        // dd($this->input('data'));
        return [
            //
            'password' => 'required|min:6|confirmed',
            'email' => 'required|email|unique:donatts',
            'bi' => 'required|min:14|max:14|unique:donatts,bi',
            'data' => 'date_format:d/m/Y|required|before:'.$data
        ];
    }
}
