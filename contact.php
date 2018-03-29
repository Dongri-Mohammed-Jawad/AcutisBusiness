
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Acutis:Contact</title>

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

	<?php include 'header.php' ;?>
	<div class="clear"></div>
	<div class="banner">
	<div class="inner-banner">
		<div class="note">Contact Us</div>
		<div class="site-map">
    	You are here:<a href="index.php">Home</a> &gt; Contact Us
		</div>
	<div class="clear"></div>
	</div>
	</div>
	
	<div id="map" class="map1"></div>
	<!--<div id="map" class="map1" data-maps-api-key="AIzaSyAgHV_KktIWSs0v8pmXyII2Y728LCDpgzw" data-address="380 North Broadway, Suite 408,Jericho, NY 11753, USA" data-marker-title="AZ International Tax – USA Office" data-map-style="[{&quot;featureType&quot;:&quot;landscape&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#FFBB00&quot;},{&quot;saturation&quot;:43.400000000000006},{&quot;lightness&quot;:37.599999999999994},{&quot;gamma&quot;:1}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#FFC200&quot;},{&quot;saturation&quot;:-61.8},{&quot;lightness&quot;:45.599999999999994},{&quot;gamma&quot;:1}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#FF0300&quot;},{&quot;saturation&quot;:-100},{&quot;lightness&quot;:51.19999999999999},{&quot;gamma&quot;:1}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#FF0300&quot;},{&quot;saturation&quot;:-100},{&quot;lightness&quot;:52},{&quot;gamma&quot;:1}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#0078FF&quot;},{&quot;saturation&quot;:-13.200000000000003},{&quot;lightness&quot;:2.4000000000000057},{&quot;gamma&quot;:1}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#00FF6A&quot;},{&quot;saturation&quot;:-1.0989010989011234},{&quot;lightness&quot;:11.200000000000017},{&quot;gamma&quot;:1}]}]" data-map-zoom="15"></div>
-->
	<!-- Container -->
	<div class="wrapper">
		<div class="contact-row dark">
			<div class="contact6 column4">
				<h4>Contact info</h4>
				<div class="border"></div>
				<p class="home">728 Lakefield Rd.<br>East Northport ,<br>New york, 11731.</p>
				<p class="phone2">1-844-522-8847</p>
				<p class="mail">service@acutisdaiagnostics.com</p>
			</div>


			<div class="msg-form column8">
				<h4>Send us a message</h4>
				<div class="border"></div>
				<form  id="contact-form" action="#">
					<input name="name" id="name" type="text" data-value="name">
					<input name="mail" id="mail" type="text" data-value="email">
					<input name="subject" id="subject" type="text" data-value="website">
					<textarea name="comment" id="comment" placeholder="Message"></textarea>
					<input type="submit" id="submit_contact" value="Submit">
	  				<div id="msg" class="message"></div>
				</form>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<!-- End Wrapper -->
<?php include 'footer.php' ; ?>
	

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script type="text/javascript" charset="utf-8">
  		$(window).load(function() {
  		  $('.flexslider').flexslider();
  		});
	</script>
	<script type="text/javascript" src="js/jquery.superfish.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="js/gmap3.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

</body>
</html>