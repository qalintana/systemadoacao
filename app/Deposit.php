<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    //

    protected $fillable = ['value', 'donat_id'];


    public function donatt(){
        return $this->belongsTo(Donatt::class, 'donat_id');
    }
}
