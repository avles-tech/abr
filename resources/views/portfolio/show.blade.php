@extends('layout.app')
@section('meta')
    <title>AdamEve&Apple | Portfolio - {{$portfolioes->name}}</title>
    <meta name="description" content="A residential letting and sales company wanted a website to showcase all their availavle properties and a cost effective solution. Call. 02030263673">
		<meta name="keywords" content="Katryan, web design, web development, marketing, digital marketing" />
@endsection
@section('content') 
<body class='front'>
<!-- page wrapper start -->
<div class="page-wrapper">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="http://adameveandapple.coffeecup.com/forms/Request%20a%20call/colorbox/colorbox.css" />
		<script src="http://adameveandapple.coffeecup.com/forms/Request%20a%20call/common/libs_js/jquery-1.4.4.min.js"></script>
		<script src="http://adameveandapple.coffeecup.com/forms/Request%20a%20call/colorbox/jquery.colorbox.js"></script>
		<script>
			var $fb_pop = jQuery.noConflict();

			$fb_pop(document).ready(function(){
			// Fallback for Safari browser
				if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1 ) {
					$fb_pop('.fb_iframe').click( function(){
						var temp_window = window.open('http://adameveandapple.coffeecup.com/forms/Request%20a%20call/','Request%20a%20call','width=0,height=0');
						window.focus();
						setTimeout(function() {temp_window.close();},1000);
					} );
				}
				$fb_pop(".fb_iframe").colorbox({iframe:true, innerWidth:"693px", height:"100%", maxHeight:"900px", fixed:true }); 
			});
        </script>
        
        <div class="page-intro">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ol class="breadcrumb">
                            <li><a href="/"><i class="fa fa-home" aria-hidden="true"></i></a></li> 
                            <li><a href="/Portfolio">Portfolio</a></li>
                            <li class="active"><a href="/Portfolio/{{$portfolioes->name}}">{{$portfolioes->name}}</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div> 
        <!-- main-container start -->
        <section class="main-container">

            <div class="container">
                <div class="row">

                    <!-- main start -->
						<div class="main col-md-8">

                                <!-- page-title start -->
                                <h1 class="page-title margin-top-clear">{{$portfolioes->client}}</h1>
                                <!-- page-title end -->
    
                                <!-- Nav tabs -->
                                <ul class="nav nav-pills white space-top" role="tablist">
                                    <li class="active"><a href="#portfolio-images" role="tab" data-toggle="tab" title="images"><i class="fa fa-camera pr-5"></i> Photo</a></li>
                                </ul>
    
                                <!-- Tab panes -->
							    <div class="tab-content clear-style">
                                    <div class="tab-pane active" id="portfolio-images">
                                        <div class="owl-carousel content-slider-with-controls">
                                            <div class="overlay-container">
                                                <img src="/storage/client_cover_images/{{$portfolioes->cover_image}}" alt="Easy Shipping Logo">
                                                <a href="/storage/client_cover_images/{{$portfolioes->cover_image}}" class="popup-img overlay" title="{{$portfolioes->name}} Logo"><i class="fa fa-search-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    <!-- main end -->
    
                            <!-- portfolio sidebar start -->
                            <aside class="col-md-4">
                                <div class="sidebar">
                                    <div class="portfolio-item side vertical-divider-left">
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-3 col-md-12">
                                                <div class="block clearfix">
                                                    <h3 class="title margin-top-clear">Project Info</h3>
                                                    <ul class="list">
                                                        <li><strong class="vertical-divider">Client </strong>{{$portfolioes->client}}</li>
                                                        <li><strong class="vertical-divider">In </strong> {{$portfolioes->inc}}</li>
                                                        <li><strong class="vertical-divider">URL </strong> <a href="{{$portfolioes->url}}" target="blank">{{$portfolioes->url}}</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-3 col-md-12">
                                                <h3>Project Description</h3>
                                                    <div class="separator-2"></div>
                                                    <p style="text-align:justify;">{{$portfolioes->proj_description}}</p>
                                            </div>
                                            <div class="col-xs-6 col-sm-3 col-md-12">
                                                <div class="block clearfix">
                                                    <h3 class="title margin-top-clear">Share This</h3>
                                                    <div id="share">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Add the extra clearfix for only the required viewport -->
                                            <div class="clearfix visible-xs-block"></div>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                            <!-- portfolio sidebar end -->
    
                        </div>
                    </div>
                </section>
                <!-- main-container end -->
    
                <!-- section start -->
                <div class="section default-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                            <h1 class="call-title text-center">Waste no more time</h1>
                                <p class="text-center">Please fill-out this form we will call at your convenience.</p>
                            </div>
                            <div class="col-md-4">
                                <div class="text-center"><br>
                                    <a class='fb_iframe btn btn-white more' href="http://adameveandapple.coffeecup.com/forms/Request%20a%20call/"><i class="pl-10 fa fa-phone"></i> Request a Call</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
                <!-- section start -->
			    <div class="section clearfix">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>Related Projects</h2>
                                <div class="separator-2"></div>
                                @include ('inc.clients')
                            </div>
                        </div>
                    </div>
			    </div>
			<!-- section end -->
</body>
@endsection