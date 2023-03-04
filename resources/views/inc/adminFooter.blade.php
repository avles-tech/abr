<!--Footer-part-->
<style>
.footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    padding:1%;
    background-color:#272c33;
    color: white;
    font-size:14px;
    text-align: center;
}
.footer a:hover{
    color: lightgreen;
    
}
</style>
<div class="row-fluid"> 
  <div id="footer" class="footer"> Copright &copy; 2018 AdamEve&Apple Ltd. All Rights Reserved. Developed by <a href="http://www.adameveandapple.co.uk/">AdamEve&Apple</a></div>
</div>
<!--end-Footer-part-->

<!-- Right Panel -->

<script src="{{asset('/assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="{{asset('/assets/js/popper.min.js')}}"></script>
<script src="{{asset('/assets/js/plugins.js')}}"></script>
<script src="{{asset('/assets/js/main.js')}}"></script>

<script src="{{asset('/assets/js/lib/chart-js/Chart.bundle.js')}}"></script>
<script src="{{asset('/assets/js/dashboard.js')}}"></script>
<script src="{{asset('/assets/js/widgets.js')}}"></script>
<script src="{{asset('/assets/js/lib/vector-map/jquery.vmap.js')}}"></script>
<script src="{{asset('/assets/js/lib/vector-map/jquery.vmap.min.js')}}"></script>
<script src="{{asset('/assets/js/lib/vector-map/jquery.vmap.sampledata.js')}}"></script>
<script src="{{asset('/assets/js/lib/vector-map/country/jquery.vmap.world.js')}}"></script>
<script>
    ( function ( $ ) {
        "use strict";

        jQuery( '#vmap' ).vectorMap( {
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#1de9b6',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: [ '#1de9b6', '#03a9f5' ],
            normalizeFunction: 'polynomial'
        } );
    } )( jQuery );
</script>