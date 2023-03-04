@extends('layout.app')
@section('meta')
    <title>AdamEve&Apple Blog | {{$blog->title}}</title>
    <meta name="description" content="{{$blog->meta_description}}">
    <meta name="keywords" content="{{$blog->keywords}}" />
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
                            <li><a href="/Blog/{{$blog->title}}">{{$blog->title}}</a></li>
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
                                <h1 class="page-title">{{$blog->title}}</h1>
                                <!-- page-title end -->
    
                                <!-- blogpost start -->
                                <article class="clearfix blogpost full">
                                    <div class="blogpost-body">
                                        <div class="side">
                                            <div class="post-info">
                                                <?php 
                                                    $updateDate=$blog->created_at;
                                                    echo '<span class="day">'.date_format(new DateTime($updateDate),"d").'</span>';
                                                    echo '<span class="month">'.date_format(new DateTime($updateDate),"M Y").'</span>';                                        
                                                ?> 
                                            </div>
                                            <div id="affix"><span class="share">Share This</span><div id="share"></div></div>
                                        </div>
                                        <div class="blogpost-content">
                                            <header>
                                                <div class="submitted"><i class="fa fa-user pr-5"></i> by <a>{{$blog->author}}</a></div>
                                            </header>
                                            <div class="owl-carousel content-slider-with-controls">
                                                <img src="/storage/blog_cover_images/{{$blog->cover_image}}" alt="Avoid SEO Shortcuts">
                                            </div>
                                            <p>{!! $blog->body !!}</p>
                                        </div>
                                    </div>
                                    <footer class="clearfix">
                                        <ul class="links pull-left">
                                            <?php
                                                $tagname=DB::table('blogtags')->where('id',$blog->tag_id)->first();
                                            ?>
                                            <li><i class="fa fa-tags pr-5"></i><a href="/Blog/tags/{{$tagname->name}}"</a>{{$tagname->name}}</li>
                                        </ul>
                                    </footer>
                                </article>
                                <!-- blogpost end -->
                                
                                <div id="disqus_thread"></div>
                                    <script type="text/javascript">
                                        /* * * CONFIGURATION VARIABLES * * */
                                        var disqus_shortname = 'adameveandapple';
        
                                        /* * * DON'T EDIT BELOW THIS LINE * * */
                                        (function() {
                                        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                                            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                                        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                                            })();
                                        </script>
                                        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
                                
                            </div>
                            <!-- main end -->
    
                            <!-- sidebar start -->
                            <aside class="col-md-3 col-md-offset-1">
                                <div class="sidebar">
                                    @include('inc.tags')
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
    
                        </div>
                    </div>
                </section>
                <!-- main-container end -->
</body>
@endsection