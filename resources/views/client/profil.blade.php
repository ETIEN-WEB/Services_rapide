
@extends('layouts.appclient')

{{-- start content --}}
@section('contenu')
<link rel="stylesheet" href="{{asset('p_hom/styproan.css')}}">


        <!-- Bottom Bar Start -->

        <!-- Bottom Bar End --> 
        
        <!-- Breadcrumb Start -->
       <!-- <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                    <li class="breadcrumb-item active">Product Detail</li>
                </ul>
            </div>
        </div>
         Breadcrumb End -->
        
        <!-- Product Detail Start -->
        <div class="product-detail">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        @if (Session::has('statu'))
                        <div class="alert alert-success"> 
                            {{Session::get('statu')}}
                        </div>
                        @endif
                        <div class="row product-detail-bottom">
                            <div class="col-lg-12">
                                <ul class="nav nav-pills nav-justified">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="pill" href="#description">Vos annonces</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#specification">Vendeur</a>
                                    </li>
                                    <!--<li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#reviews">Reviews (1)</a>
                                    </li>-->
                                </ul>

                                <div class="tab-content">
                                    <div id="description" class="container tab-pane active">
                                        {{--<h4>Description de l'annonce</h4> --}}
                                      
                                        <?php //echo nl2br($anonce['Description']); ?>

                                        {{-- <div class="cart-page-inner">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    dd($cliannoce->Titre) --}}
                                                    
                                                    @foreach ($client->annoces as $cliannoce)
                                                    <div class="row profil">  
                                                        <?php
                                                            $stamp= strtotime($cliannoce->created_at);
                                                            $ladate= getdate($stamp);
    
                                                            $jd = $ladate['mon'];
                                                            $j="";
                                                            switch($jd){
                                                            case 1: $j= "jan";
                                                            break;
                                                            case 2: $j= "fev";
                                                            break;
                                                            case 3: $j= "mars";
                                                            break;
                                                            case 4: $j= "avr";
                                                            break;
                                                            case 5: $j= "mai";
                                                            break;
                                                            case 6: $j= "jun";
                                                            break;
                                                            case 7: $j= "jull";
                                                            break;
                                                            case 8: $j= "Août";
                                                            break;
                                                            case 9: $j= "sept";
                                                            break;
                                                            case 10: $j= "sept";
                                                            break;
                                                            case 11: $j= "nov";
                                                            break;
                                                            case 12: $j= "dec";
                                                            default: $j= "Erreur";
    
                                                            }
                                                            $nombre = strrev(wordwrap(strrev($cliannoce['Prix']), 3, ' ', true));
                                                            
                                                        ?>
                                                        <div class="col-md-3 col-sm-3 col-xs-3 fileU">
                                                            <a href="{{url('/detail_offre/'.$cliannoce->id)}}">
                                                              <img src="{{asset('upload/'.$cliannoce->fileUpload[0])}}" alt="Product Image">
                                                            </a>
                                                        </div>
                                                        <div class=" col-md-3 col-sm-6 col-xs-6">
                                                            {{$cliannoce->Titre}} <br>
                                                            @php 
                                                            echo $cliannoce['villt']['nom_ville'].' &nbsp'.'&nbsp ';
                                                            if($cliannoce['quartiert']['id']!= '3'){
                                                            echo '<span>'.$cliannoce['quartiert']['nom_quartier'].'</span> <br>';
                                                            //echo '<option value="'.$vil['id'].'">'. $vil['nom_ville'].'</option>';  
                                                            }
                                                            @endphp 
                                                            <div class="espace"></div>
                                                            {{$nombre}} fcfa <br>
                                                        </div>
                                                            
                                                            <div class="col-md-3 col-sm-6 col-xs-6">
                                                                @if ($cliannoce->status == 1)
                                                                    <div class="">
                                                                        {{$cliannoce->vip4}} vue(s)
                                                                    </div>
                                                                    <div>
                                                                        <span class="ligne">
                                                                        En ligne 
                                                                        </span>
                                                                    </div>
                                                                    <div class="">
                                                                        {{$ladate['mday'].".". "  ". $j.", " ." "." ".$ladate['hours'].":".$ladate['minutes']}}
                                                                    </div>
                                                                @else   
                                                                <div class="">
                                                                    Veillez patienter pendant que nous vérifions votre annonces  
                                                                </div>
                                                                @endif
                                                                
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6">
                                                                <div class="">
                                                                    {{--URL::to('/select_par_cat/'.$categorie->id)--}}
                                                                    <a href="{{URL::to('/supprimerproduit/'.$cliannoce->id)}}" id="delete" class="btn btn-outline-danger" >Supprimer</a> <br>
                                                                    {{--<div class=""> <a href="{{URL::to('/vip/'.$cliannoce->id)}}"> mettre vip </a> </div>
                                                                    <div class=""> <a href="{{URL::to('/remonte/'.$cliannoce->id)}}"> remonter</a> </div>--}}
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach 
                                                {{--</table>
                                            </div>
                                        </div>--}}
                                    </div> <!-- id descrition -->
                                    <div id="specification" class="container tab-pane fade">
                                        <h4>Information Vendeur</h4>
                                        <ul>
                                           {{-- <li>Nom: &nbsp  {{$anonce->clientt->client_nom}}</li>
                                            <li>Contacts: &nbsp {{$anonce->clientt->telephone}} / {{$anonce->clientt->telephone2}}</li>
                                            <li>Email: &nbsp {{$anonce->clientt->email}} </li>--}}
                                            
                                        </ul>
                                    </div>
                                    <div id="reviews" class="container tab-pane fade">
                                        <div class="reviews-submitted">
                                            <div class="reviewer">Phasellus Gravida - <span>01 Jan 2020</span></div>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <p>
                                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                                            </p>
                                        </div>
                                        <div class="reviews-submit">
                                            <h4>Give your Review:</h4>
                                            <div class="ratting">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <div class="row form">
                                                <div class="col-sm-6">
                                                    <input type="text" placeholder="Name">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="email" placeholder="Email">
                                                </div>
                                                <div class="col-sm-12">
                                                    <textarea placeholder="Review"></textarea>
                                                </div>
                                                <div class="col-sm-12">
                                                    <button>Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- tab-content end -->
                            </div> <!-- col-lg-12 end -->
                        </div> <!--row product-detail-bottom end -->
                        
                        {{--<div class="product">
                            <div class="section-header">
                                <h1>Related Products</h1>
                            </div>

                            <div class="row align-items-center product-slider product-slider-3">
                                <div class="col-lg-3">
                                    <div class="product-item">
                                        <div class="product-title">
                                            <a href="#">Product Name</a>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="product-image">
                                            <a href="product-detail.html">
                                                <img src="{{asset('frontend/img/product-10.jpg')}}" alt="Product Image">
                                            </a>
                                            <div class="product-action">
                                                <a href="#"><i class="fa fa-cart-plus"></i></a>
                                                <a href="#"><i class="fa fa-heart"></i></a>
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-price">
                                            <h3><span>$</span>99</h3>
                                            <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="product-item">
                                        <div class="product-title">
                                            <a href="#">Product Name</a>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="product-image">
                                            <a href="product-detail.html">
                                                <img src="{{asset('frontend/img/product-8.jpg')}}" alt="Product Image">
                                            </a>
                                            <div class="product-action">
                                                <a href="#"><i class="fa fa-cart-plus"></i></a>
                                                <a href="#"><i class="fa fa-heart"></i></a>
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-price">
                                            <h3><span>$</span>99</h3>
                                            <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="product-item">
                                        <div class="product-title">
                                            <a href="#">Product Name</a>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="product-image">
                                            <a href="product-detail.html">
                                                <img src="{{asset('frontend/img/product-6.jpg')}}" alt="Product Image">
                                            </a>
                                            <div class="product-action">
                                                <a href="#"><i class="fa fa-cart-plus"></i></a>
                                                <a href="#"><i class="fa fa-heart"></i></a>
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-price">
                                            <h3><span>$</span>99</h3>
                                            <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="product-item">
                                        <div class="product-title">
                                            <a href="#">Product Name</a>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="product-image">
                                            <a href="product-detail.html">
                                                <img src="{{asset('frontend/img/product-4.jpg')}}" alt="Product Image">
                                            </a>
                                            <div class="product-action">
                                                <a href="#"><i class="fa fa-cart-plus"></i></a>
                                                <a href="#"><i class="fa fa-heart"></i></a>
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-price">
                                            <h3><span>$</span>99</h3>
                                            <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="product-item">
                                        <div class="product-title">
                                            <a href="#">Product Name</a>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="product-image">
                                            <a href="product-detail.html">
                                                <img src="{{asset('frontend/img/product-2.jpg')}}" alt="Product Image">
                                            </a>
                                            <div class="product-action">
                                                <a href="#"><i class="fa fa-cart-plus"></i></a>
                                                <a href="#"><i class="fa fa-heart"></i></a>
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-price">
                                            <h3><span>$</span>99</h3>
                                            <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>--}}
                    </div> <!-- col-lg-8 end -->
                    
                    <!-- Side Bar Start -->
                    <div class="col-lg-4 sidebar">
                        {{--<div class="sidebar-widget category">
                            <h2 class="title">Category</h2>
                            <nav class="navbar bg-light">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fa fa-female"></i>Fashion & Beauty</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fa fa-child"></i>Kids & Babies Clothes</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fa fa-tshirt"></i>Men & Women Clothes</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fa fa-mobile-alt"></i>Gadgets & Accessories</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fa fa-microchip"></i>Electronics & Accessories</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        
                        <div class="sidebar-widget widget-slider">
                            <div class="sidebar-slider normal-slider">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">Product Name</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.html">
                                            <img src="{{asset('frontend/img/product-7.jpg')}}" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>$</span>99</h3>
                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                    </div>
                                </div>
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">Product Name</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.html">
                                            <img src="{{asset('frontend/img/product-8.jpg')}}" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>$</span>99</h3>
                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                    </div>
                                </div>
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">Product Name</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.html">
                                            <img src="{{asset('frontend/img/product-9.jpg')}}" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>$</span>99</h3>
                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sidebar-widget brands">
                            <h2 class="title">Our Brands</h2>
                            <ul>
                                <li><a href="#">Nulla </a><span>(45)</span></li>
                                <li><a href="#">Curabitur </a><span>(34)</span></li>
                                <li><a href="#">Nunc </a><span>(67)</span></li>
                                <li><a href="#">Ullamcorper</a><span>(74)</span></li>
                                <li><a href="#">Fusce </a><span>(89)</span></li>
                                <li><a href="#">Sagittis</a><span>(28)</span></li>
                            </ul>
                        </div>
                        
                        <div class="sidebar-widget tag">
                            <h2 class="title">Tags Cloud</h2>
                            <a href="#">Lorem ipsum</a>
                            <a href="#">Vivamus</a>
                            <a href="#">Phasellus</a>
                            <a href="#">pulvinar</a>
                            <a href="#">Curabitur</a>
                            <a href="#">Fusce</a>
                            <a href="#">Sem quis</a>
                            <a href="#">Mollis metus</a>
                            <a href="#">Sit amet</a>
                            <a href="#">Vel posuere</a>
                            <a href="#">orci luctus</a>
                            <a href="#">Nam lorem</a>
                        </div>--}}
                    </div>
                    <!-- Side Bar End -->
                </div>
            </div>
        </div>
        <!-- Product Detail End -->
        
        <!-- Brand Start -->
        <div class="brand">
            <div class="container-fluid">
                <div class="brand-slider">
                    <div class="brand-item"><img src="{{asset('frontend/img/brand-1.png')}}" alt=""></div>
                    <div class="brand-item"><img src="{{asset('frontend/img/brand-2.png')}}" alt=""></div>
                    <div class="brand-item"><img src="{{asset('frontend/img/brand-3.png')}}" alt=""></div>
                    <div class="brand-item"><img src="{{asset('frontend/img/brand-4.png')}}" alt=""></div>
                    <div class="brand-item"><img src="{{asset('frontend/img/brand-5.png')}}" alt=""></div>
                    <div class="brand-item"><img src="{{asset('frontend/img/brand-6.png')}}" alt=""></div>
                </div>
            </div>
        </div>
        <!-- Brand End -->

@endsection