<?php
include_once("connection.php");
?>
<!doctype html>
<html class="no-js"  lang="en">

	<head>
		<!-- META DATA -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

		<!-- TITLE OF SITE -->
		<title>Book Your ShareTrip</title>

		<!-- favicon img -->
		<link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>

		<!--font-awesome.min.css-->
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />

		<!--animate.css-->
		<link rel="stylesheet" href="assets/css/animate.css" />

		<!--hover.css-->
		<link rel="stylesheet" href="assets/css/hover-min.css">

		<!--datepicker.css-->
		<link rel="stylesheet"  href="assets/css/datepicker.css" >

		<!--owl.carousel.css-->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css"/>

		<!-- range css-->
        <link rel="stylesheet" href="assets/css/jquery-ui.min.css" />

		<!--bootstrap.min.css-->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />

		<!-- bootsnav -->
		<link rel="stylesheet" href="assets/css/bootsnav.css"/>

		<!--style.css-->
		<link rel="stylesheet" href="assets/css/style.css" />

		<!--responsive.css-->
		<link rel="stylesheet" href="assets/css/responsive.css" />

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

	<body>
		<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
			your browser</a> to improve your experience and security.</p>
		<![endif]-->

		<!-- main-menu Start -->
		<header class="top-area">
			<div class="header-area">
				<div class="container">
					<div class="row">
						<div class="col-sm-2">
							<div class="logo">
								<a href="index.html">
									Book<span style="font-size: larger;color:rgb(175, 112, 112);"> Your ShareTrip</span>
								</a>
							</div><!-- /.logo-->
						</div><!-- /.col-->
						<div class="col-sm-10">
							<div class="main-menu">
							
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
										<i class="fa fa-bars"></i>
									</button><!-- / button-->
								</div><!-- /.navbar-header-->
								<div class="collapse navbar-collapse">		  
									<ul class="nav navbar-nav navbar-right">
										<li class="smooth-menu"><a href="#home">home</a></li>
										<li ><a href="admin_login.php">Admin</a></li>
										<li ><a href="#gallary">Packages & Offers </a></li>
										<li ><a href="guide_login.php">Guide</a></li>
										
										
										<li class="smooth-menu"><a href="#pack">blog</a></li>
										<li class="smooth-menu"><a href="#subs">login/signup</a></li>
										 
									</ul>
								</div><!-- /.navbar-collapse -->
							</div><!-- /.main-menu-->
						</div><!-- /.col-->
					</div><!-- /.row -->
					<div class="home-border"></div><!-- /.home-border-->
				</div><!-- /.container-->
			</div><!-- /.header-area -->

		</header><!-- /.top-area-->
		<!-- main-menu End -->

		
		<!--about-us start -->
		<section id="home" class="about-us">
			<div class="container">
				<div class="about-us-content">
					<div class="row">
						<div class="col-sm-12">
							<div class="single-about-us">
								<div class="about-us-txt">
									<h2>
										Explore the Beauty of the Beautiful Bangladesh.

									</h2>
									<div class="about-btn">
										<button  class="about-view">
											<a href="https://en.wikipedia.org/wiki/Cox%27s_Bazar" style="color:black">explore now</a>
											
										</button>
									</div><!--/.about-btn-->
								</div><!--/.about-us-txt-->
							</div><!--/.single-about-us-->
						</div><!--/.col-->
						<div class="col-sm-0">
							<div class="single-about-us">
								
							</div><!--/.single-about-us-->
						</div><!--/.col-->
					</div><!--/.row-->
				</div><!--/.about-us-content-->
			</div><!--/.container-->

		</section><!--/.about-us-->
		<!--about-us end -->

		<!--travel-box start-->
		<section  class="travel-box">
        	<div class="container">
        		<div class="row">
        			<div class="col-md-12">
        				<div class="single-travel-boxes">
        					<div id="desc-tabs" class="desc-tabs">

								<ul class="nav nav-tabs" role="tablist">

									<li role="presentation" class="active">
									 	<a href="#tours" aria-controls="tours" role="tab" data-toggle="tab">
									 		<i class="fa fa-bus"></i>
									 		Bus
									 	</a>
									</li>

									<li role="presentation">
										<a href="#hotels" aria-controls="hotels" role="tab" data-toggle="tab">
											<i class="fa fa-train"></i>
											Train
										</a>
									</li>

									<li role="presentation">
									 	<a href="#flights" aria-controls="flights" role="tab" data-toggle="tab">
									 		<i class="fa fa-plane"></i>
									 		flights
									 	</a>
									</li>
								</ul>

								<!-- Tab panes -->
								<form action="seatShow.php" method="POST" name="bus">

