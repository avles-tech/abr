@extends('layout.app')
@section('meta')
	<title>ABR Contractors | Quote</title>
    <meta name="description" content="">
    <meta name="keywords" content="" />
@endsection
@section('content') 
<div class="breadcrumb-area">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class="page-title">
										<h2>Quote</h2>
										<ul class="breadcrumb">
										   <li><a href="/">Home</a></li>
										   <li class="active">Quote</li>
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
									<h2>REQUEST A QUOTE</h2>
									<p>Get started on your building project today with ABR Contractors! Fill out the form below, and someone from the Abcott team will contact you as soon as possible.</p>
						    	</div>
							</div>
							<!-- .col-md-12-->
						</div>
						<!-- .row-->
					</div>
					<!-- .container-->
					<div class="container">
						<div class="row">
							<div class="form-section">
								<div class="col-md-8 col-xs-12 col-sm-8">
									<div class="main-contact-form">
										<form action="/">
											<input type="text" id="full-name" name="company" placeholder="Company*">
											<input type="text" id="email" name="contact_name" placeholder="contact Name*">
											<input type="email" id="subject" name="email" placeholder="Email*">
											<input type="text" id="subject" name="phone" placeholder="Phone*">
											<div class="control-group">
											<label>I am a(n): </label>
												<input type="radio" name="radios" />
												Existing Customer 
												<input type="radio" name="radios" />
												New Customer 
												<label>
											</div>
											<div class="control-group">
											<label class="control-label">I'm interested in: </label>
												<div class="controls">
													<input type="checkbox" name="radios" />
													New Building Project</br>
													<input type="checkbox" name="radios" />
													Small Projects</br>
													<input type="checkbox" name="radios" />
													Project Management</br>
													<input type="checkbox" name="radios" />
													Concrete Work</br>
													<input type="checkbox" name="radios" />
													Butler Pre-Engineered Building Systems</br></br>
												</div>
											</div>
											<div class="control-group">
											<label class="control-label">Estimated Project Completion Date* </label>
												<div class="controls">
													<div  data-date="12-02-2012" class="input-append date datepicker">
													<input type="text" value="12-02-2012"  data-date-format="mm-dd-yyyy" class="span11" >
													<span class="add-on"><i class="icon-th"></i></span> </div>
												</div>
											</div>
											<input type="text" id="subject" name="budget" placeholder="Budget(in $)*">
											<textarea name="message" id="message" cols="30" rows="4" placeholder="Additional Project Information"></textarea>
											<input type="submit" class="btn" value="submit">
										</form>
									</div>
								</div>
								<div class="col-md-4 col-xs-12 col-sm-4">
									<div class="office-location">
										<div class="contact-us head-office">
											<h4>Head Office</h4>
											<address>
												16 Sherrickgreen Road <br>NW101LD London
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
