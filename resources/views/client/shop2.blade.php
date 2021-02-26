


@extends('layouts.appclient')

{{-- start content --}}
@section('contenu')
<link rel="stylesheet" href="{{asset('p_hom/styl.css')}}">

        <!-- Bottom Bar Start -->
        
        <!-- Bottom Bar End -->
        <div class="call-to-action">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1>Publicité</h1>
                    </div>
                    <div class="col-md-6">
                        <a href="tel:0123456789">+012-345-6789</a>
                    </div>
                </div>
            </div>
        </div> 
        
        <!-- Main Slider Start -->
        <div class="header product-view mb-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-12">
                        <nav class="navbar bg-light">
                            <ul class="navbar-nav">
                                
                                @foreach ($categori as $categorie)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{URL::to('/select_par_cat/'.$categorie->id)}}"><i class="{{$categorie->image_categorie}}"></i>{{$categorie->nom_categorie}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>

                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="product-view-top">
                                    <form method="POST" action="{{route('an_search')}}">
                                        @csrf
                                        <div class="form-row align-items-center">
                                            <div class="col-md-5">
                                                <label class="sr-only" for="inlineFormInput">Name</label>
                                                <input type="text" name="fq" class="form-control mb-2" id="inlineFormInput" placeholder="Que cherchez-vous">
                                            </div>
                                            <div class="col-md-5">
                                                <label class="sr-only" for="inlineFormInputGroup">Username</label>
                                                <div class="input-group mb-2">
                                                    <select class="form-control" name="q" >
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
                                            </div>
                                            <!-- <div class="col-auto">
                                                <label class="sr-only" for="inlineFormInputGroup">Username</label>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">@</div>
                                                    </div>
                                                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                                                </div>
                                            </div>-->
                                            <div class="col-md-2">
                                              <button type="submit" class="btn btn-primary mb-2"><i class="fa fa-search" aria-hidden="true"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div> <!-- product-view-top  end -->
                            </div> <!-- col-md-12 end -->
                        </div>

                        {{--<div class="row">
                            <div class="col-md-12">
                                <div class="product-view-top">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="product-search">
                                                <input type="email" value="Search">
                                                <button><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="product-short">
                                                <div class="dropdown">
                                                    <div class="dropdown-toggle" data-toggle="dropdown">Product short by</div>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item">Newest</a>
                                                        <a href="#" class="dropdown-item">Popular</a>
                                                        <a href="#" class="dropdown-item">Most sale</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="product-price-range">
                                                <div class="dropdown">
                                                    <div class="dropdown-toggle" data-toggle="dropdown">Product price range</div>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item">$0 to $50</a>
                                                        <a href="#" class="dropdown-item">$51 to $100</a>
                                                        <a href="#" class="dropdown-item">$101 to $150</a>
                                                        <a href="#" class="dropdown-item">$151 to $200</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>--}}
                        {{-- @if (request()->input()) --}}
                        {{-- "{{request()->q}}" --}}
                            {{-- <h4>{{$anonce->total() }} résultat(s) pour la recherche </h4>
                                
                            @endif --}}
                            <div class="row mb-2"> </div>
                        <div class="row">
                            
                            <br>
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

                                /*echo "<br>";
                                    echo $ladate['mday'].", ".$j;
                                    echo "<br>";
                                echo "L'heure est : ".$ladate['hours'].":".$ladate['minutes'];*/

                                //$nombre_format_francais = number_format($number, 2, ',', ' ');
                                $nombre = strrev(wordwrap(strrev($anonc['Prix']), 3, ' ', true));
                                //echo strrev(wordwrap(strrev($data['argent']), 3, ' ', true)).' $';
                                //$nombre = number_format($anonc->Prix, 0, ',', ' ');

                                ?>

                                
                            <div class="col-lg-3 col-md-4 bordure">
                               
                                    <div class="product-item">
                                        <div class="product-title">
                                            <a href="#">{{$anonc->Titre}} </a>
                                            <div class="ratting">
                                                {{$anonc->villt->nom_ville}}
                                            </div>
                                        </div>
                                        <div class="product-image">
                                            <a href="product-detail.html">
                                                <img src="{{asset('upload/'.$anonc->fileUpload[0])}}" alt="Product Image" height="280px">
                                            </a>
                                            <div class="product-action">
                                                <!-- <a href="#"><i class="fa fa-cart-plus"></i></a>
                                                <a href="#"><i class="fa fa-heart"></i></a>
                                                <a href="#"><i class="fa fa-search"></i></a>-->
                                            </div>
                                        </div>
                                        <div class="product-price">
                                            
                                            <h3 class="">{{$nombre}}fcfa</h3> <br>
                                            <h3 class="">{{$ladate['mday'].".". "  ". $j.", " ." "." ".$ladate['hours'].":".$ladate['minutes']}}</h3>
                                        </div>
                                    </div>
                                
                                
                            </div>
                            @endforeach
                            {{-- Product Name  Product Name --}}
                        </div>
                        <!-- Pagination Start -->
                        <!-- <div class="row">
                            <div class="col-md-8">
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
                        </div> Pagination end -->
                    </div>

                </div>
            </div>
        </div>
        <!-- Main Slider End -->      
                
        <!-- Recent Product Start -->
        <div class="recent-product product mt-0">
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
        </div>
        <!-- Recent Product End -->
        
        <!-- Review Start -->
        <!-- <div class="review">
            <div class="container-fluid">
                <div class="row align-items-center review-slider normal-slider">
                    <div class="col-md-6">
                        <div class="review-slider-item">
                            <div class="review-img">
                                <img src="{{asset('frontend/img/review-1.jpg')}}" alt="Image">
                            </div>
                            <div class="review-text">
                                <h2>Customer Name</h2>
                                <h3>Profession</h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae nunc eget leo finibus luctus et vitae lorem
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="review-slider-item">
                            <div class="review-img">
                                <img src="{{asset('frontend/img/review-2.jpg')}}" alt="Image">
                            </div>
                            <div class="review-text">
                                <h2>Customer Name</h2>
                                <h3>Profession</h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae nunc eget leo finibus luctus et vitae lorem
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="review-slider-item">
                            <div class="review-img">
                                <img src="{{asset('frontend/img/review-3.jpg')}}" alt="Image">
                            </div>
                            <div class="review-text">
                                <h2>Customer Name</h2>
                                <h3>Profession</h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae nunc eget leo finibus luctus et vitae lorem
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         Review End --> 
        
    @endsection


