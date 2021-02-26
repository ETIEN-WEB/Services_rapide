<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use DB;
use App\Tag;
use App\Ville;
use App\Categorie;
use App\Sous_categorie;
use App\Marque;
use App\Modele;
use Session;
use App\Quartier;
use App\User;
use App\Client;
use App\Annonce;



class ClientController extends Controller
{
    //
    public function home(){
        /*$sliders = Slider::where('status', 1)->get();
        $produits = Product::where('status', 1)->orderBy('id', 'desc')->paginate(8);
        $phone = Tag::find(2)->phone;
        */
        /*$users = DB::table('users')
            ->join('contacts', 'users.id', '=', 'contacts.user_id')
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->select('users.*', 'contacts.phone', 'orders.price') */

       /*$anonce = DB::table('villes')
            ->join('annonces', 'villes.id', '=', 'annonces.ville_id')
            ->join('quartiers', 'villes.id', '=', 'quarties.ville_id')
            ->select('villes.*', 'annonces.*', 'quartiers.*');*/
            


        $anonce= Annonce::where('status', 1)->orderBy('id', 'desc')->paginate(8);
        //$categories = Category::get();
        $categori= Categorie::all();
        $catgri = Categorie::all();
        $s_ville = Ville::all();
        
        //dd($anonce);
        return view('client.home')->with('anonce', $anonce)->with('categori', $categori)->with('s_ville', $s_ville)->with('catgri', $catgri);
    }

    

    public function search(Request $request){
        $this->validate($request, ['q' => 'nullable',
                                   'fq' => 'nullable',
        ]);
        $q = $request->input('q');
        $fq = $request->input('fq');
        $c = $request->input('c');

        $cavil = Ville::where('nom_ville', $q)
                        ->first();
        
        $cquar = Quartier::where('nom_quartier', $q)
                        ->first();
                        
        $catgorit = Categorie::where('nom_categorie', $c)
        ->first();
        $csoucat = Sous_categorie::where('nom_sous_categorie', $c)
        ->first();

            if(($cquar != "") AND ($catgorit != "") ){
                $categori= Categorie::get();
                $catgri = Categorie::all();
                $s_ville = Ville::all();
            
                $comparator = $fq != ''? 'LIKE' : '!=';
                $n_compar = $comparator == 'LIKE'? '%'.$fq.'%': '';
                $cparator = $q != ''? '=' : '!=';
                $catpator = $c != ''? '=' : '!=';
                //dd($q);
                $anonce= Annonce::where('Titre', $comparator, $n_compar)
                                ->whereHas('quartiert',function($query) use($cparator,$q){
                                    $query->Where('nom_quartier',$cparator,$q);
                                })
                                ->whereHas('categoriet',function($query) use($catpator,$c){
                                    $query->Where('nom_categorie',$catpator,$c);
                                })
                                ->get();
                                
                return view('client.shop')->with('anonce', $anonce)->with('categori', $categori)->with('s_ville', $s_ville)->with('catgorit', $catgorit)->with('catgri', $catgri);
                }

                if(($cquar != "") AND ($csoucat != "") ){
                    $categori= Categorie::get();
                    $catgri = Categorie::all();
                    $s_ville = Ville::all();
                
                    $comparator = $fq != ''? 'LIKE' : '!=';
                    $n_compar = $comparator == 'LIKE'? '%'.$fq.'%': '';
                    $cparator = $q != ''? '=' : '!=';
                    $catpator = $c != ''? '=' : '!=';
                    //dd($q);
                    $anonce= Annonce::where('Titre', $comparator, $n_compar)
                                    ->whereHas('quartiert',function($query) use($cparator,$q){
                                        $query->Where('nom_quartier',$cparator,$q);
                                    })
                                    ->whereHas('sous_categoriet',function($query) use($catpator,$c){
                                        $query->Where('nom_sous_categorie',$catpator,$c);
                                    })
                                    ->get();
                                    
                    return view('client.shop')->with('anonce', $anonce)->with('categori', $categori)->with('s_ville', $s_ville)->with('catgri', $catgri);
                    }

            if(($cavil != "") AND ($catgorit != "")){
               
                $categori= Categorie::get();
                $catgri = Categorie::all();
                $s_ville = Ville::all();
            
                $comparator = $fq != ''? 'LIKE' : '!=';
                $n_compar = $comparator == 'LIKE'? '%'.$fq.'%': '';
                $cparator = $q != ''? '=' : '!=';
                $catpator = $c != ''? '=' : '!=';
                
                $anonce= Annonce::where('Titre', $comparator, $n_compar)
                            ->whereHas('villt',function($query) use ($cparator,$q){
                                $query->where('nom_ville',$cparator,$q);
                            })
                            ->whereHas('categoriet',function($query) use($catpator,$c){
                                $query->Where('nom_categorie',$catpator,$c);
                            })
                            ->get();
                            //dd($anonce);
               return view('client.shop')->with('anonce', $anonce)->with('categori', $categori)->with('s_ville', $s_ville)->with('catgorit', $catgorit)->with('catgri', $catgri);
            }
            
            if(($cavil != "") AND ($csoucat != "")){
               
                $categori= Categorie::get();
                $catgri = Categorie::all();
                $s_ville = Ville::all();
            
                $comparator = $fq != ''? 'LIKE' : '!=';
                $n_compar = $comparator == 'LIKE'? '%'.$fq.'%': '';
                $cparator = $q != ''? '=' : '!=';
                $catpator = $c != ''? '=' : '!=';
                
                $anonce= Annonce::where('Titre', $comparator, $n_compar)
                                ->whereHas('villt',function($query) use ($cparator,$q){
                                    $query->where('nom_ville',$cparator,$q);
                                })
                                ->whereHas('sous_categoriet',function($query) use($catpator,$c){
                                    $query->Where('nom_sous_categorie',$catpator,$c);
                                })
                                ->get();
                                //dd($anonce);
             return view('client.shop')->with('anonce', $anonce)->with('categori', $categori)->with('s_ville', $s_ville)->with('catgri', $catgri);
                } 
        
        
    }

