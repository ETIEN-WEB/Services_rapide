<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modele extends Model
{
    //
    protected $fillable = [

        'nom_modele', 
       'espace_modele', 
        'marque_id',

    ]; 
}
