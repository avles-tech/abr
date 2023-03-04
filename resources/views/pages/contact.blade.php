@extends('layout.app')
@section('meta')
	<title>ABR Contractors | Contact</title>
    <meta name="description" content="">
    <meta name="keywords" content="" />
@endsection
@section('content') 
<div class="breadcrumb-area">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class="page-title">
										<h2>Contact us</h2>
										<ul class="breadcrumb">
										   <li><a href="/">Home</a></li>
										   <li class="active">contact</li>
										</ul>
									</div>
								</div>
							</div>
							<!-- .row-->
						</div>
						<!-- .container-->
					</div>
					<!-- .breadcrumb-area-->

					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="map-head">
						    		<h2>Location map</h2>
						    	</div>
							</div>
							<!-- .col-md-12-->
						</div>
						<!-- .row-->
					</div>
					<!-- .container-->

					<div class="map-area">
						<div id="mapCanvas" class="map-canvas"></div>
						<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgH5MZP8z509BzEIPyQXcqBB0FvZ408gA&callback=initMap"
  type="text/javascript"></script>
					</div>
					<!-- .map-area-->

					<div class="container">
						<div class="row">
							<div class="form-section">
								<div class="col-md-8 col-xs-12 col-sm-8">
									<div class="main-contact-form">
										<h4>Contact</h4>
										<p>Please do not hesitate to contact us if you have any further questions. Otherwise, I hope that we can work together successfully build a your dream again another time.</p>
										<form action="">
											<input type="text" id="full-name" name="name" placeholder="Name">
											<input type="email" id="email" name="email" placeholder="Email">
											<input type="text" id="subject" name="subject" placeholder="Subject">
											<textarea name="message" id="message" cols="30" rows="4" placeholder="Message"></textarea>
											<input type="submit" class="btn" value="submit">
										</form>
									</div>
								</div>
								<div class="col-md-4 col-xs-12 col-sm-4">
									<div class="office-location">
										<div class="contact-us head-office">
											<h4>Head Office</h4>
											<address>
												16 Sherrickgreen Road <br>NW10 1LD London
											</address>
											<address>
											 	<span>Email :</span> 
												<a href="info@abrcontractors.co.uk">info@abrcontractors.co.uk</a> 
											</address>
											<address>
											 	<span>Phones :</span> 
												Mobile: (079) 84183695 <br>
												Landline: (020) 8450 9705 <br>
											</address>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
@endsection
