<!DOCTYPE html>
<html lang="zxx">
<head>
	<meta charset="utf-8">
	<title>MAKE DONATION</title>
	<link rel="shortcut icon" href="assets/img/icon.png">
	<meta name="description" content="FundMe - is a Premium HTML Responsive Templeate by HTMLmate Team. You can use this for anykind of Nonprofit website">
	<meta name="keywords" content="Premium HTML Template">
	<meta name="author" content="HTMLmate">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/themify-icons.css">
	<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="assets/css/video.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="rev-slider/css/settings.css">
	<link rel="stylesheet" type="text/css" href="rev-slider/css/layers.css">
	<link rel="stylesheet" type="text/css" href="rev-slider/css/navigation.css">
	<link rel="stylesheet" type="text/css" href="assets/css/menu.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
</head>
<body>
	<div id="preloader"></div>
	<header>
		<div class="header-top-bg">
			<div class="container">
				<div class="row">
					<div class="header-top">
						<div class="head-top-info pull-left">
							<ul class="top-info">
								<li><img src="assets/img/call.png" alt="image">8007231646</li>
								<li><img src="assets/img/inbox.png" alt="image">tejasksagar@gmail.com</li>
							</ul>
						</div>
						<div class="header-social pull-right">
							<div class="social">
								<ul class="social-list">
									<li><a href="https://www.facebook.com/login/"><span class="ti-facebook"></span></a></li>
									<li><a href="https://twitter.com/login?lang=en"><span class="ti-twitter"></span></a></li>
									<li><a href="https://accounts.google.com/signin/v2/identifier?flowName=GlifWebSignIn&flowEntry=ServiceLogin"><span class="ti-google"></span></a></li>
									<li><a href="https://instagram.com/tejas1756?igshid=1xol0191yrtsc"><span class="ti-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="menu-bar">
			<div class="container">
				<div class="row">
					<nav class="navbar">
						<div class="navbar-header">
							<a class="navbar-brand" href="home-1.php"><img src="assets/img/logo.png" alt="image"></a>
						</div>
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="index.php">Home</a></li>
								<li><a href="cause.php">Causes</a>
									<ul class="menu-dropdown">
										<li><a href="cause.php">Causes</a></li>
										<li><a href="cause-single.php">Causes Details</a></li>
									</ul>
								</li>
								<li><a href="event.php">Events</a>
									<ul class="menu-dropdown">
										<li><a href="event.php">Events</a></li>
										<li><a href="event-single.php">Events Details</a></li>
									</ul>
								</li>
								
								<li><a href="#">Pages</a>
									<ul class="menu-dropdown">
										<li><a href="contact.php">Contact</a></li>
										<li><a href="404.php">404</a></li>
										<li><a href="about-us.php">About-us</a></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="home-donate donate-btn-1 text-uppercase">
							<a href="donation.php">donate now</a>
						</div>
						
					</nav>
					<div class="wrap">
						<div id="main-menu">
							<div class="menu-btn">
								<div class="menu-btn-line menu-btn-line-1"></div>
								<div class="menu-btn-line menu-btn-line-2"></div>
								<div class="menu-btn-line menu-btn-line-3"></div>
							</div>
							<div class="moduletable_menu">

								<ul class="nav menu">
									<li><a href="home-1.php">Home</a></li>
									<li><a href="about-us.php">About</a></li>
									<li><a href="cause.php">Cause</a></li>
									<li><a href="cause-single.php">Cause Details</a></li>
									<li><a href="event.php">Event</a></li>
									<li><a href="event-single.php">Event Single</a></li>
									<li><a href="404.php">404</a></li>
									<li><a href="contact.php">Contacts</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<section id="page-head" class="page-head-section">
		<div class="page-head-overlay">
			<div class="container">
				<div class="row">
					<div class="page-head-content">
						<div class="page-head-style">
							<img src="assets/img/page-head-style.png" alt="image">
						</div>
						<div class="page-head-title text-uppercase">
							<h2>donation</h2>
						</div>
						<div class="page-breadcrumb">
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="home-1.php"><span class="mr5 ti-home"></span>Home</a></li>
								<li class="breadcrumb-item active">Donate</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End of  page head section  
	============================================= -->


	<!-- Start of Donate page content
	============================================= -->
	<section id="donate-page" class="donate-page-section">
		<div class="container">
			<div class="row section-content">
				<div class="donation-content">
					<div class="row">
						<div class="col-sm-8">
							<div class="donate-type pb50">
								<div class="row">
									<div class="col-sm-6">
										<div class="donate-info">
											<div class="side-bar-title mb20">
												<h3>Donation Info</h3>
											</div>
											<!-- /head -->
												<div class="donate-cause">
													<div class="donate-text">
														<span>We are collecting donations </span>
													</div>
													<p>You are Donating to</p>
													<?php
													include 'conn.php';
													$q="SELECT * FROM `donation_to` ";
													
													$query=mysqli_query($con,$q);
													$rowcount=mysqli_num_rows($query);
													?>
										<div class="donate-cause-item">
										<form action="pay.php" method="post">			
													<select name="donate_to">
													<?php
													for($i=1;$i<=$rowcount;$i++){
														$res=mysqli_fetch_array($query);
													?>
															<option value="<?php echo $res['name'];?>" selected=""><?php echo $res['name'];?></option>
															<?php } ?>		
														</select>
													</div>
													
													<!-- / donate-cause-item-->
												</div>
										</div>
										<!-- /info -->
									
										<br>
										<div class="card">
											<br>
											<label> Donar Name </label>
											<input type="text" name="donar_name" class="form-control"> 
											<br>
											<label> Donar Email </label>
											<input type="email" name="donar_email" class="form-control"> 
											<br>
											<br>
											<label> Donar Mobile </label>
											<input type="text" name="donar_mobile" class="form-control"> 
											<br>
											<br>
											<label> AMOUNT YOU WANT TO DONATE</label>
											<input type="text" name="donate_amount" class="form-control"> 
											<br>
											<button class="btn btn-success" type="submit" name="done" > Submit </button>
											<br>
									</form>		
									</div>
								</div>	
						
							</div>			
						</div><!-- /col-md-4 -->
					</div>
					<!-- /row -->
				</div>
			</div>
		</div>
	</section>
	<!-- End of  Dontae page content
	============================================= -->



	<!-- Start of partner section
	============================================= -->
	<section id="partner" class="partner-section">
		<div class="container">
			<div class="row">
				<div class="partner-section-slider">
					<div class="partner-pic">
						<a href=""><img src="assets/img/partner-1.png" alt="image"></a>
					</div>
					<div class="partner-pic">
						<a href=""><img src="assets/img/partner-2.png" alt="image"></a>
					</div>
					<div class="partner-pic">
						<a href=""><img src="assets/img/partner-3.png" alt="image"></a>
					</div>
					<div class="partner-pic">
						<a href=""><img src="assets/img/partner-4.png" alt="image"></a>
					</div>
					<div class="partner-pic">
						<a href=""><img src="assets/img/partner-2.png" alt="image"></a>
					</div>
					<div class="partner-pic">
						<a href=""><img src="assets/img/partner-3.png" alt="image"></a>
					</div>
					<div class="partner-pic">
						<a href=""><img src="assets/img/partner-4.png" alt="image"></a>
					</div>
					<div class="partner-pic">
						<a href=""><img src="assets/img/partner-2.png" alt="image"></a>
					</div>
					<div class="partner-pic">
						<a href=""><img src="assets/img/partner-4.png" alt="image"></a>
					</div>
					<div class="partner-pic">
						<a href=""><img src="assets/img/partner-1.png" alt="image"></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End of partner section
	============================================= -->

	<!-- Start of footer section
	============================================= -->
	<footer id="footer-section" class="footer-style">
		<div class="footer-overlay">
			<div class="footer-contact-content-1">
				<div class="container">
					<div class="row">
						<div class="footer-contact-content">
							<div class="row">
								<div class="col-sm-2 col-xs-5">
									<div class="footer-contact-info">
										<ul class="footer-contact-info-list">
											<li><span class="pull-left icon ti-comments-smiley"></span><span class="info-details text-uppercase">call us</span><p>560 265 1523</p></li>
										</ul>
									</div>
								</div>
								<div class="col-sm-3 col-xs-5">
									<div class="footer-contact-info">
										<ul class="footer-contact-info-list">
											<li><span class="pull-left icon ti-comments"></span><span class="info-details text-uppercase">PLEASE</span><p>GET CALL BACK</p></li>
										</ul>
									</div>
								</div>
								<div class="footer-social pull-right mt10">
									<div class="social">
										<ul class="social-list">
											<li><a href="#"><span class="ti-facebook"></span></a></li>
											<li><a href="#"><span class="ti-twitter"></span></a></li>
											<li><a href="#"><span class="ti-google"></span></a></li>
											<li><a href="#"><span class="ti-instagram"></span></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /footer-contact-1 -->

			<div class="footer-main-content">
				<div class="container">
					<div class="row">
						<div class="footer-main-content-area pt75">
							<div class="row">
								<div class="col-sm-3">
									<div class="footer-logo pb20">
										<a  href="home-1.php"><img src="assets/img/f-logo.png" alt="image"></a>
									</div>
									<div class="footer-text">
										<p>Lorem ipsum dolor sit ametlyeolo consectetur adipisicing elit sed dong eiusmod tempor incididunt ut labore et incididunt.  </p>
									</div>
									<div class="footer-text">
										<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco. </p>
									</div>
								</div>
								<!-- /col-sm-3 -->

								<div class="col-sm-3">
									<div class="footer-head-title text-uppercase pb35">
										<h2 class="widgettitle">RECENT TWEET</h2>
									</div>
									<!-- /title -->
									<div class="recent-tweet-list">
										<div class="tweet-icon pull-left mr20">
											<span class="red ti-twitter"></span>
										</div>
										<div class="tweet-text">
											<span class="name-tweet"><a class="" href="#">@tonmoymishal</a></span>
											<span class="tweet-content">Excepteur sint occ aecat cupidatat </span> 
											<span class="red tweet-link"><a href="#">goo.gl/GjFUTp</a></span>
											<span class="tweet-time">45 min ago</span>
										</div>
									</div>
									<!-- /list -->

									<div class="recent-tweet-list mt10">
										<div class="tweet-icon pull-left mr20">
											<span class="red ti-twitter"></span>
										</div>
										<div class="tweet-text">
											<span class="name-tweet"><a class="" href="#">@tonmoymishal</a></span>
											<span class="tweet-content">Excepteur sint occ aecat cupidatat </span> 
											<span class="red tweet-link"><a href="#">goo.gl/GjFUTp</a></span>
											<span class="tweet-time">45 min ago</span>
										</div>
									</div>
								</div>
								<!-- /col-sm-3 -->

								<div class="col-sm-3">
									<div class="footer-head-title text-uppercase pb35">
										<h2 class="widgettitle">GET IN TOUCH</h2>
									</div>
									<!-- /title -->
									<div class="touch-content">
										<div class="tweet-text">
											<span class="name-tweet">Address: </span>
											<span class="tweet-content">315 Chat mohon Bazar New Yor, NY 4536 </span> 
										</div>
										<div class="tweet-text mt5">
											<span class="name-tweet">E-mail: </span>
											<span class="tweet-content">support@yourdomain.com </span> 
										</div>
										<div class="tweet-text mt5">
											<span class="name-tweet">Phone: </span>
											<span class="tweet-content">560 265 1523</span> 
										</div>
										<div class="newsletter-form">
											<form action="#" method="get" class="nwsltter">
												<div class="form-group">
													<input type="email" name="email" placeholder="Your Email" class="form-control">
												</div>
											</form>
											<div class="submit-btn">
												<button type="submit" value="Submit"><img src="assets/img/inbox.png" alt="image"></button>
											</div>
										</div>
									</div>
								</div>
								<!-- /col-sm-3 -->

								<div class="col-sm-3">
									<div class="footer-head-title text-uppercase pb35">
										<h2 class="widgettitle">GALLERY</h2>
									</div>
									<div class="footer-gallery pb35">
										<ul class="footer-gallery">
											<li><a href="#"><img src="assets/img/g-1.png" alt="image"></a></li>
											<li><a href="#"><img src="assets/img/g-2.png" alt="image"></a></li>
											<li><a href="#"><img src="assets/img/g-3.png" alt="image"></a></li>
											<li><a href="#"><img src="assets/img/g-4.png" alt="image"></a></li>
											<li><a href="#"><img src="assets/img/g-5.png" alt="image"></a></li>
											<li><a href="#"><img src="assets/img/g-6.png" alt="image"></a></li>
										</ul>
									</div>
								</div>
								<!-- /col-sm-3 -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /footer-main-content -->
			<div class="footer-menu">
				<div class="container">
					<div class="row">
						<div class="footer-menu-content">
							<div class="copy-right pull-left">
								<p>© 2016 <span class="red"><a href="https://www.htmlmate.com/">HTMLmate</a> </span>All right reserved. </p>
							</div>
							<div class="footer-menu-list pull-right mt25">
								<ul class="menu-list">
									<li><a href="#">Home</a><span>/</span></li>
									<li><a href="#">Event</a><span>/</span></li>
									<li><a href="#">Cause</a><span>/</span></li>
									<li><a href="#">FAQ</a><span>/</span></li>
									<li><a href="#">Support</a><span></span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- End of footer section
	============================================= -->


	<!-- js -->
	<script type="text/javascript" src="assets/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="assets/js/waypoints.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.counterup.min.js"></script>
	<script type="text/javascript" src="assets/js/parallax.min.js"></script>
	<script type="text/javascript" src="assets/js/wow.min.js"></script>
	<script type="text/javascript">new WOW().init();</script>
	<script type="text/javascript" src="assets/js/circle-progress.js"></script>
	<!-- REVOLUTION JS FILES -->
	<script type="text/javascript" src="rev-slider/js/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="rev-slider/js/jquery.themepunch.revolution.min.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS (Load Extensions only on Local File Systems !
    The following part can be removed on Server for On Demand Loading) -->

    <script type="text/javascript" src="rev-slider/js/revolution.extension.actions.min.js"></script>
    
    <script type="text/javascript" src="rev-slider/js/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="rev-slider/js/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="rev-slider/js/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="rev-slider/js/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="rev-slider/js/revolution.extension.video.min.js"></script>
	<script type="text/javascript" src="assets/js/function.js"></script>
</body> 
</html>