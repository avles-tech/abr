@extends('layout.app')
@section('meta')
    <title>AdamEve&Apple Blog | {{$gettagname}} Blogs</title>
    <meta name="description" content="{{$tags->meta_description}}">
    <meta name="keywords" content="{{$tags->keywords}}" />
    <meta name="author" content="AdamEve&Apple">
@endsection
@section('content') 
<body class='front'>
<!-- page wrapper start -->
<div class="page-wrapper">
        <div class="page-intro">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ol class="breadcrumb">
                            <li><a href="/"><i class="fa fa-home" aria-hidden="true"></i></a></li> 
                            <li><a href="/Blog">Blog</a></li>
                            <li><a href="/Blog/tags/{{$gettagname}}">{{$gettagname}}</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- main-container start -->
			<section class="main-container">
				<div class="container">
					<div class="row">
						<!-- sidebar start -->
						<aside class="col-md-3">
							<div class="sidebar">
								<div class="block clearfix">
									<h3 class="title">Latest tweets</h3>
									<div class="separator"></div>
									<a class="twitter-timeline" href="https://twitter.com/AdamEveandApple" data-widget-id="637684074031804416">Tweets by @AdamEveandApple</a>
										<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
								</div>
								<div class="block clearfix">
									<h3 class="title">Testimonial</h3>
									<div class="separator"></div>
									<script type="text/JavaScript" src="http://www.freeindex.co.uk/widgets/fiwidget.asp?lid=493114%26tit%3DAdamEveandApple%26wid%3D300%26agt%3D1%26rak%3D0%26dis%3D0%26wri%3D1%26nrv%3D2%26rts%3DS%26theme%3Dlight"></script>
								</div> 
								<div class="block clearfix">
									<h3 class="title">Portfolio</h3>
									<div class="separator"></div>
									<div class="gallery row">
										<div class="gallery-item col-xs-4">
											<div class="overlay-container">
												<img src="/images/portfolio/HT-Movers.jpg" alt="HT Movers Logo">
												<a href="/Portfolio/HT_Movers" class="overlay small">
													<i class="fa fa-link"></i>
												</a>
											</div>
										</div>
										<div class="gallery-item col-xs-4">
											<div class="overlay-container">
												<img src="/images/portfolio/STR-Business-Solutions.jpg" alt="STR Business Solutions Logo">
												<a href="/Portfolio/STR_Business" class="overlay small">
													<i class="fa fa-link"></i>
												</a>
											</div>
										</div>
										<div class="gallery-item col-xs-4">
											<div class="overlay-container">
												<img src="/images/portfolio/Tamilism.jpg" alt="Tamilism Logo">
												<a href="/Portfolio/Tamilism" class="overlay small">
													<i class="fa fa-link"></i>
												</a>
											</div>
										</div>
										<div class="gallery-item col-xs-4">
											<div class="overlay-container">
												<img src="/images/portfolio/Wise-Projects.jpg" alt="Wise Projects Logo">
												<a href="/Portfolio/Wise_Projects" class="overlay small">
													<i class="fa fa-link"></i>
												</a>
											</div>
										</div>
										<div class="gallery-item col-xs-4">
											<div class="overlay-container">
												<img src="/images/portfolio/VN-Electrical-Engineers.png" alt="VN Electrical Engineers Logo">
												<a href="/Portfolio/VN_Electrical" class="overlay small">
													<i class="fa fa-link"></i>
												</a>
											</div>
										</div>
										<div class="gallery-item col-xs-4">
											<div class="overlay-container">
												<img src="/images/portfolio/Slyfox.jpg" alt="Crosshall Surgery Logo">
												<a href="/Portfolio/Slyfox" class="overlay small">
													<i class="fa fa-link"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="block clearfix">
								    @include ('inc.tags')
								</div>
								<div class="block clearfix">
									<form role="search">
										<div class="form-group has-feedback">
											<input type="text" class="form-control" placeholder="Search">
											<i class="fa fa-search form-control-feedback"></i>
										</div>
									</form>
								</div>
							</div>
						</aside>
						<!-- sidebar end -->

						<!-- main start -->
						<!-- ================ -->
						<div class="main col-md-8 col-md-offset-1">

							<!-- page-title start -->
							<!-- ================ -->
							<h1 class="page-title">{{$gettagname}}</h1>
							<div class="separator-2"></div>
							<p class="lead">Welcome to AdamEve&Apple Blog, a place where you can learn everything about digital world.</p>
							<!-- page-title end -->
                            @if(count($blogs)>0)
                                @foreach($blogs as $blog)
                                    <!-- blogpost start -->
                                    <article class="clearfix blogpost object-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200">
                                        <div class="overlay-container">
                                            <img src="/storage/blog_cover_images/{{$blog->cover_image}}" alt="{{$blog->title}}">
                                            <div class="overlay">
                                                <div class="overlay-links">
                                                    <a href="/Blog/{{$blog->title}}" ><i class="fa fa-link"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blogpost-body">
                                            <div class="post-info">
                                                <?php 
                                                    $updateDate=$blog->created_at;
                                                    echo '<span class="day">'.date_format(new DateTime($updateDate),"d").'</span>';
                                                    echo '<span class="month">'.date_format(new DateTime($updateDate),"M Y").'</span>';                                        
                                                ?> 
                                            </div>
                                            <div class="blogpost-content">
                                                <header>
                                                    <h2 class="title"><a href="/Blog/{{$blog->title}}" >{{$blog->title}}</a></h2>
                                                    <div class="submitted"><i class="fa fa-user pr-5"></i> by <a>{{$blog->author}}</a></div>
                                                </header>
                                                <p>{!! $blog->description !!}</p>
                                            </div>
                                        </div>
                                        <footer class="clearfix">
                                            <ul class="links pull-left">
                                                <li><i class="fa fa-tags pr-5"></i><a href="/Blog/tags/{{$gettagname}}">{{$gettagname}}</a> </li>
                                            </ul>
                                        </footer>
                                    </article>
                                    <!-- blogpost end -->
                                @endforeach
                            @else
                            <p>No more blogs</p>
                            @endif
                            <div class="pagination">
                            <ul>
                                {{$blogs->links()}}
                            </ul>
                            </div> 
                                    
						</div>
						<!-- main end -->

					</div>
				</div>
			</section>
			<!-- main-container end -->
</body>
@endsection