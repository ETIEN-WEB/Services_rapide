
@extends('layouts.appclient')

{{-- start content --}}
@section('contenu')
<link rel="stylesheet" href="{{asset('p_hom/style.css')}}">

 
        
        <!-- Main Slider Start container-fluid-->
        <div class="header mt-60">
            <div class="container-fluid">
                <div class="row">
                    <!-- col-md-3 -->
                    <div class="select_par_cat">
                        <nav class="navbar bg-light">
                            <ul class="navbar-nav">
                                
                               
                                @foreach ($categori as $categorie)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{URL::to('/select_par_cat/'.$categorie->id)}}"><i class="{{$categorie->image_categorie}}"></i>{{$categorie->nom_categorie}}</a>
                                </li>
                                @endforeach
                                  <!-- <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-shopping-bag"></i>Best Selling</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-microchip"></i>Electronics & Accessories</a>
                                </li> -->
                            </ul>
                        </nav>
                    </div>
                    {{-- <div class="col-md-6"> --}}
                    <div class="imgederoulant">
                        <div class="header-slider normal-slider">
                            <div class="header-slider-item">
                                <img src="{{asset('frontend/img/slider-1.jpg')}}" alt="Slider Image" />
                                <div class="header-slider-caption">
                                    <p>Some text goes here that describes the image</p>
                                    {{--<a class="btn" href=""><i class="fa fa-shopping-cart"></i>Shop Now</a>--}}
                                </div>
                            </div>
                            <div class="header-slider-item">
                                <img src="{{asset('frontend/img/slider-2.jpg')}}" alt="Slider Image" />
                                <div class="header-slider-caption">
                                    <p>Some text goes here that describes the image</p>
                                    {{--<a class="btn" href=""><i class="fa fa-shopping-cart"></i>Shop Now</a>--}}
                                </div>
                            </div>
                            <div class="header-slider-item">
                                <img src="{{asset('frontend/img/slider-3.jpg')}}" alt="Slider Image" />
                                <div class="header-slider-caption">
                                    <p>Some text goes here that describes the image</p>
                                    {{--<a class="btn" href=""><i class="fa fa-shopping-cart"></i>Shop Now</a>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-md-3"> --}}
                    <div class="pub">
                        <div class="header-img">
                            <div class="img-item">
                                Votre pub ici  
                                {{--<img src="{{asset('frontend/img/category-1.jpg')}}" />--}}
                                <a class="img-text" href="">
                                    <p></p>
                                </a>
                            </div>
                            <div class="img-item">
                                Votre pub ici
                                {{--<img src="{{asset('frontend/img/category-2.jpg')}}" />--}}
                                <a class="img-text" href="">
                                    <p></p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Slider End -->      
        
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
        
        <!-- Feature Start col-lg-3 col-md-3 -->
        <div class="feature">
            <div class="container-fluid">
                <div class="row align-items-cente">
                    {{--<a class="" href="{{URL::to('/select_par_cat/'.$categorie->id)}}"> </a>--}}
                    @foreach ($catgri as $categis)
                    <div class="feature-col">
                        <div class="feature-content">
                            <a class="nav-link" href="{{URL::to('/select_par_cat/'.$categis->id)}}">
                            <i class="{{$categis->image_categorie}} pb-0"></i>
                            <h2 class="cate">{{$categis->nom_categorie}}</h2>
                            </a>
                            @foreach ($categis->sous_categ as $ss_categ)
                            {{--dd($categis->sous_categ)--}}
                            <a class="" href="{{URL::to('/select_par_sous_cat/'.$ss_categ->id)}}">
                            <p class="souscategorie">
                                {{$ss_categ->nom_sous_categorie}}
                            </p>
                            </a>
                            @endforeach
                        </div>
                    </div>
                    
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Feature End-->      
        
        <!-- Category Start-->

        <!-- Category End-->       
        
        <!-- Call to Action Start -->
        <!--<div class="call-to-action">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1>call us for any queries</h1>
                    </div>
                    <div class="col-md-6">
                        <a href="tel:0123456789">+012-345-6789</a>
                    </div>
                </div>
            </div>
        </div>
         Call to Action End --> 

        
        



        {{-- {{route('annonces_search')}} --}}
                <!-- Product List Start  -->
                   <div class="product-view">
                      <div class="container-fluid bordure">
                            <!-- <div class="col-md-12">
                                <div class="row">  -->
                                <div class="row">
                                    <div class="col-md-12">
                                        @if (Session::has('status'))
                                        <div class="alert alert-success">
                                            {{Session::get('status')}}
                                        </div>
                                        @endif
                                        <div class="product-view-top">
                                            <form method="POST" action="{{route('an_search')}}">
                                                @csrf
                                                <div class="form-row align-items-center">
                                                    {{--<div class="col-md-3">
                                                        <label class="sr-only" for="inlineFormInput">Name</label>
                                                        <input type="text" name="fq" class="form-control mb-2" id="inlineFormInput" placeholder="Que cherchez-vous">
                                                    </div>--}}
                                                    <div class="col-md-6 col-lg-6">
                                                        <label class="sr-only" for="">Username</label>
                                                        <div class="input-group mb-2">
                                                            <select class="form-control" name="c" required>
                                                                <option value=""> Catégories </option>

                                                                @foreach ($catgri as $s_cates)
                                                                @php
                                                                    echo '<option class="kate" value="'.$s_cates['nom_categorie'] .'">'. $s_cates['nom_categorie'].'</option>';
                                                                @endphp
                                                                @foreach ($s_cates->sous_categ as $souscateg)
                                                                @php
                                                                    echo '<option value="'.$souscateg['nom_sous_categorie'] .'">'. $souscateg['nom_sous_categorie'].'</option>';
                                                                @endphp
                                                                @endforeach
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-lg-6 d-flex justify-content-start bd-highlight">
                                                        <label class="sr-only" for="inlineFormInputGroup">Username</label>
                                                        <div class="input-group mb-2">
                                                            <select class="form-control" name="q" required>
                                                                <option value=""> Villes </option>

                                                                @foreach ($s_ville as $s_vills)
                                                                @php
                                                                    if ($s_vills['id'] != '5') {
                                                                        # code...
                                                                    echo '<option value="'.$s_vills['nom_ville'] .'">'. $s_vills['nom_ville'].'</option>';
                                                                }
                                                                @endphp
                                                                @foreach ($s_vills->quartrs as $categ)
                                                                @php
                                                                    if ($categ['id'] != '3') {
                                                                        # code...
                                                                    echo '<option value="'.$categ['nom_quartier'] .'">'. $categ['nom_quartier'].'</option>';
                                                                }
                                                                @endphp

                                                                {{--
                                                                @foreach ($s_ville as $s_vills)
                                                                <option id="cat_g" value="{{$s_vills->id}}"> {{$s_vills->nom_ville}} </option>
                                                                @foreach ($s_vills->quartrs as $categ)
                                                                <option id="cat_ji" value="{{$categ->id}}"> {{$categ->nom_quartier}} </option>
                                                                --}}
                                    
                                                                @endforeach
                                                                @endforeach
                                                            </select>
                                                            <!--<input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">-->
                                                        </div>
                                                        <button type="submit" class="btn btn-primary ml-2 mb-2"><i class="fa fa-search" aria-hidden="true"></i></button>
                                                    </div>
                                                    
                                                    {{--<div class="col-md-2 col-lg-2">
                                                      <button type="submit" class="btn btn-primary mb-2"><i class="fa fa-search" aria-hidden="true"></i></button>
                                                    </div>--}}
                                                </div>
                                            </form>
                                        </div> <!-- product-view-top  end -->
                                    </div> <!-- col-md-12 end -->
                                </div> <!-- row end -->           
                                <div class="row annonces">
                                    {{-- Product Name  Product Name {{($anonc->fileUpload[0])}}  --}}
                                    @foreach ($anonce as $anonc)
                                               
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
                                    <div class="col-6 col-sm-4 col-md-4 col-lg-2">
                                        {{--<a href="{{url('/detail_offre/'.$anonc->id)}}">--}} 
                                        <div class="product-item">
                                            {{--<div class="product-title">
                                                <a href="{{url('/detail_offre/'.$anonc->id)}}">{{$anonc->Titre}} </a>
                                                <div class="ratting">
                                                    @php
                                                        echo $anonc['villt']['nom_ville'].' &nbsp'.'&nbsp ';
                                                        if($anonc['quartiert']['id']!= '3'){
                                                        echo '<span>'.$anonc['quartiert']['nom_quartier'].'</span>';
                                                        } 
                                                    @endphp
                                                    
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
                                        
                                    </div> <!-- col-md-3 bordure -->
                                    @endforeach
                                </div>                
                                {{-- Product Name  Product Name --}}
                                 <!--</div>  /row end -->
                                
                                <!-- Pagination Start -->
                            <!-- <div class="row">
                                <div class="col-md-12">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                                 Pagination end -->
                            <!-- </div>  /col-md-12 end -->

                        </div>  <!-- container end -->
                         
                    </div> <!-- product-view -->

                
        <!-- Recent Product Start -->
        {{--<div class="recent-product product">
            <div class="container-fluid">
                <div class="section-header">
                    <h1>Recent Product</h1>
                </div>
                <div class="row align-items-center product-slider product-slider-4">
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
                </div>
            </div>
        </div>--}}
        <!-- Recent Product End -->
        
        <!-- Review Start -->
        
        <!-- Review End --> 
        
    @endsection

