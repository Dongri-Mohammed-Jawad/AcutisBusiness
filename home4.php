<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>We Care</title>

<?php include("head.php"); ?>	
	

	<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->
	<!-- html5.js for IE less than 9 -->
	<!-- css3-mediaqueries.js for IE less than 9 -->
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!--[if lt IE 9]>
 	<link rel="stylesheet" type="text/css" href="css/ie8-and-down.css" />
	<![endif]-->
</head>
<body>

	<!-- Start Header -->
	<header>
		
		<div class="subheader clearfix">
			<div class="inner-subheader">
				<div class="phone">+38646 123 456</div>

				<div class="subheader2">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Login</a></li>
						<li><a href="#">e-Newsletter  </a></li>
						<li><a href="#">Blog</a></li>
					</ul>				
				</div>
			</div>
		</div>

		<div class="row2">
		<div class="upper-header">
			
			<div class="logo">
				<a href="#"><img src="images/logo.png" alt=""></a>
			</div>					
			
			<!-- Navigation -->
			<nav id="nav">
				<ul id="navlist" class="sf-menu clearfix">
					<li class="current"><a href="index.php">Home</a>
						<ul class="sub-menu">
							<li><a href="home-boxed.php">Home Boxed</a></li>
							<li><a href="home2.php">Home 2</a></li>
							<li><a href="home3.php">Home 3</a></li>
							<li><a href="home4.php">Home 4</a></li>
						</ul>
					</li>
					<li><a href="about.php"> About Us</a></li>
					<li><a href="#">Features</a>
						<ul class="sub-menu">
							<li><a href="404.php">404 Page</a></li>
							<li><a href="grid.php">Grid Positions</a></li>
							<li><a href="typography.php">Typography</a></li>
						</ul>
					</li>
					<li><a href="portfolio.php">Portfolio</a></li>
					<li><a href="blog.php">Blog</a></li>
					<li><a href="testimonials.php">Testimonials</a></li>
					<li><a href="contact.php">Contact Us</a></li>
				</ul>
			</nav>
        	<!-- Navigation -->
        	<div class="clear"></div>
       </div>  
       <!-- End Upper Header -->
       </div>
       <!-- End Row2 -->

	</header>
	<!-- End Header -->
	 <!-- Slider -->
	<div class="slider" >
		<div class="flexslider">
		  <ul class="slides">
		    <li>
		      <img src="images/slider-img.jpg" />
		    </li>
			<li>
			  <img src="images/slider-img.jpg" />
			</li>
		  </ul>
		</div>
	

	<!-- Book Apointment -->
	<div class="book-form">
		<div class="inner-form">

		<h4><img src="images/calendar.png" alt="">Book an Appointment</h4>
		<form id="contact" action="javascript:void(0)" method="post">
			<div class="inputs">
				<input type="text" value="Full Name" data-value="Full Name">
				<input type="text" value="E-mail Adress" data-value="E-mail Adress">
				<input type="text" value="Phone Number" data-value="Phone Number">
		        <input id="datepicker-example1" type="text" value="Choose Date">
	        </div>

			<input id="submit" type="submit" value="MAKE APPOINTMENT">
		</form>
		
		</div>
	</div>
	<!-- End Book Apointment -->
	</div>
	<!-- End SLider -->



	<!-- Container -->
	<div class="wrapper">
	
	<div class="row5 dark">
		<div class="row5-text column8">
			<h4>Text Widget</h4>
			<div class="border"></div>
			<img src="images/row5img.jpg" alt="">
			<p>This is <span>Photoshop's version</span>  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. </p>
			<p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit</p>
		</div>

		<div class="stats column4">
			<h4>Some Statistics</h4>
			<div class="border"></div>
			<p>Satisfied Clients:</p>
			<div class="number">6549</div>
			<p>Succesful Surgeries:</p>
			<div class="number">1329</div>
		</div>
		<div class="clear"></div>
	</div>

		<!-- Recent Works -->
		<div class="features2 dark">
			<div class="column3">
				<a href="#">
					<div class="service-item">
						<a href="#" class="service-img"><img src="images/resp.png" alt=""></a>
					</div>
					<h4>Fully Responsive</h4>
					<div class="border"></div>
					<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis </p>
				</a>
			</div>
			<div class="column3">
				<a href="#">
					<div class="service-item">
						<a href="#" class="service-img"><img src="images/support.png" alt=""></a>
					</div>
					<h4>Five Star Support</h4>
					<div class="border"></div>
					<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis </p>
				</a>
			</div>
			<div class="column3">
				<a href="#">
					<div class="service-item">
						<a href="#" class="service-img"><img src="images/admin.png" alt=""></a>
					</div>
					<h4>Powerful Admin</h4>
					<div class="border"></div>
					<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis </p>
				</a>
			</div>
			<div class="column3">
				<a href="#">
					<div class="service-item">
						<a href="#" class="service-img"><img src="images/notifier.png" alt=""></a>
					</div>
					<h4>Update Notifier</h4>
					<div class="border"></div>
					<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis </p>
				</a>
			</div>
			<div class="clear"></div>
		</div>
		<!-- End Recent Works -->
				
		
		<div class="l-more">
			<div class="l-banner">
				<p><strong>We Care</strong> has a wide range of health care options, from health treatments to surgery procedures</p>
				<a href="#">Learn More</a>
				<div class="clear"></div>
			</div>
		</div>

	</div>
	<!-- End Wrapper -->

	<!-- Footer -->
	<footer>
	<div class="inner-footer dark">

		<div class="about column3">
			<h4>About Us</h4>
			<ul>
				<li><a href="#">Who We Are</a></li>
				<li><a href="#">What We Do</a></li>
				<li><a href="#">What We Offer</a></li>
				<li><a href="#">Our Mission</a></li>
				<li><a href="#">Our Vission</a></li>
			</ul>
		</div>

		<div class="service column3">
			<h4>Services</h4>
			<ul>
				<li><a href="#">Teeth Whitening</a></li>
				<li><a href="#">Crowns Dental Bridges</a></li>
				<li><a href="#">Oral Exam and X-Rays</a></li>
				<li><a href="#">Gastroscopic Services</a></li>
			</ul>
		</div>

		<div class="text-widget column3">
			<h4>Text Widget</h4>
			<p>Duis sed odio sit amet nibh vulputate cursusa sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae </p>
		</div>

		<div class="contact column3">
			<h4>Contact us</h4>
			<p>wecare@domain.com</p>
			<p>+38649 123 456 789 00</p>
			<p>Lorem ipsum address street no 24 b41</p>
		</div>
		<div class="clear"></div>
		<!-- End Contact -->
		<div id="back-to-top">
			<a href="#top">Back to Top</a>
		</div>
	</div>
	<!-- End inner Footer -->

	<div class="end-footer">
		<div class="lastdiv">
			<div class="copyright">
				© 2013 We Care Design, All Rights Reserved
			</div>

			<div class="f-socials">
				<a href="#"><img src="images/feed.png" alt=""></a>
				<a href="#"><img src="images/tweet.png" alt=""></a>
				<a href="#"><img src="images/fcb.png" alt=""></a>
				<a href="#"><img src="images/gplus.png" alt=""></a>
				<a href="#"><img src="images/pin.png" alt=""></a>
			</div>
		<div class="clear"></div>
		</div>
	</div>
	</footer>


	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script type="text/javascript" charset="utf-8">
  		$(window).load(function() {
  		  $('.flexslider').flexslider();
  		});
	</script>
	<script type="text/javascript" src="js/jquery.superfish.js"></script>
	<script type="text/javascript" src="js/accordion.js"></script>
	<script src="js/jquery.bxslider.js"></script>
	<script>$(document).ready(function(){
	  $('.slider1').bxSlider({
	    slideWidth: 195,
	    minSlides: 2,
	    maxSlides: 6,
	    slideMargin: 0
	  });
	});</script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/zebra_datepicker.js"></script>
    <script type="text/javascript" src="js/core.js"></script>

</body>
</html>