    /* }else{
        return redirect('/')->with('status', 'Veillez remplir au moins un champ');
    }*/
    //if(!empty($grade) AND !empty($pwd2) AND !empty($psodo) AND !empty($email)){
        //if(!empty($q) && !empty($fq)){
        
        /*$cavil = Ville::where('nom_ville', $q)
                        ->first();
                        
            if ($cavil != "") {
                return $cavil->nom_ville;
            } else {
                return 'non';
            }*/
    /* ->whereHas('quartiert',function($que) use($cparator,$q){
                                $que->Where('nom_quartier',$cparator,$q);
                            }) */



    public function shop(){
        
        $categori= Categorie::get();
        $catgri = Categorie::all();
        $anonce= Annonce::where('status', 1)->orderBy('id', 'desc')->paginate(8);
        $s_ville = Ville::all();
        return view('client.shop')->with('anonce', $anonce)->with('categori', $categori)->with('s_ville', $s_ville)->with('catgri', $catgri);
      
        //$datas = Todo::where(['affectedTo_id' => $userId])->orderBy('id', 'desc')->paginate(10);
    }

    public function select_par_cat($id){
        $categori= Categorie::get();
        $catgri = Categorie::all();
        $catgorit = Categorie::find($id);
     
        /*$count = Good::all()->count();
        $count = Good::all()->count();*/
        $anonce = Annonce::where('categorie_id', $id)->where('status', 1)->orderBy('id', 'desc')->paginate(8);
        $s_ville = Ville::all();
        return view('client.shop')->with('anonce', $anonce)->with('categori', $categori)->with('s_ville', $s_ville)->with('catgorit', $catgorit)->with('catgri', $catgri);
    }


    public function nouannonces(){
        $cate= Categorie::all();
        $vill= Ville::all();
       /* $data=Sous_categorie::select('productname', 'id')->where('prod_cat_id', $request->id)->take(100)->get();
        return response()->json($data); */
        
        if(Session::has('client')){
            
            $client = User::where('id', Session::get('client'))->first();
            //dd($cate);
            return view('client.new_anon_clit')->with('cate', $cate)->with('vill', $vill)->with('client', $client);
        }
        return view('client.new_annonces')->with('cate', $cate)->with('vill', $vill);
    }

