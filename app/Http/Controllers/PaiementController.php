<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use DB;
use App\Tag;
use App\Ville;
use App\Categorie;
use App\Sous_categorie;
use App\Marque;
use App\Modele;
use App\Quartier;
use App\Client;
use App\Annonce;
use App\User;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;


class PaiementController extends Controller
{
    //
    public function remonte($id){
        $anonce= Annonce::find($id);
        $client = $anonce->clientt;

        return view('client.paiement2')->with('anonce', $anonce)->with('client', $client);
    }


    public function creer_remonte(Request $request){
        if (empty($request->input('oui'))) {
            $anonce = Annonce::find($request->input('id'));
            $client = $anonce->clientt;
            return redirect('/remonte/'.$anonce->id)->with('status', 'Veillez faire votre choix ');
        }

        $reponse = $request->input('oui');
        //dd($reponse);
        if ($reponse == "material") {
            if(Session::has('client')){
            $anonce = Annonce::find($request->input('id'));
            $client = $anonce->clientt;

            $anonce->remonter = 1;
            $anonce->remonter1 = 0;
            $anonce->remonter2 = 0;
            $anonce->remonter3 = 0;
            $anonce->vipdate = now();
            $anonce->update();
            return redirect('/profil/'.$client->id)->with('status', 'L\'annonce a été optmisée avec succès!');
            }
        }

        if ($reponse == "3jour") {
            if(Session::has('client')){
            $anonce = Annonce::find($request->input('id'));
            $client = $anonce->clientt;

            $anonce->remonter = 0;
            $anonce->remonter1 = 1;
            $anonce->remonter2 = 0;
            $anonce->remonter3 = 0;
            $anonce->vipdate = now();
            $anonce->update();
            return redirect('/profil/'.$client->id)->with('status', 'L\'annonce a été optmisée avec succès!');
            }
        }

        if ($reponse == "1jour") {
            if(Session::has('client')){
            $anonce = Annonce::find($request->input('id'));
            $client = $anonce->clientt;

            $anonce->remonter = 0;
            $anonce->remonter1 = 0;
            $anonce->remonter2 = 1;
            $anonce->remonter3 = 0;
            $anonce->vipdate = now();
            $anonce->update();
            return redirect('/profil/'.$client->id)->with('status', 'L\'annonce a été optmisée avec succès!');
            }
        }

        if ($reponse == "imediatement") {
            if(Session::has('client')){
            $anonce = Annonce::find($request->input('id'));
            $client = $anonce->clientt;

            $anonce->remonter = 0;
            $anonce->remonter1 = 0;
            $anonce->remonter2 = 0;
            $anonce->remonter3 = 1;
            $anonce->vipdate = now();
            $anonce->update();
            return redirect('/profil/'.$client->id)->with('status', 'L\'annonce a été optmisée avec succès!');
            }
        }

    }


    public function select_par_sous_cat($id){
        $categori= Categorie::get();
        
        $anonce = Annonce::where('sous_categorie_id', $id)->where('status', 1)->orderBy('id', 'desc')->paginate(8);
        $s_ville = Ville::all();
        return view('client.shop2')->with('anonce', $anonce)->with('categori', $categori)->with('s_ville', $s_ville);
    }

    

    public function vndrapdmnt(){
        /*$anonce= Annonce::find($id);
        $client = $anonce->clientt;*/

        return view('cliente1.vndrapdmnt');
    }
    

}
