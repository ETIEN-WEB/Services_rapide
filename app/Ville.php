<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    //
    public function annonces()
    {
        return $this->hasMany('App\Annonce');
    }

    public function quartrs()
    {
        return $this->hasMany('App\Quartier');
    }

    protected $fillable = [
        'nom_ville',
        'espace_ville',
    ];

    



}