    public function n_annonce(){
        
       /* $data=Sous_categorie::select('productname', 'id')->where('prod_cat_id', $request->id)->take(100)->get();
        return response()->json($data); */
        
        return view('client.anonnse');
    }

    
    
    
    public function findProductName(Request $request){
        $data = Sous_categorie::select('nom_sous_categorie', 'id')->where('categorie_id', $request->id)->take(100)->get();
        //dd($data);
        return response()->json($data);
        //$request->id
  
        }
        
        public function findquartier(Request $request){
            $quarte = Quartier::select('nom_quartier', 'id')->where('ville_id', $request->id)->take(100)->get();
            //dd($marqmode);
            return response()->json($quarte);
            //$request->id
        
            }

    public function findmarqmodel(Request $request){
        $marqmode = Marque::select('nom_marque', 'id')->where('sous_categorie_id', $request->id)->take(100)->get();
        //dd($marqmode);
        return response()->json($marqmode);
        //$request->id
    
        }

                        
    public function findmodele(Request $request){
        $modele = Modele::select('nom_modele', 'id')->where(function ($query) {
                                                    $query->select('nom_marque')
                                                    ->from('marques')
                                                    ->whereColumn('marques.id', 'marque_id');
                                                }, $request->id)->take(100)->get();
        return response()->json($modele);
        }
    /*public function findmodele(Request $request){
        $modele = Modele::select('nom_modele', 'id')->where('marque_id', $request->id)->take(100)->get();
        return response()->json($modele); 
        , 'confirmed'
        } */


        public function creer_annonce(Request $request){
            $this->validate($request, ['name' => ['required', 'string', 'max:255'],
                                        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                                        'password' => ['required', 'string', 'min:8'],
                                        'phone' => ['required', 'string', 'min:2'],

                                       'ville' => 'required',
                                       'categorie' => 'required',
                                       'sous_categorie' => 'required',
                                       'Titre' => 'required',
                                        'Prix' => 'required',
                                        'Description' => 'required'
                                       ]);
            
                                       
            $client = new User();
            $client->name = $request->input('name');
            $client->email = $request->input('email');
            $client->password = Hash::make($request->input('password'));
            $client->phone = $request->input('phone');
            $client->phone2 = $request->input('phone2');

            $client->save();

            $images = $request->file('fileUpload');
            if ($request->hasFile('fileUpload')) :
                  foreach ($images as $item):
                      $var = date_create();
                      $time = date_format($var, 'YmdHis');
                      $imageName = $time . '-' . $item->getClientOriginalName();
                      //$item->move(base_path() . '/upload/', $imageName);
                      $item->move(public_path('upload'), $imageName);
                      $arr[] = $imageName;
                  endforeach;
                  $image = $arr;
          else:
            $arr[] = 'noimage.jpg';
            $image = $arr;
                  
          endif;

                //dd($image);

            $annonce = new Annonce();

            $annonce->user_id = $client->id;
            $annonce->status = 0;
            $annonce->vip = 0;
            $annonce->vip1 = 0;
            $annonce->vip2 = 0;
            $annonce->vip3 = 0;
            $annonce->vip4 = 0;
            $annonce->favoris = 0; 
            $annonce->remonter = 0;
            $annonce->remonter1 = 0;
            $annonce->remonter2 = 0;
            $annonce->remonter3 = 0;
            $annonce->remonter4 = 0;
            $annonce->marque = $request->input('marque');
            $annonce->Modele = $request->input('Modele');

            $annonce->Transmission = $request->input('Transmission');
            $annonce->Carburant = $request->input('Carburant');
            $annonce->Annee = $request->input('Annee');
            $annonce->Klometrage = $request->input('Klometrage');
            $annonce->nb_pieces = $request->input('nb_pieces');
            $annonce->Superficie = $request->input('Superficie');
            $annonce->Prix = $request->input('Prix');

            $annonce->Titre = $request->input('Titre');
            $annonce->Description = $request->input('Description');

            $annonce->ville_id = $request->input('ville');
            //$annonce->quartier = $request->input('quartier');
            $annonce->quartier_id = !empty($request->input('quartier')) ? $request->input('quartier') : 3;
            //$description->nom_description = !empty($request->input('sous_cat')) ? $request->input('sous_cat') : 'ça va';
            $annonce->sous_categorie_id = $request->input('sous_categorie');
            $annonce->categorie_id = $request->input('categorie'); 
            //$annonce->quartier_id = $request->input('quartier'); 

            $annonce->fileUpload = $image;
            
            $annonce->save();

            if(Auth::attempt(['email'=>$client->email,'password'=>$request->input('password')])){
                return redirect('/connex');
            }else{
                dd($client->email, $client->password);    
            }
            
            
            /* return redirect('/new_annonces')->with('status', 'L\'annonce a été ajouté avec succès');
*/
            }
        


            

