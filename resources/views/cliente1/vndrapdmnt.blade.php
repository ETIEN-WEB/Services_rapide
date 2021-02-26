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
                       
                        

                        

                        {{--<div class="header product-view mb-0">
                            <div class="container-fluid">--}}
                                        

                            {{--</div>
                        </div>--}}
                        
                        {{--
                             
                                        
                                
                        --}}  <!-- /product -->
                    </div> <!-- col-lg-8 end -->
                    
                    <!-- Side Bar Start -->
                    
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