<div class="tab-content">

	<div role="tabpanel" class="tab-pane active fade in" id="tours">
		<div class="tab-para">

			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12">
					<div class="single-tab-select-box">
						<h2>destination</h2>

						<div class="travel-select-icon">
						<select class="form-control " name="Make1" require>

								<option value="Sajek Valley">Sajek Valley</option>
								<option value="Kuakata Sea Beach">Kuakata Sea Beach</option>
								<option value="Lalakhal">Lalakhal</option>
							   <option value="Cox's Bazar">Cox's Bazar</option>
								<option value="Rangamati">Rangamati</option>
								<option value="Chittagong Hill-Tracts">Chittagong Hill-Tracts</option>

							</select><!-- /.select-->
						</div><!-- /.travel-select-icon -->

						<div class="travel-select-icon">
						<select class="form-control " name="Make2" require>
								<option value="Sajek Valley">Sajek Valley</option>
								<option value="Kuakata Sea Beach">Kuakata Sea Beach</option>
								<option value="Lalakhal">Lalakhal</option>
							   <option value="Cox's Bazar">Cox's Bazar</option>
								<option value="Rangamati">Rangamati</option>
								<option value="Chittagong Hill-Tracts">Chittagong Hill-Tracts</option>

							</select><!-- /.select-->
						</div><!-- /.travel-select-icon -->

					</div><!--/.single-tab-select-box-->
				</div><!--/.col-->

				<div class="col-lg-2 col-md-3 col-sm-4">
					<div class="single-tab-select-box">
						<h2>Date</h2>
						<div class="travel-check-icon">
							
								<input type="text" name="check_in" class="form-control" data-toggle="datepicker"  placeholder="12 -01 - 2017 ">
							
						</div><!-- /.travel-check-icon -->
					</div><!--/.single-tab-select-box-->
				</div><!--/.col-->

				

			

				<div class="col-lg-2 col-md-1 col-sm-4">
					<div class="single-tab-select-box">
						<h2>members</h2>
						<div class="travel-select-icon">
						<select class="form-control " name="Make3" require>

<option value="1">1</option><!-- /.option-->

<option value="2">2</option><!-- /.option-->
<option value="3">3</option>
<option value="4">4</option><!-- /.option-->
<option value="8">8</option><!-- /.option-->

</select><!-- /.select-->
						</div><!-- /.travel-select-icon -->
					</div><!--/.single-tab-select-box-->
				</div><!--/.col-->
				<div class="col-lg-3 col-md-3 col-sm-4">
					<div class="single-tab-select-box">

						<h2>class</h2>
						<div class="travel-select-icon">
						

							<select class="form-control " name="Make4" require>

								  
<option value="normal">Normal</option><!-- /.option-->

<option value="first">First Class</option><!-- /.option-->

<option value="second">Second Class</option><!-- /.option-->

