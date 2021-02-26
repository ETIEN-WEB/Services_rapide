<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Annonce extends Model
{
    // 'fileUpload' => 'array' : cad ce champ est de ttype tableau dans la bd
    //protected $dateFormat = 'U';
    protected $casts = [
        'fileUpload' => 'array',
         'Description' => 'text',
     ];

     protected $fillable = [
        'status',
        'vip',
        'vip1',
        'vip2',
        'vip3',
        'vip4',
        'favoris',
        'categorie',
        //'sous_categorie',
        'Prix',
        'Titre',
        'Description',
        'categorie_id',
        'user_id',
        'ville_id',
        'Annee',
        'marque',
        'Modele',
        'Transmission',
        'Carburant',
        'Klometrage',
        'nb_pieces',
        'Superficie',
        'quartier_id',
        'fileUpload',
        'sous_categorie_id',
        'remonter',
        'remonter1',
        'remonter2',
        'remonter3',
        'remonter4',
        'vipdate',
        
    ];

/*public function villt() : permet de d'afficher la ville de l'annonce  */
    public function villt(){
        return $this->belongsTo('App\Ville','ville_id','id');
        }

        public function clientt(){
            return $this->belongsTo('App\User','user_id','id');
            }

    public function quartiert(){
        return $this->belongsTo('App\Quartier','quartier_id','id');
        }

    public function categoriet(){
        return $this->belongsTo('App\Categorie','categorie_id','id');
        }

        public function sous_categoriet(){
            return $this->belongsTo('App\Sous_categorie','sous_categorie_id','id');
            }


    protected $dates = [
        'vipdate',
    ];
    

     
}