        public function creer_anon_clit(Request $request){
            $this->validate($request, ['name' => ['required', 'string', 'max:255'],
                                        'email' => ['required', 'string', 'email', 'max:255'],
                                        'password' => ['required', 'string', 'min:8'],
                                        'phone' => ['required', 'string', 'min:2'],
                                        'ville' => 'required',
                                        'categorie' => 'required',
                                        'sous_categorie' => 'required',
                                        'Titre' => 'required',
                                        'Prix' => 'required',
                                        'Description' => 'required'
                                        
                                        ]);

            $client = User::find(Session::get('client'));                            
            $client->name = $request->input('name');
            $client->email = $request->input('email');
            $client->password = Hash::make($request->input('password'));
            $client->phone = $request->input('phone');
            $client->phone2 = $request->input('phone2');

            /*$client->email = $request->input('Email');
            $client->password = bcrypt($request->input('password'));
            $client->client_nom = $request->input('Nom');
            $client->telephone = $request->input('phone');
            $client->telephone2 = $request->input('phone2');/*/
                
            $client->update();


            $images = $request->file('fileUpload');
            if ($request->hasFile('fileUpload')) :
                    foreach ($images as $item):
                        $var = date_create();
                        $time = date_format($var, 'YmdHis');
                        $imageName = $time . '-' . $item->getClientOriginalName();
                        //$item->move(base_path() . '/upload/', $imageName);
                        $item->move(public_path('upload'), $imageName);
                        $arr[] = $imageName;
                    endforeach;
                    $image = $arr;
                    //$image = implode(",", $arr);
            else:
                $arr[] = 'noimage.jpg';
                $image = $arr;
            endif;

                //dd($image);

            $annonce = new Annonce();

            $annonce->user_id = $client->id;
            $annonce->status = 0;
            $annonce->vip = 0;
            $annonce->vip1 = 0;
            $annonce->vip2 = 0;
            $annonce->vip3 = 0;
            $annonce->vip4 = 0;
            $annonce->favoris = 0; 
            $annonce->remonter = 0;
            $annonce->remonter1 = 0;
            $annonce->remonter2 = 0;
            $annonce->remonter3 = 0;
            $annonce->remonter4 = 0; 
            //$annonce->ville = $request->input('commune');
            //$annonce->quartier = $request->input('quartier');
            //$annonce->categorie = $request->input('categorie');
            // $annonce->sous_categorie = $request->input('sous_categorie');
            $annonce->marque = $request->input('marque');
            $annonce->Modele = $request->input('Modele');
            $annonce->Transmission = $request->input('Transmission');
            $annonce->Carburant = $request->input('Carburant');
            $annonce->Annee = $request->input('Annee');
            $annonce->Klometrage = $request->input('Klometrage');
            $annonce->nb_pieces = $request->input('nb_pieces');
            $annonce->Superficie = $request->input('Superficie');
            $annonce->Prix = $request->input('Prix');

            $annonce->Titre = $request->input('Titre');
            $annonce->Description = $request->input('Description');

            $annonce->ville_id = $request->input('ville');
            //$annonce->quartier = $request->input('quartier');
            $annonce->quartier_id = !empty($request->input('quartier')) ? $request->input('quartier') : 3;
            //$description->nom_description = !empty($request->input('sous_cat')) ? $request->input('sous_cat') : 'ça va';
            $annonce->sous_categorie_id = $request->input('sous_categorie');
            $annonce->categorie_id = $request->input('categorie'); 
            //$annonce->quartier_id = $request->input('quartier'); 

            $annonce->fileUpload = $image;
            
            $annonce->save();
            
            return redirect('/connex');

            /*Auth::attempt(['email'=>$use]) 

            return redirect('/new_annonces')->with('status', 'L\'annonce a été ajouté avec succès');
            */
           }

}