</select><!-- /.select-->
						</div><!-- /.travel-select-icon -->
					</div><!--/.single-tab-select-box-->
				</div><!--/.col-->

			</div><!--/.row-->

			<div class="row">
				<div class="col-sm-5">
			
				</div><!--/.col-->
				<div class="clo-sm-7">
					<div class="about-btn travel-mrt-0 pull-right">
						<button  class="about-view travel-btn" >
						search
							
						</button><!--/.travel-btn-->
					</div><!--/.about-btn-->
				</div><!--/.col-->

			</div><!--/.row-->

		</div><!--/.tab-para-->

	</div><!--/.tabpannel-->
	</form>

	
	<div role="tabpanel" class="tab-pane fade in" id="hotels">
		<div class="tab-para">
			
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12">
					<div class="single-tab-select-box">
					<form action="train.php" method="POST" name="train">

					<h2>destination</h2>

					<div class="travel-select-icon">
						<select class="form-control " name="maker1">
						<option value="Chittagong Hill Tracks">Chittagong Hill Tracks</option>
						<option value="Dhaka">Dhaka</option>
						<option value="Sundarbans">Sundarbans</option>
						
						<option value="Rangamati">Rangamati</option>
						<option value="Jaflong">Jaflong</option>
						<option value="Lalakhal">Lalakhal</option>
						<option value="Cox's Bazar">Cox's Bazar</option>
						<option value="Sajek Valley">Sajek Valley</option>
						
						

						</select><!-- /.select-->
					</div><!-- /.travel-select-icon -->

					<div class="travel-select-icon">
						<select class="form-control " name="maker2">
							<option value="Cox's Bazar">Jaflong</option>
							<option value="Bisanakandi">Bisanakandi</option>
							<option value="Sundarbans">Sundarbans</option>
						   <option value="Chittagong">Chittagong</option>
							<option value="Shahjalal Dargah">Shahjalal Dargah</option>
						<option value="Dhaka">Dhaka</option>
							
						</select><!-- /.select-->
					</div><!-- /.travel-select-icon -->

				</div><!--/.single-tab-select-box-->
			</div><!--/.col-->

			<div class="col-lg-2 col-md-3 col-sm-4">
				<div class="single-tab-select-box">
					<h2>Date</h2>
					<div class="travel-check-icon">
						
							<input type="text" name="maker3" class="form-control" data-toggle="datepicker" placeholder="12 -01 - 2017 ">
					
					</div><!-- /.travel-check-icon -->
				</div><!--/.single-tab-select-box-->
			</div><!--/.col-->

			

			

			<div class="col-lg-2 col-md-1 col-sm-4">
				<div class="single-tab-select-box">
					<h2>members</h2>
					<div class="travel-select-icon">
						<select class="form-control " name="maker4" >

							  <option value="default">1</option><!-- /.option-->

							  <option value="2">2</option><!-- /.option-->

							  <option value="4">4</option><!-- /.option-->
							  <option value="8">8</option><!-- /.option-->

						</select><!-- /.select-->
					</div><!-- /.travel-select-icon -->
				</div><!--/.single-tab-select-box-->
			</div><!--/.col-->
			<div class="col-lg-3 col-md-3 col-sm-4">
				<div class="single-tab-select-box">

					<h2>class</h2>
					<div class="travel-select-icon">
						<select class="form-control " name="maker5">

							  <option value="default">enter class</option><!-- /.option-->
							  
							  <option value="first class">First Class</option><!-- /.option-->
							  <option value="normal">Normal</option><!-- /.option-->

							  <option value="second class">Second Class</option><!-- /.option-->
							   
						</select><!-- /.select-->
					</div><!-- /.travel-select-icon -->
				</div><!--/.single-tab-select-box-->
			</div><!--/.col-->

		</div><!--/.row-->

		<div class="row">
			<div class="col-sm-5"></div><!--/.col-->
			<div class="clo-sm-7">
				<div class="about-btn travel-mrt-0 pull-right">
					<button  class="about-view travel-btn" name="train">
						search	
					</button><!--/.travel-btn-->
				</form>
				</div><!--/.about-btn-->
			</div><!--/.col-->

		</div><!--/.row-->

	</div><!--/.tab-para-->

