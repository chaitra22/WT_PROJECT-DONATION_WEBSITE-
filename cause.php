<!DOCTYPE html>
<html lang="zxx">
<head>
	<meta charset="utf-8">
	<title>EVENT SINGLE</title>
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
								<li><a href="cause.php">Causes</a></li>
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
							<img src="assets/img/cause.jpg"  width="1920 px" height="450 px" alt="image">
						</div>
						<div class="page-head-title text-uppercase">
							<h2>causes</h2>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End of  page head section  
	============================================= -->

	<!-- Start of Causes page content 
	============================================= -->
	<section id="causes-page-content" class="causes-page-section">
		<div class="container">
			<div class="row section-content">
				<div class="causes-page-item">
					<div class="causes-page-left-item">
						<div class="causes-item">
							<div class="row">
							<?php
							include 'conn.php';
							$q="SELECT * FROM `donation_to` ";
							//$q1="SELECT * FROM `donation` GROUP BY `donation_to`";
							$q1="SELECT donation_to,  SUM(amount) FROM donation  GROUP BY donation_to";
							$query=mysqli_query($con,$q);
							$query1=mysqli_query($con,$q1);
							$rowcount=mysqli_num_rows($query);
							?>
							<?php
							
							for($i=1;$i<=$rowcount;$i++){
								$res=mysqli_fetch_array($query);
								$res1=mysqli_fetch_array($query1);
								
							?>
								<div class="col-sm-4">
									<div class="recent-causes-pic-text causes colmd4">
										<div class="recent-causes-pic">
											<img src="assets/img/cause-1.jpg" alt="image">
										</div>
										<!-- /img -->
										<div class="cause-text pt75 pb50">
											<div class="donate-piechart">
												<div class="second circle"><canvas width="100" height="100"></canvas><canvas width="80" height="80"></canvas>
													<strong><i>%</i></strong>
												</div>
											</div>
											<div class="gola-reach">
												<ul class="gola-reach-list">
													<li class="black">Raised: RS<span class="red"><?php echo $res1['SUM(amount)'];?></span></li>
													<li class="black">Goal: RS<span class="red"><?php echo $res['goal_amount'];?></span></li>
												</ul>
											</div>
											<div class="cause-text-head pt15 pb20 p10">
											<h3><a href="#">Donation to :<?php echo $res['name'];?></a> </h3>
												<h3><a href="#"><?php echo $res['description'];?></a> </h3>
											</div>
											<div class="donate-now-btn">
												<div class="donate-btn margin0 text-uppercase">
													<a href="donation.php">donate now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /col-sm-4 -->
							<?php } ?>	

								
							</div>
						</div>
						<!-- /product-shop-item -->
					</div>
					<!-- /shop-page-left-item -->
				</div>
				<!-- /shop-page-item -->
				<div class="blog-pagination text-center">
					<ul class="pagination">
						<li><a href="#"><span class="ti-angle-double-left"></span></a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#"><span class="ti-angle-double-right"></span></a></li>
					</ul>
				</div>
			</div>
			<!-- /section-conetent -->
		</div>
		<!-- /container -->
	</section>

	<!-- End of cause page content 
	============================================= -->

	<!-- Start of become a volentaree
	============================================= -->
	<section id="become-a-volentaree" class="become-a-volentaree-section">
		<div class="overlay">
			<div class="container">
				<div class="row section-content text-center">
					<div class="become-head pb20">
						<h2 class="mb20">Want to become a Volentaree?</h2>
						<p>Join With us</p>
					</div>
					<div class="donate-btn margin0 text-uppercase">
						<a href="#">join now</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End of become a volentaree
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
											<li><span class="pull-left icon ti-comments-smiley"></span><span class="info-details text-uppercase">call us</span><p>800 723 1646</p></li>
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
										<p>We Work to make a better tomorrow for others.</p>
									</div>
									<div class="footer-text">
										<p>There is nothing more beautiful than someone who goes out of their way to make life beautiful for others.</p>
									</div>
								</div>
								<!-- /col-sm-3 -->

								
								<!-- /col-sm-3 -->

								<div class="col-sm-3">
									<div class="footer-head-title text-uppercase pb35">
										<h2 class="widgettitle">GET IN TOUCH</h2>
									</div>
									<!-- /title -->
									<div class="touch-content ">
										<div class="tweet-text">
											<span class="name-tweet">Address: </span>
											<span class="tweet-content">Nilkanth, Nashik </span> 
										</div>
										<div class="tweet-text mt5">
											<span class="name-tweet">E-mail: </span>
											<span class="tweet-content">tejasksagar@gmail.com</span> 
										</div>
										<div class="tweet-text mt5">
											<span class="name-tweet">Phone: </span>
											<span class="tweet-content">8007231646</span> 
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
											<li><a><img src="assets/img/g-1.png" alt="image"></a></li>
											<li><a><img src="assets/img/g-2.png" alt="image"></a></li>
											<li><a ><img src="assets/img/g-3.png" alt="image"></a></li>
											<li><a ><img src="assets/img/g-4.png" alt="image"></a></li>
											<li><a ><img src="assets/img/g-5.png" alt="image"></a></li>
											<li><a ><img src="assets/img/g-6.png" alt="image"></a></li>
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
								<p>© 2020 <span class="red"><a>@tejasksagar</a> </span>All right reserved. </p>
							</div>
							<div class="footer-menu-list pull-right mt25">
								<ul class="menu-list">
									<li><a href="index.php">Home</a><span>/</span></li>
									<li><a href="event.php">Event</a><span>/</span></li>
									<li><a href="couse.php">Cause</a><span>/</span></li>
									<li><a href="contact.php">Support</a><span></span></li>
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
	<script type="text/javascript" src="assets/js/function.js"></script>s
</body> 
</html>