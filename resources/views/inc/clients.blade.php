<div class="owl-carousel carousel">
    <?php
        $getClients=DB::table('portfolios')->get();
    ?>
    @if(count($getClients)>0)
        @foreach($getClients as $getClient)
            <div class="image-box object-non-visible" data-animation-effect="fadeInLeft" data-effect-delay="300">
                    <div class="overlay-container">
                        <img src="/storage/client_cover_images/{{$getClient->cover_image}}" alt="{{$getClient->name}} Logo">
                        <div class="overlay">
                            <div class="overlay-links">
                                <a href="/Portfolio/{{$getClient->name}}" ><i class="fa fa-link"></i></a>
                                <a href="/storage/client_cover_images/{{$getClient->cover_image}}" class="popup-img"><i class="fa fa-search-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="image-box-body">
                        <h3 class="title"><a href="/Portfolio/{{$getClient->name}}" >{{$getClient->name}}</a></h3>
                    </div>
            </div>
        @endforeach
    @endif
</div>