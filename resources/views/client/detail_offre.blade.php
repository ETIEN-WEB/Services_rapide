@extends('layouts.appclient')

{{-- start content --}}
@section('contenu')
<link rel="stylesheet" href="{{asset('p_hom/sty_dtail.css')}}">


        <!-- Bottom Bar Start -->

        <!-- Bottom Bar End --> 
        
        <!-- Breadcrumb Start -->
        <!--<div class="breadcrumb-wrap">
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
                        <div class="product-detail-top">
                            <div class="row ">
                                <div class="col-md-5">
                                    <div class="product-slider-single normal-slider">
                                        @foreach ($anonce->fileUpload as $photos)
                                        <img src="{{asset('upload/'.$photos)}}" alt="Product Image">
                                        @endforeach
                                    </div>
                                    <div class="product-slider-single-nav normal-slider">
                                        @foreach ($anonce->fileUpload as $photos)
                                        <div class="slider-nav-img"><img src="{{asset('upload/'.$photos)}}" alt="Product Image"></div>
                                        @endforeach
                                    </div>
                                </div> <!-- col-md-5 end -->
                                <?php
                                    $stamp= strtotime($anonce->created_at);
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

                                    $annoce_seltioner = $anonce->id;
                                    /* formule pour afficher le prix avec espace */
                                    $nombre = strrev(wordwrap(strrev($anonce['Prix']), 3, ' ', true));
                                ?>
                                <div class="col-md-7">
                                    <div class="product-content">
                                        <div class="title"><h2>{{$anonce->Titre}}</h2></div>
                                        {{-- <div class="ratting">
                                            <i class="fa fa-star"></i>
                                        </div> --}}
                                        <div class="price">
                                            <h4>Vendeur:</h4>
                                            <p>{{$anonce->clientt->name}} <span></span></p>
                                        </div>
                                        <div class="price">
                                            <h4>Prix:</h4>
                                            <p>{{$nombre}} Fcfa <span></span></p>
                                        </div>
                                        <div class="price">
                                            <h4>Lieu:</h4>
                                            <p>
                                                @php
                                                    echo $anonce['villt']['nom_ville'].' &nbsp'.'&nbsp ';
                                                    if($anonce['quartiert']['id']!= '3'){
                                                    echo '<span>'.$anonce['quartiert']['nom_quartier'].'</span>';
                                                    } 
                                                @endphp
                                            </p>
                                        </div>
                                        <div class="price">
                                            <h4>Publiée:</h4>
                                            <p>
                                                {{$ladate['mday'].".". "  ". $j.", " ." "." ".$ladate['hours'].":".$ladate['minutes']}}
                                            <span></span></p>
                                        </div>
                                        
                                         @if ($anonce->marque != "")
                                        <div class="price">
                                            <h4>Marque:</h4>
                                            <p>
                                               {{$anonce->marque}}
                                            <span></span></p>
                                        </div>
                                        @endif
                                        @if ($anonce->Modele != "")
                                        <div class="price">
                                            <h4>Modele:</h4>
                                            <p>
                                               {{$anonce->Modele}}
                                            <span></span></p>
                                        </div>
                                        @endif
                                        @if ($anonce->Transmission != "")
                                        <div class="price">
                                            <h4>Transmission:</h4>
                                            <p>
                                               {{$anonce->Transmission}}
                                            <span></span></p>
                                        </div>
                                        @endif
                                        @if ($anonce->Annee != "")
                                        <div class="price">
                                            <h4>Annee:</h4>
                                            <p>
                                               {{$anonce->Annee}}
                                            <span></span></p>
                                        </div>
                                        @endif
                                        @if ($anonce->Klometrage != "")
                                        <div class="price">
                                            <h4>Kilometrage:</h4>
                                            <p>
                                               {{$anonce->Klometrage}}
                                            <span></span></p>
                                        </div>
                                        @endif
                                        @if ($anonce->Carburant != "")
                                        <div class="price">
                                            <h4>Carburant:</h4>
                                            <p>
                                               {{$anonce->Carburant}}
                                            <span></span></p>
                                        </div>
                                        @endif
                                        @if ($anonce->nb_pieces != "")
                                        <div class="price">
                                            <h4>Nombres de pieces:</h4>
                                            <p>
                                               {{$anonce->nb_pieces}}
                                            <span></span></p>
                                        </div>
                                        @endif
                                        @if ($anonce->Superficie != "")
                                        <div class="price">
                                            <h4>Superficie:</h4>
                                            <p>
                                               {{$anonce->Superficie}}
                                            <span></span></p>
                                        </div>
                                        @endif
                                        <div class="action">
                                            {{--<a class="btn" href="#">Mettre l'annonce VIP</a>
                                            <a class="btn mb-2" href="#">Remonter l'annonce</a> <br>--}}
                                            <a class="btn" href="#"><i> Tel: </i>{{$anonce->clientt->phone}}</a>
                                        </div>
                                    </div>
                                </div> <!-- col-md-7 end -->
                            </div> <!-- row align-items-center end -->
                        </div> <!-- product-detail-top end -->
                        
                        <div class="row product-detail-bottom">
                            <div class="col-lg-12">
                                <ul class="nav nav-pills nav-justified">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="pill" href="#description">Description</a>
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
                                        <h4>Description de l'annonce</h4>
                                      
                                        <?php echo nl2br($anonce['Description']); ?>
                                            
                                        
                                    </div>
                                    <div id="specification" class="container tab-pane fade">
                                        <h4>Information Vendeur</h4>
                                        <ul>
                                            <li>Nom: &nbsp  {{$anonce->clientt->name}}</li>
                                            <li>Contacts: &nbsp {{$anonce->clientt->phone}} /  {{$anonce->clientt->phone2}}</li>
                                            <li>Email: &nbsp {{$anonce->clientt->email}} </li>
                                            
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
                        <div class="product">
                            <div class="section-header">
                                <h1>Annonces recommandées </h1>
                            </div>
                        </div>

                        {{--<div class="header product-view mb-0">
                            <div class="container-fluid">--}}
                                        
                                        <div class="row annonces">
                                            <br>
                                            
                                                
                                            
                                            @foreach ($annonces as $anonc)
                                            @if ($anonc->id != $annoce_seltioner)         
                                            <?php
                                                $stamp= strtotime($anonc->created_at);
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
                                                $nombre = strrev(wordwrap(strrev($anonc['Prix']), 3, ' ', true));
                                                ?>
                                                
                                            <div class="col-6 col-sm-4 col-lg-4 bordure">
                                               
                                                    <div class="product-item">
                                                        {{--<div class="product-title">
                                                            <a href="#">{{$anonc->Titre}} </a>
                                                            <div class="ratting">
                                                                {{$anonc->villt->nom_ville}}
                                                            </div>
                                                        </div>--}}
                                                        <div class="product-image">
                                                            <a href="{{url('/detail_offre/'.$anonc->id)}}">
                                                                <img src="{{asset('upload/'.$anonc->fileUpload[0])}}" alt="Product Image" height="200px">
                                                            </a>
                                                        </div>
                                                        <a href="{{url('/detail_offre/'.$anonc->id)}}">
                                                        <div class="product-price">
                                                            <h3 class="douman">{{ucfirst(substr($anonc->Titre,0,30))}}...</h3> <br>
                                                            <h3 class="">
                                                                @php
                                                                    echo $anonc['villt']['nom_ville'].' &nbsp'.'&nbsp ';
                                                                    if($anonc['quartiert']['id']!= '3'){
                                                                    echo '<span>'.$anonc['quartiert']['nom_quartier'].'</span>';
                                                                    } 
                                                                @endphp
                                                            </h3> <br>
                                                            <h3 class="igoua">{{$nombre}}fcfa</h3> <br>
                                                            <h3 class="">{{$ladate['mday'].".". "  ". $j.", " ." "." ".$ladate['hours'].":".$ladate['minutes']}}</h3>
                                                        </div>
                                                        </a>
                                                    </div>
                                            </div>
                                            @endif
                                            @endforeach
                                            {{-- Product Name  Product Name --}}
                                        </div>
                            {{--</div>
                        </div>--}}
                        
                        {{--
                             
                                        
                                
                        --}}  <!-- /product -->
                    </div> <!-- col-lg-8 end -->
                    
                    <!-- Side Bar Start -->
                    {{--<div class="col-lg-4 sidebar">
                        <div class="sidebar-widget category">
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
                        </div>
                    </div>--}}
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