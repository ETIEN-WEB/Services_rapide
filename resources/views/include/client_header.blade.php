

    <body>


                <!-- Bottom Bar Start -->
        <div class="bottom-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="{{URL::to('/')}}">
                                <img src="{{asset('frontend/img/logo.png')}}" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="search">
                            <a href="{{URL::to('/shop')}}" class="">
                                <!--<i class="fa fa-heart"></i>-->
                                <span>Toutes les annonces</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="user">
                            <a href="{{URL::to('/new_annonces')}}" class="btn wishlist">
                                <!--<i class="fa fa-heart"></i>-->
                                <span>Publier votre annonces</span>
                            </a>
                            {{--<a href="{{URL::to('/tes')}}" class="btn wishlist">
                                <!--<i class="fa fa-heart"></i>-->
                                <span>test</span>
                            </a>--}}
                            
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="search">
                            <div class="navbar-nav ml-auto">
                                <div class="nav-item dropdown">
                                    
                                            @guest
                                            <a href="#" class="nav-link dropdown-toggle compte" data-toggle="dropdown"><i class="fas fa-user-alt"></i> Compte</a>
                                            <div class="dropdown-menu">
                                            <a href="{{route('register')}}" class="dropdown-item">S'enregistrer</a>
                                            <a href="{{route('login')}}" class="dropdown-item">Se connecter</a>
                                        
                                        @endguest
                                        @auth
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fas fa-user-alt"></i> {{ Auth::user()->name }}</a>
                                        <div class="dropdown-menu">
                                            
                                            <a href="{{URL::to('/profil/'.Auth::user()->id)}}" class="dropdown-item">Mes annonces</a>
                                        <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">{{ __('Se deconnecter') }}</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                        @endauth
    
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Bar End -->     
        