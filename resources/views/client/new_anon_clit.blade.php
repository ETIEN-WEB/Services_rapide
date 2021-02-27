

@extends('layouts.n_annonce')

{{-- start content n_annonce appclient --}}
@section('contenu')

<link rel="stylesheet" href="{{asset('p_hom/stajouter.css')}}">
        <!-- Bottom Bar Start -->

        <!-- Bottom Bar End --> 
        
        <!-- Breadcrumb Start -->
        <!-- <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                    <li class="breadcrumb-item active">Checkout</li>
                </ul>
            </div>
        </div>
         Breadcrumb End -->
        
        <!-- Checkout Start -->
        <div class="checkout">
            <div class="container-fluid"> 
                <div class="row">
                                        <!-- Cart Total  Cart Total  Cart Total  Cart Total  Cart Total Cart Total  -->
                                        <div class="col-lg-4">
                                            <div class="checkout-inner">
                                                <div class="checkout-summary">
                                                    <div class="specification">
                                                        <h5>Conditions pour publier votre annonce</h5>
                                                        <ul>
                                                            <li>N'écrivez pas le prix dans le titre</li>
                                                            <li>N'indiquez pas vos coordonnées (téléphone, e-mail...) dans la description</li>
                                                            <li>Ne publiez pas la même annonce plusieurs fois</li>
                                                            <li>Ne vendez pas d'objets ou de services illégaux</li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                    
                                                {{-- <div class="checkout-payment">
                                                    <div class="payment-methods">
                                                        <h1>Payment Methods</h1>
                                                        <div class="payment-method">
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" class="custom-control-input" id="payment-1" name="payment">
                                                                <label class="custom-control-label" for="payment-1">Paypal</label>
                                                            </div>
                                                            <div class="payment-content" id="payment-1-show">
                                                                <p>
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt orci ac eros volutpat maximus lacinia quis diam.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="payment-method">
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" class="custom-control-input" id="payment-2" name="payment">
                                                                <label class="custom-control-label" for="payment-2">Payoneer</label>
                                                            </div>
                                                            <div class="payment-content" id="payment-2-show">
                                                                <p>
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt orci ac eros volutpat maximus lacinia quis diam.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="payment-method">
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" class="custom-control-input" id="payment-3" name="payment">
                                                                <label class="custom-control-label" for="payment-3">Check Payment</label>
                                                            </div>
                                                            <div class="payment-content" id="payment-3-show">
                                                                <p>
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt orci ac eros volutpat maximus lacinia quis diam.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="payment-method">
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" class="custom-control-input" id="payment-4" name="payment">
                                                                <label class="custom-control-label" for="payment-4">Direct Bank Transfer</label>
                                                            </div>
                                                            <div class="payment-content" id="payment-4-show">
                                                                <p>
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt orci ac eros volutpat maximus lacinia quis diam.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="payment-method">
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" class="custom-control-input" id="payment-5" name="payment">
                                                                <label class="custom-control-label" for="payment-5">Cash on Delivery</label>
                                                            </div>
                                                            <div class="payment-content" id="payment-5-show">
                                                                <p>
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt orci ac eros volutpat maximus lacinia quis diam.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="checkout-btn">
                                                        <button>Place Order</button>
                                                    </div>
                                                        <!-- Cart Total  Cart Total  Cart Total  Cart Total  Cart Total Cart Total  -->
                                                </div> --}}
                                            </div>
                                        </div> <!-- /col-lg-4 --> 
                    <!-- leur fermerture est en bas de la page 
                     -->
                                    <div class="col-lg-8">
                                        <div class="checkout-inner">
                                            @if (Session::has('status'))
                                    <div class="alert alert-success">
                                        {{Session::get('status')}}
                                    </div>
                                @endif
                                @if (count($errors)> 0)
                                    <div class="alert      alert-danger">
                                        <ul> 
                                        @foreach ($errors->all() as $error)
                                            <li>{{$error}} </li>  
                                        @endforeach
                                        </ul> 
                                    </div>
                                @endif
                            <!--form ///////////////// -->
                            {{--<form method="post" action="" enctype="multipart/form-data" class="form" data-parsley-validate>
                                @csrf --}}
                                <form  method="post" action="{{URL::to('creer_anon_clit')}}" enctype="multipart/form-data">
                                        {{csrf_field()}}
                               <div class="billing-address">
                                    <h3>Catégorie et région</h3>

                                     {{--<div class="form-group row">
                                            <label class="col-md-2 col-sm-4 col-form-label">Nom <strong style="color: red; ">*</strong></label>
                                            <div class=" col-md-6 col-sm-8">
                                                <input type="text" name="" spellcheck="false" readonl="" style="color:black" value=""  class="form-control">
                                            </div>
                                    </div>--}}
                                
                                    <div class="form-group row">
                                        <label class="col-md-2 col-sm-4 col-form-label" >Villes <strong>*</strong> </label>
                                        <div class=" col-md-6 col-sm-8"> 
                                            <select class="form-control productville" name="ville">
                                                <option value=""> Villes</option>
                                                @foreach ($vill as $vil)
                                                @php
                                                if($vil['id']!= '5') {
                                                    echo '<option value="'.$vil['id'].'">'. $vil['nom_ville'].'</option>';  
                                                } 
                                                @endphp
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row dtailvhicule" id="qartier" >
                                        <label class="col-md-2 col-sm-4 col-form-label"> Quartier <strong>*</strong></label>
                                        <div class=" col-md-6 col-sm-8">
                                            <select class="form-control Quartier" name="quartier">
                                                <option value="0" disabled="true"> Quartier </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-sm-4 col-form-label">Catégories <strong>*</strong></label>
                                        <div class=" col-md-6 col-sm-8">
                                            <select class="form-control productcategory" name="categorie" >
                                                <option value=""> Categories</option>
                                                @foreach ($cate as $cat)
                                                <option value="{{$cat->id}}"> {{$cat->nom_categorie}} </option>
                                                @endforeach
                                            </select>
                                        </div> 
                                    </div>
                                    <div class=" form-group row">
                                        <label class="col-md-2 col-sm-4 col-form-label">Sous catégories <strong>*</strong></label>
                                        <div class=" col-md-6 col-sm-8">
                                            <select class="form-control productname" name="sous_categorie">
                                                <option value="0" disabled="true"> Sous catégories </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            <div class="billing-address">
                                <h3>Les details de l'annonces</h3>
                                <div class="form-group row dtailvhicule" id="dtailsmart" >
                                    <label class="col-md-2 col-sm-4 col-form-label">Marque</label>
                                    <div class=" col-md-6 col-sm-8">
                                        <select class="form-control Marques" name="marque">
                                            <option value="" disabled="true"> Marques </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row dtailvhicule">
                                    <label class="col-md-2 col-sm-4 col-form-label">Modèle</label>
                                    <div class=" col-md-6 col-sm-8">
                                        <select class="form-control modele" name="Modele">
                                            <option value="" disabled="true"> Modèles </option>
                                        </select>
                                    </div>
                                </div>
                                <div class=" form-group row dtailvhicule">
                                    <label class="col-md-2 col-sm-4 col-form-label">Transmission</label>
                                    <div class=" col-md-6 col-sm-8">
                                        <select class="form-control transmission" name="Transmission">
                                            <option value=""> Transmission</option>
                                            <option value="Automatique" {{(old('Transmission')=='Automatique')? 'selected':''}}>Automatique</option>
                                            <option value="Manuelle" {{(old('Transmission')=='Manuelle')? 'selected':''}}>Manuelle</option>
                                            <option value="Autre" {{(old('Transmission')=='Autre')? 'selected':''}}>Autre</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row dtailvhicule">
                                    <label class="col-md-2 col-sm-4 col-form-label">Carburant</label>
                                    <div class=" col-md-6 col-sm-8">
                                        <select class="form-control" name="Carburant">
                                            <option value="" >Carburant</option>
                                            <option value="Essence" {{(old('Carburant')=='Essence')? 'selected':''}}>Essence</option>
                                            <option value="Diesel" {{(old('Carburant')=='Diesel')? 'selected':''}}>Diesel</option>
                                            <option value="Hybrid" {{(old('Carburant')=='Hybrid')? 'selected':''}}>Hybrid</option>
                                            <option value="Electrique" {{(old('Carburant')=='Electrique')? 'selected':''}}>Electrique</option>
                                            <option value="Gaz" {{(old('Carburant')=='Gaz')? 'selected':''}}>Gaz</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row dtailvhicule">
                                    <label class="col-md-2 col-sm-4 col-form-label">Année</label>
                                    <div class=" col-md-6 col-sm-8">
                                        <input class="form-control" type="text" name="Annee" value="{{ old('Annee') }}" placeholder="Année">
                                    </div>
                                </div>
                                <div class="form-group row dtailvhicule">
                                    <label class="col-md-2 col-sm-4 col-form-label">Kilométrage</label>
                                    <div class=" col-md-6 col-sm-8">
                                        <input class="form-control" type="text" name="Klometrage" value="{{ old('Klometrage') }}" placeholder="Kilométrage"> <span>Kilométres </span>
                                    </div>
                                </div>
                                <div class=" form-group row dtailvhicule apparte">
                                    <label class="col-md-2 col-sm-4 col-form-label">Nombres de pieces</label>
                                    <div class=" col-md-6 col-sm-8">
                                        <input class="form-control" type="text" name="nb_pieces" value="{{ old('nb_pieces') }}" placeholder="pieces">
                                    </div>
                                </div>
                                <div class=" form-group row dtailvhicule apparte">
                                    <label class="col-md-2 col-sm-4 col-form-label">Superficie</label>
                                    <div class=" col-md-6 col-sm-8">
                                        <input class="form-control" type="text" name="Superficie" value="{{ old('Superficie') }}" placeholder="Superficie">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-sm-4 col-form-label">Prix</label>
                                    <div class=" col-md-6 col-sm-8">
                                        <input class="form-control" value="{{ old('Prix') }}" type="number" name="Prix" placeholder="prix">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-sm-4 col-form-label">Titre <strong>*</strong></label>
                                    <div class=" col-md-6 col-sm-8">
                                        <input class="form-control" type="text" name="Titre" value="{{ old('Titre') }}" placeholder="Titre">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class=" col-md-8">
                                        <label>Description <strong>*</strong></label>
                                        <!-- <div class="column wide">-->
                                            <textarea type="text" id="message" name="Description" class="form-control" placeholder="Donnez le plus de détails possible sur votre article" rows="9">{{old('Description')}}</textarea>
                                        <!--</div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Photos </label>
                                </div> 
                            </div>
                            <div class="row">
                                <div class="col-md-">
                                    <div class="ro">
                                        <div id="coba"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="billing-address">
                                <h3>Vos informations </h3>
                                <div class="form-group row">
                                    <label class="col-md-2 col-sm-4 col-form-label">Nom <strong>*</strong></label>
                                    <div class=" col-md-8 col-sm-8">
                                        <input class="form-control" type="text" name="name" value="{{$client->name}}" placeholder="Entrer votre Nom">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-sm-4 col-form-label">Email <strong>*</strong></label>
                                    <div class=" col-md-8 col-sm-8">
                                        <input class="form-control" type="text" name="email" value="{{$client->email}}" placeholder="Entrer votre email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-sm-4 col-form-label">Mot de passe <strong>*</strong></label>
                                    <div class=" col-md-8 col-sm-8">
                                        <input class="form-control" type="password" value="{{$client->password}}" name="password" placeholder=" Entrer un mot de passe">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-sm-4 col-form-label">Téléphone <strong>*</strong></label>
                                    <div class=" col-md-8 col-sm-8">
                                        <input class="form-control" type="text" value="{{$client->phone}}" name="phone" placeholder="Entrer votre contact">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-sm-4 col-form-label">Téléphone</label>
                                    <div class=" col-md-8 col-sm-8">
                                       <input class="form-control" type="text" value="{{$client->phone2}}" name="phone2" placeholder="Entrer un 2eme contact">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-3">
                                        <input class="btn btn-primary soubmit" type="submit" value="Créer votre annonce">
                                    </div>
                                </div>
                                

                                    <!-- A ne pas éffacer A ne pas éffacer
                                    <div class="col-md-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="shipto">
                                            <label class="custom-control-label" for="shipto">Ship to different address</label>
                                        </div>
                                    </div> -->
                                
                            </div>  <!-- Billing Address -->
                            {{-- </form> --}}

                            </form>
                        </div> <!-- checkout-inner -->
                    </div>  <!-- /col-lg-8  
                     -->



                    <!-- leur ouverture est en bas de la page -->
                </div>
            </div>
        </div>
        <!-- Checkout End -->
        
        <!-- Footer Start -->

        <!-- Footer End -->

        <script type="text/javascript" src="spartan_multi_image/dist/js/spartan-multi-image-picker.js"></script>

            <script type="text/javascript">
                $(function(){
        
                    $("#coba").spartanMultiImagePicker({
                        fieldName:        'fileUpload[]',
                        rowHeight:        '130px',
                        groupClassName:   'col-md-2 col-sm-3 col-xs-6',
                        directUpload : {
                            status: true,
                            loaderIcon: '<i class="fas fa-sync fa-spin"></i>',
                            //type:'post',
                            //url: "{!!URL::to('addimage_jquer')!!}",
                            additionalParam : {
                                name : 'My Name'
                            },
                            success : function(data, textStatus, jqXHR){
                            },
                            error : function(jqXHR, textStatus, errorThrown){
                            }
                        }
                    });
                });
            </script>
        
