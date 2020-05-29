<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donatt extends Model
{
    //

    protected $fillable = ['name', 'bi', 'email', 'sexo', 'password', 'data'];

    public function deposits(){
        return $this->hasMany(Deposit::class, 'donat_id');
    }
}