</div><!--/.tabpannel-->

									<div role="tabpanel" class="tab-pane fade in" id="flights">
										<div class="tab-para">
											<div class="trip-circle">
												<!-- <div class="single-trip-circle">
													<input type="radio" id="radio01" name="radio" />
  													<label for="radio01">
  														<span class="round-boarder">
  															<span class="round-boarder1"></span>
  														</span>round trip
  													</label>
												</div>
												<div class="single-trip-circle">
													<input type="radio" id="radio02" name="radio" />
  													<label for="radio02">
  														<span class="round-boarder">
  															<span class="round-boarder1"></span>
  														</span>on way
  													</label>
												</div>
											</div> -->
											<form action="flight.php" method="post" name="flight">
											<div class="row">
												<div class="col-lg-4 col-md-4 col-sm-12">
													<div class="single-tab-select-box">
														<h2>from</h2>

														<div class="travel-select-icon">
															<select class="form-control " name="ma1">
															  	

															  	<option value="	Shah Amanat International Airport,Chittagong">	Shah Amanat International Airport,Chittagong</option><!-- /.option-->

															  	<option value="Hazrat Shahjalal Int">Hazrat Shahjalal International Airport, Dhaka</option><!-- /.option-->
															  	<option value="Osmani International">Osmani International Airport, Sylhet</option><!-- /.option-->
                                                                <option value="Cox's Bazar Airport,Cox's Bazar">Cox's Bazar Airport,Cox's Bazar</option>
																<option value="Jessore Airport,Jessore">	Jessore Airport,Jessore</option>
																<option value="Barisal Airport,Barisal">	Barisal Airport,Barisal</option>
																<option value="Shah Mokhdum Airport,Rajshahi">	Shah Mokhdum Airport,Rajshahi</option>
																<option value="Saidpur Airport,Saidpur">	Saidpur Airport,Saidpur</option>
																<option value="Shah Amanat International Airpor,Chittagong">Shah Amanat International Airpor,Chittagong</option>
																
															</select><!-- /.select-->
														</div><!-- /.travel-select-icon -->
													</div><!--/.single-tab-select-box-->
												</div><!--/.col-->

												<div class="col-lg-2 col-md-3 col-sm-4">
													<div class="single-tab-select-box">
														<h2>Date</h2>
														<div class="travel-check-icon" >
														
																<input type="text" name="ma3" class="form-control" data-toggle="datepicker"
																placeholder="12 -01 - 2017 ">
														
														</div><!-- /.travel-check-icon -->
													</div><!--/.single-tab-select-box-->
												</div><!--/.col-->

												

												<div class="col-lg-2 col-md-1 col-sm-4">
													<div class="single-tab-select-box">
														<h2>members</h2>
														<div class="travel-select-icon">
															<select class="form-control "name="ma4">
																<option value="">1</option>
																<option value="">2</option>
																<option value="">3</option>
																<option value="">4</option>
																<option value="default">5</option><!-- /.option-->
																

 
															  	<option value="10">10</option><!-- /.option-->

															  	<option value="15">15</option><!-- /.option-->
															  	<option value="20">20</option><!-- /.option-->

															</select><!-- /.select-->
														</div><!-- /.travel-select-icon -->
													</div><!--/.single-tab-select-box-->
												</div><!--/.col-->

												<div class="col-lg-2 col-md-1 col-sm-4">
													<div class="single-tab-select-box">
														<!-- <h2>childs</h2> -->
														<!-- <div class="travel-select-icon"> -->
															<!-- <select class="form-control ">

															  	<option value="default">1</option>

															  	<option value="2">2</option>

															  	<option value="4">4</option>
															  	<option value="8">8</option>

															</select> -->
														</div><!-- /.travel-select-icon -->
													</div><!--/.single-tab-select-box-->
												</div><!--/.col-->

											</div><!--/.row-->

											<div class="row">
												<div class="col-lg-4 col-md-4 col-sm-12">
													<div class="single-tab-select-box">

														<h2>to</h2>

														<div class="travel-select-icon">
														<select class="form-control " name="ma2">
															  	

															  	<option value="	Shah Amanat International Airport,Chittagong">	Shah Amanat International Airport,Chittagong</option><!-- /.option-->

															  	<option value="Hazrat Shahjalal Int">Hazrat Shahjalal International Airport, Dhaka</option><!-- /.option-->
															  	<option value="Osmani International">Osmani International Airport, Sylhet</option><!-- /.option-->
                                                                <option value="Cox's Bazar Airport,Cox's Bazar">Cox's Bazar Airport,Cox's Bazar</option>
																<option value="Jessore Airport,Jessore">	Jessore Airport,Jessore</option>
																<option value="Barisal Airport,Barisal">	Barisal Airport,Barisal</option>
																<option value="Shah Mokhdum Airport,Rajshahi">	Shah Mokhdum Airport,Rajshahi</option>
																<option value="Saidpur Airport,Saidpur">	Saidpur Airport,Saidpur</option>
																<option value="Shah Amanat International Airpor,Chittagong">Shah Amanat International Airpor,Chittagong</option>
																
															</select><!-- /.select-->
														</div><!-- /.travel-select-icon -->

													</div><!--/.single-tab-select-box-->
												</div><!--/.col-->
												<div class="col-lg-3 col-md-3 col-sm-4">
													<div class="single-tab-select-box">

														<h2>class</h2>
														<div class="travel-select-icon">
															<select class="form-control "name="ma5">

															  	<option value="default">enter class</option><!-- /.option-->
															  	<option value="normal">Normal</option><!-- /.option-->

															  	<option value="first class">First Class</option><!-- /.option-->

															  	<option value="second class">Second Class</option><!-- /.option-->
                                                                   
															</select><!-- /.select-->
														</div><!-- /.travel-select-icon -->
													</div><!--/.single-tab-select-box-->
												</div><!--/.col-->
												<div class="clo-sm-5">
													<div class="about-btn pull-right" >
														<button  class="about-view travel-btn">
														search
														</button><!--/.travel-btn-->
													</div><!--/.about-btn-->
												</div><!--/.col-->
												
											</div><!--/.row-->
