


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

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries 
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

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
@include('include.client_header')
{{-- end header --}}

{{-- start content --}}

<div class="container">
    <br>
    <br>
    <form role="form" method="post" action="{{URL::to('addimage_jquer')}}" enctype="multipart/form-data">
        {{csrf_field()}}
       {{-- {{csrf_field()}} 
       @csrf --}} 
    <div class="form-horizontal">
        <div class="form-group">
            <label class="control-label col-md-3">Upload Image</label>
            <div class="col-md-8">
                <div class="row">
                    <div id="coba"></div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3"></label>
            <div class="col-md-8">
                <div></div>
                <input type="submit" class="btn btn-primary" value="Send">
            </div>
        </div>
    </div>	
    </form>
</div>

<script type="text/javascript" src="spartan_multi_image/dist/js/spartan-multi-image-picker.js"></script>

<!-- <script type="text/javascript" src="../dist/js/spartan-multi-image-picker.js"></script> -->

<script type="text/javascript">
    $(function(){

        $("#coba").spartanMultiImagePicker({
            fieldName:        'fileUpload[]',
            rowHeight:        '130px',
            groupClassName:   'col-md-2 col-sm-3 col-xs-6',
            directUpload : {
                status: false,
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


 
{{--  @yield('contenu')


end content --}}


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
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script> 
        <script src="{{asset('frontend/lib/easing/easing.min.js')}}"></script>
        <script src="{{asset('frontend/lib/slick/slick.min.js')}}"></script>
        
        <!-- Template Javascript -->
        <script src="{{asset('frontend/js/main.js')}}"></script>

      
        
    </body>
</html>