

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>E Store - eCommerce HTML Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">

        <!-- Favicon -->
        <link href="{{asset('frontend/img/favicon.ico')}}" rel="icon">

        <!-- Google Fonts  -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        {{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous"> 
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">--}}

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{asset('frontend/lib/slick/slick.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/lib/slick/slick-theme.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
      <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
        <script src="{{asset('frontend/parsley.min.js')}}"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <link href="https://github.com/es-shims/es5-shim.git">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    </head>



{{-- start header --}}
<body>
<div class="bottom-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-3">
                <div class="logo">
                    <a href="{{URL::to('/')}}">
                        <img src="{{asset('frontend/img/logo.png')}}" alt="Logo">
                    </a>
                </div>
            </div>
            <div class="col-md-5">
                <div class="user">
                    <a href="{{URL::to('/new_annonces')}}" class="btn wishlist">
                        <!--<i class="fa fa-heart"></i>-->
                        <span>Publier votre annonces</span>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
               <div class="search">
                        <div role="presentation" class="dropdown">
                            @guest
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"    role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user-alt"></i> Compte <span class="caret"></span>
                            </a>
                          <ul class="dropdown-menu">
                            <li><a href="{{route('register')}}">S'enregistrer</a></li>
                            <li><a href="{{route('login')}}">Se connecter</a></li>
                          </ul>
                          @endguest
                          @auth
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"    role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user-alt"></i>  {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{URL::to('/profil/'.Auth::user()->id)}}" >Mes annonces</a></li>
                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"> {{ __('Se deconnecter') }}</a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </ul>

                          @endauth
                        </div>

                     {{-- <div class="navbar-nav ml-auto">
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
                    </div> --}}
                </div> 
           </div> <!-- col-md-4 -->
    </div>
</div>
{{-- end header --}}

{{-- start content --}}

  @yield('contenu')


{{-- end content --}}


@include('include.client_footer')


        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 copyright">
                        <p>Copyright &copy; <a href="https://htmlcodex.com">HTML Codex</a>. All Rights Reserved</p>
                    </div>

                    <div class="col-md-6 template-by">
                        <p>Template By <a href="https://htmlcodex.com">HTML Codex</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->       
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- JavaScript Libraries -->
        <script>
            $('#form').parsley();
          </script>
        <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script> -->
        <script src="{{asset('frontend/lib/easing/easing.min.js')}}"></script>
        <script src="{{asset('frontend/lib/slick/slick.min.js')}}"></script>
        
        <!-- Template Javascript -->
        <script src="{{asset('frontend/js/main.js')}}"></script>

        @yield('scripts') 
        
    </body>
</html>