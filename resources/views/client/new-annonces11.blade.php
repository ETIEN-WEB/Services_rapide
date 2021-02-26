@extends('layouts.appclient')

{{-- start content --}}
@section('contenu')
        
        <!-- Bottom Bar Start -->
        <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="index.html">
                                <img src="img/logo.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="search">
                            <input type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="user">
                            <a href="wishlist.html" class="btn wishlist">
                                <i class="fa fa-heart"></i>
                                <span>(0)</span>
                            </a>
                            <a href="cart.html" class="btn cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span>(0)</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Bar End --> 
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                    <li class="breadcrumb-item active">Checkout</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Checkout Start -->
        <div class="checkout">
            <div class="container-fluid"> 
                <div class="row">
                    <!-- leur fermerture est en bas de la page 
                     -->
                    <div class="col-lg-8">
                        <div class="checkout-inner">
                            <!--form ///////////////// -->
                            {{--<form method="post" action="" enctype="multipart/form-data" class="form" data-parsley-validate>
                                @csrf --}}
                                <form role="form" method="post" action="{{URL::to('addimage_jquer')}}" enctype="multipart/form-data">
                                        {{csrf_field()}}
                            <div class="billing-address">
                                <h3>Billing Address</h3>

                                    <div class="form-group row">
                                        
                                            <label class="col-md-2 col-sm-4 col-form-label">Nom <strong style="color: red; ">*</strong></label>
                                            <div class=" col-md-4 col-sm-8">
                                                <input type="text" name="nom" spellcheck="false" readonl="" style="text-transform:uppercase" value=""  class="form-control">
                                            </div>
                                      
                                    </div>
                                
                                    <div class="row">
                                       
                                            <label class="col-md-2 col-sm-4 col-form-label" >Villes  <strong style="color: red; ">*</strong> </label>
                                            <div class="col-md-4 col-sm-8 "> 
                                                <select class="custom-select productville" >
                                                    <option value="0" disabled="true" selected="true"> Villes</option>
                                                    @foreach ($vill as $vil)
                                                    <option value="{{$vil->id}}"> {{$vil->nom_ville}} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                       
                                    </div>
                                    <div class="row dtailvhicule" id="qartier" >
                                        <div class="col-md-6">
                                            <label> Quartier </label>
                                            <select class="custom-select Quartier">
                                                <option value="0" disabled="true" selected="true" > Quartier </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Catégories   </label>
                                            <select class="custom-select productcategory" >
                                                <option value="0" disabled="true" selected="true"> Categories</option>
                                                @foreach ($cate as $cat)
                                                <option value="{{$cat->id}}"> {{$cat->nom_categorie}} </option>
                                                @endforeach
                                            </select>
                                        </div> 
                                    </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Sous catégories</label>
                                        <select class="custom-select productname">
                                            <option value="0" disabled="true" selected="true" > Sous catégories </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="billing-address">
                                <h3>Les details de l'annonces</h3>
                                <div class="row dtailvhicule" id="dtailsmart" >
                                    <div class="col-md-6">
                                        <label>Marque</label>
                                        <select class="custom-select Marques">
                                            <option value="0" disabled="true" selected="true" > Marques </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row dtailvhicule">
                                    <div class="col-md-6">
                                        <label>Modèle</label>
                                        <select class="custom-select modele">
                                            <option value="0" disabled="true" selected="true" > Modèles </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row dtailvhicule">
                                    <div class="col-md-6">
                                        <label>Transmission</label>
                                        <select class="custom-select transmission">
                                            <option value="0" disabled="true" selected="true"> Transmission</option>
                                            <option value="1">Automatique</option>
                                            <option value="2">Manuelle</option>
                                            <option value="3">Autre</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row dtailvhicule">
                                    <div class="col-md-6">
                                        <label>Carburant</label>
                                        <select class="custom-select">
                                            <option selected>Carburant</option>
                                            <option value="1">Essence</option>
                                            <option value="2">Diesel</option>
                                            <option value="3">Hybrid</option>
                                            <option value="4">Electrique</option>
                                            <option value="5">Gaz</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="row dtailvhicule">
                                    <div class="col-md-3">
                                        <label>Année</label>
                                        <input class="form-control" type="text" placeholder="Année">
                                    </div>
                                </div>
                                <div class="row dtailvhicule">
                                    <div class="col-md-3">
                                        <label>Kilométrage</label>
                                        <input class="form-control" type="text" placeholder="Kilométrage">
                                    </div>
                                    <div class="col-md-3">
                                        <label>Kilométres</label>
                                    </div>
                                </div>
                                <div class="row dtailvhicule apparte">
                                    <div class="col-md-3">
                                        <label>Nombres de pieces</label>
                                        <input class="form-control" type="text" placeholder="pieces">
                                    </div>
                                </div>
                                <div class="row dtailvhicule apparte">
                                    <div class="col-md-3">
                                        <label>Superficie</label>
                                        <input class="form-control" type="text" placeholder="Superficie">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Prix</label>
                                        <input class="form-control" type="number" placeholder="prix">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Description</label>
                                        <div class="column wide">
                                            <textarea id="message" name="competence" class="form-control" placeholder="Donnez le plus de détails possible sur votre article" rows="9"> </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-horizontal">
                                <div class="form-grou">
                                    <label class="control-label col-md-3">Upload Image</label>
                                    <div class="col-md-">
                                        <div class="ro">
                                            <div id="coba"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="billing-address">
                                <h3>Vos informations </h3>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Nom</label>
                                        <input class="form-control" type="text" name="Nom" placeholder="Entrer votre Nom">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Email</label>
                                        <input class="form-control" type="text" name="Email" placeholder="Entrer votre email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Mot de passe</label>
                                        <input class="form-control" type="text" name="password" placeholder=" Entrer un mot de passe">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Téléphone</label>
                                        <input class="form-control" type="text" name="phone" placeholder="Entrer votre contact">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Téléphone</label>
                                        <input class="form-control" type="text" name="phone2" placeholder="Entrer un 2eme contact">
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

                            <!--
                            <div class="shipping-address">
                                <h2>Shipping Address</h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>First Name</label>
                                        <input class="form-control" type="text" placeholder="First Name">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Last Name"</label>
                                        <input class="form-control" type="text" placeholder="Last Name">
                                    </div>
                                    <div class="col-md-6">
                                        <label>E-mail</label>
                                        <input class="form-control" type="text" placeholder="E-mail">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Mobile No</label>
                                        <input class="form-control" type="text" placeholder="Mobile No">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Address</label>
                                        <input class="form-control" type="text" placeholder="Address">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Country</label>
                                        <select class="custom-select">
                                            <option selected>United States</option>
                                            <option>Afghanistan</option>
                                            <option>Albania</option>
                                            <option>Algeria</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label>City</label>
                                        <input class="form-control" type="text" placeholder="City">
                                    </div>
                                    <div class="col-md-6">
                                        <label>State</label>
                                        <input class="form-control" type="text" placeholder="State">
                                    </div>
                                    <div class="col-md-6">
                                        <label>ZIP Code</label>
                                        <input class="form-control" type="text" placeholder="ZIP Code">
                                    </div>
                                </div>
                            </div> -->
                            </form>
                        </div> <!-- checkout-inner -->
                    </div>  <!-- /col-lg-8  
                     -->

                    <!-- Cart Total  Cart Total  Cart Total  Cart Total  Cart Total Cart Total  -->
                    <div class="col-lg-4">
                        <div class="checkout-inner">
                            <div class="checkout-summary">
                                <h1>Cart Total</h1>
                                <p>Product Name<span>$99</span></p>
                                <p class="sub-total">Sub Total<span>$99</span></p>
                                <p class="ship-cost">Shipping Cost<span>$1</span></p>
                                <h2>Grand Total<span>$100</span></h2>
                            </div>

                            <div class="checkout-payment">
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
                            </div>
                        </div>
                    </div> <!-- /col-lg-4 --> 

                    <!-- leur ouverture est en bas de la page -->
                </div>
            </div>
        </div>
        <!-- Checkout End -->
        
        <!-- Footer Start -->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Get in Touch</h2>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i>123 E Store, Los Angeles, USA</p>
                                <p><i class="fa fa-envelope"></i>email@example.com</p>
                                <p><i class="fa fa-phone"></i>+123-456-7890</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Follow Us</h2>
                            <div class="contact-info">
                                <div class="social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Company Info</h2>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Condition</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Purchase Info</h2>
                            <ul>
                                <li><a href="#">Pyament Policy</a></li>
                                <li><a href="#">Shipping Policy</a></li>
                                <li><a href="#">Return Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="row payment align-items-center">
                    <div class="col-md-6">
                        <div class="payment-method">
                            <h2>We Accept:</h2>
                            <img src="img/payment-method.png" alt="Payment Method" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="payment-security">
                            <h2>Secured By:</h2>
                            <img src="img/godaddy.svg" alt="Payment Security" />
                            <img src="img/norton.svg" alt="Payment Security" />
                            <img src="img/ssl.svg" alt="Payment Security" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

    $(document).on('change','.productville', function(){
        $('#qartier').css('display', 'none');
    var viquartier =$(this).children("option:selected").val();
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
    
    var sous_cat_id=$(this).children("option:selected").val();
    $('.dtailvhicule').css('display', 'none');
    if(sous_cat_id == 5 ){
       
        $('.dtailvhicule').css('display', 'block');
         $('.apparte').css('display', 'none');
    }
    if(sous_cat_id == 1 ){
        $('#dtailsmart').css('display', 'block');
    }
    if(sous_cat_id == 7 ){
        $('.apparte').css('display', 'block');
    }
    

    $.ajax({
        type:'get',
        url:'{!!URL::to("findmarqmodel")!!}', 
        data:{'id':sous_cat_id},
        success:function(data){
            
            $('.Marques').empty();
            $('.Marques').append('<option value="0">Marque</option>');
            $.each(data, function (index,subcategory){
                $('.Marques').append('<option value="'+subcategory.id+'">'+subcategory.nom_marque+'</option>');
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
    var Marqu_id=$(this).children("option:selected").val();
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
                $('.modele').append('<option value="'+subcategory.id+'">'+subcategory.nom_modele+'</option>');
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





        
        