@endsection


@section('scripts')


   {{-- <script src="{{asset('frontend/sitejs/formannonce.js')}}"></script> --}} 

   <script>

       
$(document).ready(function(){
/* VILLE A QUARTIER*/
    $('.dtailvhicule').css('display', 'none');
    $('#qartier').css('display', 'none');

    if('.productville' != "villes" ){
        $('#qartier').css('display', 'block');
    }

    $(document).on('change','.productville', function(){
        
    var viquartier =$(this).val();
    $('#qartier').css('display', 'none');
    //$('.dtailvhicule').css('display', 'none');
    if(viquartier == 1 ){
        $('#qartier').css('display', 'block');
    }

    $.ajax({
        type:'get',
        url:'{!!URL::to("findquartier")!!}', 
        data:{'id':viquartier},
        success:function(data){
            $('.Quartier').empty();
            $('.Quartier').append('<option value="0">Quartier</option>');
            $.each(data, function (index,subcategory){
                $('.Quartier').append('<option value="'+subcategory.id+'">'+subcategory.nom_quartier+'</option>');
                //console.log(data[i].nom_sous_categorie);
            })

        },
        error:function(){
        }
    });

    });



    /* CATEGORIE A SOUS CATEGORIE */
    $(document).on('change','.productcategory', function(){
        //$('.productname').empty();
        $('.dtailvhicule').css('display', 'none');
    var cat_id=$(this).val();
    
    //var div=$(this).parent().parent().parent().parent().parent();
    //div.css('background-color', 'red');   
    //var op= " ";

    $.ajax({
        type:'get',
        url:'{!!URL::to("findProductName")!!}', 
        data:{'id':cat_id},
        success:function(data){
            
            $('.productname').empty();
            $('.productname').append('<option value="0">sous_categorie</option>');
            $.each(data, function (index,subcategory){
                $('.productname').append('<option value="'+subcategory.id+'">'+subcategory.nom_sous_categorie+'</option>');
                //console.log(data[i].nom_sous_categorie);
            })
            
            /*
            for(var i=0; i<data.length; i++){
                $('.productname').append('<option value="'+data[i].id+'">'+data[i].nom_sous_categorie+'</option>');
                
            }
                */

        },
        error:function(){

        }
    });
});

/* SOUS CATEGORIE A  LA MARQUES*/
$(document).on('change','.productname', function(){
    
    var sous_cat_id=$(this).val();
    $('.dtailvhicule').css('display', 'none');
    if(sous_cat_id == 10 ){
       
     $('.dtailvhicule').css('display', 'block');
     $('.apparte').css('display', 'none');
     $('#qartier').css('display', 'none');
    }
    if(sous_cat_id == 1 ){
        $('#dtailsmart').css('display', 'block');

    }
    if(sous_cat_id == 17) {
        $('.apparte').css('display', 'block');
    }
    if(sous_cat_id == 18) {
        $('.apparte').css('display', 'block');
    }
    if(sous_cat_id == 19 ) {
        $('.apparte').css('display', 'block');
    }
    if(sous_cat_id == 20) {
        $('.apparte').css('display', 'block');
    }
    if(sous_cat_id ==21) {
        $('.apparte').css('display', 'block');
    }
    if(sous_cat_id == 22) {
        $('.apparte').css('display', 'block');
    }
    if(sous_cat_id ==24) {
        $('.apparte').css('display', 'block');
    }
    if(sous_cat_id == 23){
        $('.superficie').css('display', 'block');
    }
    if(sous_cat_id ==  25){
        $('.superficie').css('display', 'block');
    }
    

    $.ajax({
        type:'get',
        url:'{!!URL::to("findmarqmodel")!!}', 
        data:{'id':sous_cat_id},
        success:function(data){
            
            $('.Marques').empty();
            $('.Marques').append('<option value="">Marque</option>');
            $.each(data, function (index,subcategory){
                $('.Marques').append('<option value="'+subcategory.nom_marque+'">'+subcategory.nom_marque+'</option>');
                //console.log(data[i].nom_sous_categorie);
            })

        },
        error:function(){
        }
    });

});



/* DE LA MARQUES AU MODELE  */
    $(document).on('change','.Marques', function(){
        //$('.dtailvhicule').css('display', 'none');
    var Marqu_id=$(this).val();
    //var div=$(this).parent().parent().parent().parent().parent();
    //div.css('background-color', 'red');   
    //var op= " ";

    $.ajax({
        type:'get',
        url:'{!!URL::to("findmodele")!!}', 
        data:{'id':Marqu_id},
        success:function(data){
            
            $('.modele').empty();
            $('.modele').append('<option value="0"> Modèles </option>');
            $.each(data, function (index,subcategory){
                $('.modele').append('<option value="'+subcategory.nom_modele+'">'+subcategory.nom_modele+'</option>');
                //console.log(data[i].nom_sous_categorie);
            })
            
            /*
            for(var i=0; i<data.length; i++){
                $('.productname').append('<option value="'+data[i].id+'">'+data[i].nom_sous_categorie+'</option>');
                
            }
                */
        },
        error:function(){

        }
    });
});








});

   </script>
	

@endsection





        
        