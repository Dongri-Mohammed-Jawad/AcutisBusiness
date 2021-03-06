<html>
<head>
	<?php include("head.php"); ?>
</head>
<body>
<?php include("Landing-header.php"); ?>
<div class="device-hide"><?php include("social-links.php"); ?></div>
<div class="banner-section ">
	<img src="content/landing_page_main_image.jpg" alt="cheap drug test" />
	<div class="banner-caption caption-adjust">
		<h1 class="oneless">One less thing <br><span class="text-light-green">to worry about</span></h1>
		<p class="banner-description font-18 description-adjust">
		<b>Acutis Diagnostics</b> is a company with an original approach to laboratory medicine.<br>
		Beyond our expertise in clinical toxicology, our innovative technology and procedures provide the medical and social services communities with the critical information they require to perform at their best.
		</p>
	</div>
</div><!-- Well, this is the end of the Banner of the Project Ver2.0 -->

<div class="dez-col-100 text-dark-green no-shadow">
<br><br>
	<h1 class="special-text no-border text-center device-center">Our New Website Is Under Development.</h1>
	<center><img src="content/landing_page_icon_time.jpg" class="project-image-vvsmall" /></center><br>
	<div class="dez-col-80 padding-left-10 no-shadow">
		<center><p class="">
		We are working hard to put a highly functional, user-friendly website up by the end of April. During the next few weeks, you can continue to access <span class="special-text">i-Acutis</span>, as well as <span class="special-text">Pay Your Bills</span> and <span class="special-text">Contact a Toxicologist</span>, by using this site.<br>We thank you for your patience.
		</p></center>
	</div>
<br><br>	
</div><!-- This is the end of the first Image with its content only. -->


<div class="dez-col-100 no-shadow text-dark-green">
	<h1 class=" padding-left-10 device-center mobile-font-5" ><b>Click, act</b><span class="text-light-green"> & go</span></h1>
</div><!-- This is the end of the Acutis Diagnostics Image and Dotted LIne and click act and go Only. -->

<div class="dez-col-90 padding-left-5 padding-right-5 text-dark-green no-shadow">
	<div class="dez-col-30 padding-left-3 columns no-shadow">
		<center>
			<img src="content/about_icon_paragraph_2.jpg" alt="Sample collection" class="project-image-small" />
			<h2 class="mobile-center width-full mobile-font-5"><span class="text-light-green">i-</span><span class="font-bold">Acutis</span></h2>
			<a href="https://acutis.labnexus.net"><img src="content/homepage_bt_sign_in.jpg" alt="Requisition Billing fulfillment" class="project-image-small" /></a>
		</center>
	
	</div>
	<div class="dez-col-30 padding-left-3 columns no-shadow">
		<center>
			<img src="content/homepage_icon_make_a_payment.jpg" alt="Reordering supplies" class="project-image-small" />
			<h2 class=" mobile-center width-full mobile-font-5"><span class="text-light-green">Make </span><span class="font-bold">a Payment</span></h2>
			<div class="dez-col-50 no-shadow">
				<center>
					<img src="content/about_arrow.jpg" class="mobile-width-auto" /><br>
					<p class="text-center font-15 mobile-font-5">Patient</p>
					<a href="https://secure.cardknox.com/acutisdiagnostics-patient"><img src="content/homepage_bt_pay_here.jpg" class="project-image-large" /></a>
				</center>
			</div>
			<div class="dez-col-50 no-shadow">
				<center>
					<img src="content/about_arrow.jpg"  class="mobile-width-auto" />
					<p class="text-center font-15 mobile-font-5">Physician or Practice</p>
					<a href="https://secure.cardknox.com/acutisdiagnostics-practice"><img src="content/homepage_bt_pay_here.jpg" class="project-image-large" /></a>
				</center>
			</div>
		</center>
	
	</div>
	<div class="dez-col-30 padding-left-3 columns no-shadow">
		<center>
			<img src="content/homepage_icon_order_supplies.jpg" alt="Client tool training" class="project-image-small" />
			<h2 class=" mobile-center width-full mobile-font-5"><span class="text-light-green">Order </span><span class="font-bold">Supplies</span></h2>
			<a href="Order-Supply.php"><img src="content/homepage_bt_pay_order.jpg" alt="lab reports" class="project-image-small" /></a>
		</center>
	
	</div>
</div><!-- This is the end of the three columns -->

<div class="dez-col-100 background-soap-color no-shadow contact-section">
	<center class="padding-3">
		<h2 class="special-text no-border mobile-font-4">Connect With Us</h2>
		<p><img src="content/down-arrow.png" alt="relevant reports" class="width-10" /></p>
		<p class="text-dark-green">Sign Up to receive updates and to get involved.</p>
		<form name="joinform" method="post" action="JoinUsSend.php"  >
				<input class="index-contact"  type="" name="FirstName" id="FirstName"   required placeholder="First Name*" ><input class="index-contact" type=""   name="LastName"   id="LastName" required placeholder="Last Name" /><input class="index-contact"  type="email"    name="Email"        id="Email"  required placeholder="Email*" />
			<br><br>
			<input type="submit" name="join" value="Join Us" class="join-btn"  onclick="validation()"/>
		</form>
	 </center>
</div>
<!-- This is the end of the Connect with us Section. -->
<script>
function validation()
{
var a=document.joinform.FirstName.value;
if(a=="")
{
alert("Enter FirstName");
document.joinform.FirstName.focus();
return false;
}
var b=document.joinform.LastName.value;
if(b=="")
{
alert("Enter LastName");
document.joinform.LastName.focus();
return false;
}
var c=document.joinform.Email.value;
if(c=="")
{
alert("Enter valid Email");
document.joinform.Email.focus();
return false;
}
}
</script>
<?php include("Bottom_Js.php"); ?>

</body>
</html>