</form>
										</div>

									</div><!--/.tabpannel-->

								</div><!--/.tab content-->
							</div><!--/.desc-tabs-->
        				</div><!--/.single-travel-box-->
        			</div><!--/.col-->
        		</div><!--/.row-->
        	</div><!--/.container-->

        </section><!--/.travel-box-->
		<!--travel-box end-->

        <!--service start-->
		<section id="service" class="service">
			<div class="container">

				<div class="service-counter text-center">

					</section><!--/.service-->
		<!--service end-->
		
		<!--galley start-->
		<section id="gallery" class="gallery">
			<div class="container">
				<div class="gallery-details">
					<div class="gallary-header text-center">
						<h2>
							top destination
						</h2>
						
					</div><!--/.gallery-header-->
					<div class="gallery-box">
						<div class="gallery-content">
						  	<div class="filtr-container">
						  		<div class="row">

						  			<div class="col-md-6">
						  				<div class="filtr-item">
											<img src="assets/images/gallary/1.png" alt="portfolio image"/>
											<div class="item-title">
												<a href="#">
													cox's bazar
												</a>
												<p><span>10 places</span></p>
											</div><!-- /.item-title -->
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->

						  			<div class="col-md-6">
						  				<div class="filtr-item">
											<img src="assets/images/gallary/2.jpg" alt="portfolio image"/>
											<div class="item-title">
												<a href="#">
												bandarban
												</a>
												<p><span>15 places</span></p>
											</div> <!-- /.item-title-->
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->

						  			<div class="col-md-4">
						  				<div class="filtr-item">
											<img src="assets/images/gallary/3.jpg" alt="portfolio image"/>
											<div class="item-title">
												<a href="#">
												jaflong
												</a>
												<p><span>5 places</span></p>
											</div><!-- /.item-title -->
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->

						  			<div class="col-md-4">
						  				<div class="filtr-item">
											<img src="assets/images/gallary/4.jpg" alt="portfolio image"/>
											<div class="item-title">
												<a href="#">
												sundarban
												</a>
												<p><span>10 places</span></p>
											</div> <!-- /.item-title-->
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->

						  			<div class="col-md-4">
						  				<div class="filtr-item">
											<img src="assets/images/gallary/5.jpg" alt="portfolio image"/>
											<div class="item-title">
												<a href="#">
												Srimagal
												</a>
												<p><span>8 places</span></p>
											</div> <!-- /.item-title-->
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->

						  			<div class="col-md-8">
						  				<div class="filtr-item">
											<img src="assets/images/gallary/6.jpg" alt="portfolio image"/>
											<div class="item-title">
												<a href="#">
												Rangamati
												</a>
												<p><span>6 places</span></p>
											</div> <!-- /.item-title-->
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->

						  		</div><!-- /.row -->

						  	</div><!-- /.filtr-container-->
						</div><!-- /.gallery-content -->
					</div><!--/.galley-box-->
				</div><!--/.gallery-details-->
			</div><!--/.container-->

		</section><!--/.gallery-->
		<!--gallery end-->
		<?php
