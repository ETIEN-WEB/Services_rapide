<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quartier extends Model
{
    //

    protected $fillable = [
        'nom_quartier',
        'espace_quartier',
        'ville_id',
    ]; 

    public function capital(){
        return $this->belongsTo('App\Ville','ville_id','id');
        } 

        
    public function annonces()
    {
        return $this->hasMany('App\Annonce');
    }

    

    
}
