<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    public function annoces()
    {
        return $this->hasMany('App\Annonce');
    }


    protected $fillable = [
        'client_nom',
        'email',
        'password',
        'telephone',
        'telephone2',
    ];



}
