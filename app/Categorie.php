<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    //

    public function sous_categ()
    {
        return $this->hasMany('App\Sous_categorie');
    }

    public function annonces()
    {
        return $this->hasMany('App\Annonce');
    }

    protected $fillable = [
        'nom_categorie', 
        'image_categorie', 
        'espace_categorie', 
    ];


}
