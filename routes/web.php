<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*Route::get('/', function () {
    return view('welcome');
});
*/



Route::get('/', 'ClientController@home');
Route::post('annonces_search', 'ClientController@search')->name('an_search');

Route::get('/new_annonces', 'ClientController@nouannonces');
Route::get('/n_annonce', 'ClientController@n_annonce');
Route::post('/inscription_annonce', 'ClientController@inscription_annonce');
//traitement ajax

// formulaire en cascade
Route::get('findquartier', 'ClientController@findquartier');
Route::get('findProductName', 'ClientController@findProductName');
Route::get('findmarqmodel', 'ClientController@findmarqmodel');
Route::get('findmodele', 'ClientController@findmodele');

Route::post('creer_annonce', 'ClientController@creer_annonce');
Route::post('creer_anon_clit', 'ClientController@creer_anon_clit');

Route::get('/shop', 'ClientController@shop');
Route::get('/select_par_cat/{id}', 'ClientController@select_par_cat')->name('par_cat');
Route::get('/select_par_sous_cat/{id}', 'PaiementController@select_par_sous_cat');

Route::get('/detail_offre/{id}', 'PageController@detail_offre');
Route::get('/client_login', 'PageController@client_login');
Route::post('/acceder_compte', 'PageController@acceder_compte');
Route::get('/logout', 'PageController@logout');

Route::get('/connex', 'PageController@connex');
Route::get('/profil/{id}', 'PageController@profil');

Route::get('/supprimerproduit/{id}', 'PageController@supprimerproduit');
Route::get('/supprimerannonce/{id}', 'PageController@supprimerannonce');
Route::get('/desactiver_produit/{id}', 'PageController@desactiver_produit');
Route::get('/activer_produit/{id}', 'PageController@activer_produit');
Route::get('/view_produit/{id}', 'PageController@detail_offre');
Route::get('/vip/{id}', 'PageController@vip');
Route::post('/creer_vip', 'PageController@creer_vip');

Route::get('/remonte/{id}', 'PaiementController@remonte');
Route::post('/creer_remonte', 'PaiementController@creer_remonte');


//footer

Route::get('/vndrapdmnt', 'PaiementController@vndrapdmnt');




Route::get('/produits', 'PageController@produits');
Route::get('/test', 'PageController@test');







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
