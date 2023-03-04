<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @yield('contitle') 
        <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta name="language" content="en">
        <meta name="robots" content="index,follow,all" />
        <meta name="Author" content="AdamEve&Apple" />
        <meta name="HandheldFriendly" content="True">

        <link rel="apple-touch-icon" href="/images/apple-icon.png">
        <link rel="icon" type="image/png" href="/favicon.png">

        <link rel="stylesheet" href="{{asset('/assets/css/normalize.css')}}">
        <link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('/assets/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('/assets/css/themify-icons.css')}}">
        <link rel="stylesheet" href="{{asset('/assets/css/flag-icon.min.css')}}">
        <link rel="stylesheet" href="{{asset('/assets/css/cs-skin-elastic.css')}}">
        <link rel="stylesheet" href="{{asset('/assets/css/lib/datatable/dataTables.bootstrap.min.css')}}">
        <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
        <link rel="stylesheet" href="{{asset('/assets/scss/style.css')}}">
        <link href="{{asset('/assets/css/lib/vector-map/jqvmap.min.css')}}" rel="stylesheet">

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
        <style>
            .truncate-ellipsis
            {
                white-space: nowrap; 
                width: 9em; 
                overflow: hidden;
                text-overflow: ellipsis;
            }

            .contim {
                padding:9px 15px;
                background-color: #eee;
              }
            .truncate-ellipsis-title
            {
                white-space: nowrap; 
                width: 6em; 
                overflow: hidden;
                text-overflow: ellipsis;
            }
            .truncate-ellipsis-title:hover{
                overflow: visible; 
                white-space: normal;
                height:auto;  /* just added this line */
            }

            /* The grid: Four equal columns that floats next to each other */
            
            /* Style the images inside the grid */
            .column img {
                opacity: 0.8; 
                cursor: pointer; 
            }
            
            .column img:hover {
                opacity: 1;
            }
            
            /* Clear floats after the columns */
            .row:after {
                content: "";
                display: table;
                clear: both;
            }
            
            #myImg {
                border-radius: 5px;
                cursor: pointer;
                transition: 0.3s;
            }

            #myImg:hover {opacity: 0.7;}
            /* The expanding image container */
            .containertmimg {
                display: none; /* Hidden by default */
                position: fixed; /* Stay in place */
                z-index: 1000; /* Sit on top */
                top: 50%;
                left: 50%;
                width: 700px;
                height: auto;
                margin-top: -220px; /* Half the height */
                margin-left: -330px; /* Half the width */
                -webkit-animation-name: zoom;
                -webkit-animation-duration: 0.6s;
                animation-name: zoom;
                animation-duration: 0.6s;
            }
            @-webkit-keyframes zoom {
                from {-webkit-transform:scale(0)} 
                to {-webkit-transform:scale(1)}
            }
            
            @keyframes zoom {
                from {transform:scale(0)} 
                to {transform:scale(1)}
            }
            /* Expanding image text */
            #imgtext {
                position: absolute;
                top: 100%;
                left: 0%;
                color: white;
                font-size: 18px;
                font-weight:lighter;
                width: 689px;
                padding-left:11px;
                padding-bottom:11px;
                padding-top:11px;
                background-color:#A9A9A9;
                overflow: hidden;
                text-overflow: ellipsis; 
                
                
            }
            /* Closable button inside the expanded image */
            .closebtn {
                position: absolute;
                right: 35px;
                color: white;
                font-size: 18px;
                cursor: pointer;
            }
            .closebtn:hover,
            .closebtn:focus {
                color: #FF7F50;
                text-decoration: none;
                cursor: pointer;
            }
            /* 100% Image Width on Smaller Screens */
            @media only screen and (max-width: 700px){
                .containertmimg {
                    top: 50%;
                    left: 50%;
                    height: 215px;
                    width: 90%;
                    margin-left: -169px; /* Half the width */
                }

                #imgtext {
                    position: absolute;
                    top: auto;
                    left: 0%;
                    color: white;
                    font-size: 15px;
                    font-weight:lighter;
                    width: 96.8%;
                    padding-left:11px;
                    padding-bottom:11px;
                    padding-top:11px;
                    overflow: hidden;
                    text-overflow: ellipsis; 
                    background-color:#A9A9A9;
                }
            } 
        </style>
    </head>
    <body>
        
        @include('inc.adminNavLeft')
        <div id="right-panel" class="right-panel">
            @include('inc.adminNavTop')
            @yield('content')
            <script type="text/javascript">

                $(document).ready(function () {
                
                window.setTimeout(function() {
                    $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
                        $(this).remove(); 
                    });
                }, 5000);
                
                });
                </script>
            <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
            <script>
            CKEDITOR.replace( 'article-ckeditor' );
            </script>
            <!-- Lightbox links -->
            <link rel="stylesheet" type="text/css" href="{{asset('/css/strip.css')}}"/>
            <!--Light box plugin js-->    
            <script type="text/javascript" src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
            <script type="text/javascript" src="{{asset('js/strip.pkgd.min.js')}}"></script>
            @include('inc.adminFooter')        
        </div><!-- /#right-panel -->
    </body>
</html>
