<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marque extends Model
{
    //
    public function modeles()
    {
        return $this->hasMany('App\Modele');
    }

    protected $fillable = [

        'nom_marque',
        'espace_marque', 
        'sous_categorie_id',

    ]; 

    
}
