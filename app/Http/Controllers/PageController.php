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



class PageController extends Controller
{
    //
    public function detail_offre($id){ 
        $categori= Categorie::get();
        $anonce= Annonce::find($id);
        $annonces = Annonce::where('sous_categorie_id', $anonce->sous_categorie_id)->where('status', 1)->orderBy('id', 'desc')->paginate(8);
        
        $anonce->vip4 += 1;

        $anonce->update();
    
        return view('client.detail_offre')->with('categori', $categori)->with('anonce', $anonce)->with('annonces', $annonces);
    }

/*
    public function shop(){
        $categori= Categorie::get();
        $anonce= Annonce::orderBy('id', 'desc')->paginate(8);
        
        return view('client.shop')->with('anonce', $anonce)->with('categori', $categori);
      
        //$datas = Todo::where(['affectedTo_id' => $userId])->orderBy('id', 'desc')->paginate(10);
    }
    */

    public function client_login(){
        return view('client.login');
    }


    /*public function acceder_compte(Request $request){
        $this->validate($request, ['email' => 'email|required',
                                   'password' => 'required']);
        
       
        $client = Client::where('email', $request->input('email'))->first();

        if ($client) {
            
            if (Hash::check($request->input('password'), $client->password)) {
                
                Session::put('client', $client->id);
                
                return redirect('/profil/'.Session::get('client'));
            } else {
               
                return back()->with('status', 'Mauvais mot de passe ou email');
            }
            
        } else {
              
            return back()->with('status', 'Vous n\'avez pas de compte');
        }
        
    } */

    public function logout(){
        Session::forget('client');
        return back();
    }

    public function connex(){
        if (Auth::check()) {
            // The user is logged in...
            Session::put('client', Auth::id());
            return redirect('/profil/'.Session::get('client'));
        }
        
    }


    public function profil($id){
        if(!Session::has('client')){
            return view('Auth.login');
        }
        //$categori= Categorie::get();
        //$anonce= Annonce::find($id);
        $client= User::find($id);
        
        return view('client.profil')->with('client', $client);
      
        //$datas = Todo::where(['affectedTo_id' => $userId])->orderBy('id', 'desc')->paginate(10);
    }

    public function supprimerproduit($id){
        $anonce= Annonce::find($id);
        $client = $anonce->clientt;
        
        $nb = sizeof($anonce->fileUpload);
        //

        for ($i = 0; $i < $nb; $i++){

           /*if (isset($_POST['username'])) {
                $username = $_POST['username'];
            }*/

            if (!isset($anonce->fileUpload['noimage.jpg'])) {
            //dd($nb);
              Storage::delete('public/upload/'.$anonce->fileUpload[$i]);
        }
            }

        $anonce->delete();
       
        // '/profil/'.Session::get('client')
            return redirect('/profil/'.$client->id)->with('status', 'L\'annonce'.$anonce->Titre.' a été supprimé avec succès!');
         
    }

    public function supprimerannonce($id){
        $anonce= Annonce::find($id);
        
        
        $nb = sizeof($anonce->fileUpload);
        //

        for ($i = 0; $i < $nb; $i++){

           /*if (isset($_POST['username'])) {
                $username = $_POST['username'];
            }*/

            if (!isset($anonce->fileUpload['noimage.jpg'])) {
            //dd($nb);
              Storage::delete('public/upload/'.$anonce->fileUpload[$i]);
        }
            }

        $anonce->delete();
       
            return redirect('produits')->with('status', 'Le produit'.$anonce->Titre.' a été supprimé avec succès!');
          
       }

    
    public function vip($id){
        $anonce= Annonce::find($id);
        $client = $anonce->clientt;

        return view('client.paiement')->with('anonce', $anonce)->with('client', $client);
    }

    public function creer_vip(Request $request){
        if (empty($request->input('oui'))) {
            $anonce = Annonce::find($request->input('id'));
            $client = $anonce->clientt;
            return redirect('/vip/'.$anonce->id)->with('status', 'Veillez faire votre choix ');
        }

        $reponse = $request->input('oui');
        //dd($reponse);
        if ($reponse == "material") {
            if(Session::has('client')){
            $anonce = Annonce::find($request->input('id'));
            $client = $anonce->clientt;

            $anonce->vip = 1;
            $anonce->vip2 = 0;
            $anonce->vip1 = 0;
            $anonce->vipdate = now();
            $anonce->update();
            return redirect('/profil/'.$client->id)->with('status', 'L\'annonce a été optmisée avec succès!');
            }
        }

        if ($reponse == "3jours") {
            if(Session::has('client')){
            $anonce = Annonce::find($request->input('id'));
            $client = $anonce->clientt;

            $anonce->vip1 = 1;
            $anonce->vip = 0;
            $anonce->vipdate = now();
            $anonce->update();
            return redirect('/profil/'.$client->id)->with('status', 'L\'annonce a été optmisée avec succès!');
            }
        }

        if ($reponse == "1jour") {
            if(Session::has('client')){
            $anonce = Annonce::find($request->input('id'));
            $client = $anonce->clientt;

            $anonce->vip2 = 1;
            $anonce->vip = 0;
            $anonce->vip1 = 0;
            $anonce->vipdate = now();
            $anonce->update();
            return redirect('/profil/'.$client->id)->with('status', 'L\'annonce a été optmisée avec succès!');
            }
        }

    }


    public function produits(){

        $anonce = Annonce::get();
        return view('admin.produits')->with('anonce', $anonce);
    }

    public function activer_produit($id){
        $anonce = Annonce::find($id);

        $anonce->status = 1;

        $anonce->update();

        return redirect('/produits')->with('status', 'Le produit ' .$anonce->Titre. ' a été activé avec succès!'); 

    }

    public function desactiver_produit($id){
        $anonce = Annonce::find($id);

        $anonce->status = 0;

        $anonce->update();

        return redirect('/produits')->with('status', 'Le produit' .$anonce->Titre. ' a été desactivé avec succès!'); 

    }

    

    public function test(){
      $arr= [
        'Avenger',
'Caliber',
'Caravan',
'Challenger',
'Charger',
'Dakota',
'Daytona',
'Durango',
'Grand Caravan',
'Journey',
'Magnum',
'Monaco',
'Nitro',
'Ram',
'Shadow',
'Spirit',
'Stealth'

    ];

   foreach($arr as $ar){
    Modele::create([
        'nom_modele'=>$ar,
        'marque_id'=>96,
        'espace_modele'=>'NULL'
    ]);
   }
   echo 'success';
        
        
        
    }




}
