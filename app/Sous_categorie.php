<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sous_categorie extends Model
{
    //
    protected $fillable = [
        'nom_sous_categorie',
        'espace_sous_categorie', 
        'categorie_id',
    ];

    public function categos(){
        return $this->belongsTo('App\Categorie','categorie_id','id');
        }

    public function marques()
    {
        return $this->hasMany('App\Marque');
    }

    public function annonces()
    {
        return $this->hasMany('App\Annonce');
    }

    
        

}