include_once "blog_sea.php";
include_once "blog_river.php";

include_once "blog_hill.php";
include_once "blog_historical.php";
include_once "blog_others.php";
?>
<!--subscribe start-->

		<section id="subs" class="subscribe">
			
			<div class="container">
				
				<div class="subscribe-title text-center">
					
					<h2>
						To Join our Website to Get Regular Update
					</h2>
					<p>
						 We will send you Best offer for your Trip 
					</p>
				</div>
				
				<form>
					<div class="row">
						
						<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
							
							<div class="custom-input-group">
								
								<input type="email" class="form-control" placeholder="Enter your Email Here">
								<button class="appsLand-btn subscribe-btn">Login/signup</button>
								<div class="clearfix"></div>
								<i class="fa fa-envelope"></i>
							</div>

						</div>
					</div>
				</form>
			</div>

		</section>
		<!--subscribe end-->

		<!-- footer-copyright start -->
		<footer  class="footer-copyright">
			<div class="container">
				<div class="footer-content">
					<div class="row">

						<div class="col-sm-3">
							<div class="single-footer-item">
								<div   class="footer-logo">
									<a href="index.html">
										Book <span> Your ShareTrip</span>
									</a>
									
								</div>
							</div><!--/.single-footer-item-->
						</div><!--/.col-->

						<div class="col-sm-3">
							<div class="single-footer-item">
								<h2>link</h2>
								<div class="single-footer-txt">
									<p><a href="#">home</a></p>
									<p><a href="admin_login.php">admin</a></p>
									<p><a href="#">packages & offers</a></p>
									<p><a href="guid_login.php"> guid</a></p>
									<p><a href="#">blog</a></p>
									<p><a href="#">contacts</a></p>
								</div><!--/.single-footer-txt-->
							</div><!--/.single-footer-item-->

						</div><!--/.col-->

						<div class="col-sm-3">
							<div class="single-footer-item">
								<h2>popular destination</h2>
								<div class="single-footer-txt">
									<p><a href="#gallery">cox's bazar</a></p>
									<p><a href="#gallery">bandarban</a></p>
									<p><a href="#gallery">jaflong</a></p>
									<p><a href="#gallery">sundarban</a></p>
									<p><a href="#gallery">srimagal</a></p>
									<p><a href="#gallery">Rangamati</a></p>
								</div><!--/.single-footer-txt-->
							</div><!--/.single-footer-item-->
						</div><!--/.col-->

						<div class="col-sm-3">
							<div class="single-footer-item text-center">
								<h2 class="text-left">contacts</h2>
								<div class="single-footer-txt text-left">
									<p>01764898426</p>
									<p class="foot-email"><a href="#">sharetrip@gmail.com</a></p>
									
									<p>Dhaka, Bangladesh</p>
								</div><!--/.single-footer-txt-->
							</div><!--/.single-footer-item-->
						</div><!--/.col-->

					</div><!--/.row-->

				
				



		<script src="assets/js/jquery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->

		<!--modernizr.min.js-->
		<script  src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>


		<!--bootstrap.min.js-->
		<script  src="assets/js/bootstrap.min.js"></script>

		<!-- bootsnav js -->
		<script src="assets/js/bootsnav.js"></script>

		<!-- jquery.filterizr.min.js -->
		<script src="assets/js/jquery.filterizr.min.js"></script>

		<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

		<!--jquery-ui.min.js-->
        <script src="assets/js/jquery-ui.min.js"></script>

        <!-- counter js -->
		<script src="assets/js/jquery.counterup.min.js"></script>
		<script src="assets/js/waypoints.min.js"></script>

		<!--owl.carousel.js-->
        <script  src="assets/js/owl.carousel.min.js"></script>

        <!-- jquery.sticky.js -->
		<script src="assets/js/jquery.sticky.js"></script>

        <!--datepicker.js-->
        <script  src="assets/js/datepicker.js"></script>

		<!--Custom JS-->
		<script src="assets/js/custom.js"></script>


	</body>

</html>