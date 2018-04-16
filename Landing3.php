<html>
<head>
	<?php include("head.php"); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
<?php include("Landing-header.php"); ?>
<div class="banner-section ">
	<img src="content/landing_page_main_image.jpg" alt="cheap drug test" class="landing-img" />
	<div class="banner-caption caption-adjust">
	
		<h1 class="banner-description font-18 description-adjust landing-description padding-top-10" style="font-size:62pt; "><span style="font-family:Roboto Regular;">One less thing</span></b><p style="font-14pt;"><span style="font-size:62pt;color:#69b0ae ;font-family:Roboto Regular; "> <br>to worry about<span></p></h1>
		<p class="banner-description font-18 description-adjust landing-description" style="width:75%;font-size:15pt; font-family:Arial regular;line-height:32pt;color:#006c6e;letter-spacing:0.5px;">
		<b>Acutis Diagnostics</b> is a company with an original approach to laboratory medicine.
		Beyond our expertise in clinical toxicology, our innovative technology and<br> procedures provide the medical and social services communities <br> with the critical information they require to perform at their best.
		</p>
	</div>
</div><!-- Well, this is the end of the Banner of the Project Ver2.0 -->

<div class="dez-col-100 text-dark-green no-shadow">
<br><br>
	<h1 class="special-text no-border text-center device-center">Our new website is under development.</h1>
	<center><img src="content/landing_page_icon_time.jpg" class="project-image-vvsmall" /></center><br>
	<div class="dez-col-80 padding-left-10 no-shadow">
		<center><p class="working-hard">
		We are working hard to put a highly functional, user-friendly website up by the end of April.<br> During the next few weeks, you can continue to access <span class="special-text font-14pt">i-Acutis</span>, as well as <span class="special-text font-14pt">pay Your Bills</span><br> and <span class="special-text font-14pt">contact a toxicologist</span>, by using this site.<br>We thank you for your patience.
		</p></center>
	</div>
<br><br>	
</div><!-- This is the end of the first Image with its content only. -->


<div class="dez-col-100 no-shadow text-dark-green">
	<h1 class=" padding-left-10 device-center device-font-10 click-act" ><b>Click, act</b><span class="text-light-green"> & go</span></h1>
</div><!-- This is the end of the Acutis Diagnostics Image and Dotted LIne and click act and go Only. -->

<div class="dez-col-90 padding-left-5 padding-right-5 text-dark-green no-shadow padding-top-5">
	<div class="dez-col-30 padding-left-3 columns no-shadow">
		<center>
			<img src="content/about_icon_paragraph_2.jpg" alt="Sample collection" class="project-image-small"   />
			<h2 class="mobile-center width-full mobile-font-5"><span class="text-light-green">i-</span><span class="font-bold">Acutis</span></h2>
			<a href="https://acutis.labnexus.net"><img src="content/homepage_bt_sign_in.jpg" alt="Requisition Billing fulfillment" class="i-acutis-img mobile-width-20" /></a>
		</center>
	
	</div>
	<div class="dez-col-30 padding-left-3 columns no-shadow margin-top-minus-3">
		<center>
			<img src="content/homepage_icon_make_a_payment.jpg" alt="Reordering supplies" class="project-image-small" />
			<h2 class=" mobile-center width-full mobile-font-5 margin-top-minus-5"><span class="text-light-green">Make </span><span class="font-bold" >a payment</span></h2>
			<div class="dez-col-50 no-shadow">
				<center>
					<img src="content/about_arrow.jpg" class="mobile-width-auto" /><br>
					<p class="text-center font-15 mobile-font-5 margin-top-0">Patient</p>
					<a href="https://secure.cardknox.com/acutisdiagnostics-patient"><img src="content/homepage_bt_pay_here.jpg" class="project-image-large mobile-image-small margin-top-minus-12  mobile-width-20" /></a>
				</center>
			</div>
			<div class="dez-col-50 no-shadow">
				<center>
					<img src="content/about_arrow.jpg"  class="mobile-width-auto" />
					<p class="text-center font-15 mobile-font-5 margin-top-0">Physician or Practice</p>
					<a href="https://secure.cardknox.com/acutisdiagnostics-practice"><img src="content/homepage_bt_pay_here.jpg" class="project-image-large margin-top-minus-12  mobile-width-20" /></a>
				</center>
			</div>
		</center>
	
	</div>
	<div class="dez-col-30 padding-left-3 columns no-shadow margin-top-minus-onehalf">
		<center>
			<img src="content/homepage_icon_order_supplies.jpg" alt="Client tool training" class="project-image-small" />
			<h2 class=" mobile-center width-full mobile-font-5"><span class="text-light-green">Order </span><span class="font-bold">Supplies</span></h2>
			<a href="Order-Supply.php"><img src="content/homepage_bt_pay_order.jpg" alt="lab reports" style="" class="order-btn" /></a>
		</center>
	
	</div>
</div><!-- This is the end of the three columns -->

<div class="dez-col-100 background-soap-color no-shadow contact-section">
	<center class="padding-3">
		<h2 class="special-text no-border mobile-font-4 connect-us">Connect with us</h2>
		<p><img src="content/down-arrow.png" alt="relevant reports" class="connect-data-img mobile-width-auto" /></p>
		<p class="connect-data">Sign Up to receive news about Acutis Diagnostics</p>
		<form name="joinform" method="post" action="JoinUsSend.php"  >
				<input class="index-contact landing-contact"  type="" name="FirstName" id="FirstName"   required placeholder="First name*" > <input class="index-contact landing-contact" type=""   name="LastName"   id="LastName" required placeholder="Last name*" /> <input class="index-contact landing-contact"  type="email"    name="Email"        id="Email"  required placeholder="Email address" />
			<br><br>
			<input type="submit" name="join" value="Join Us" class="join-btn landing-join-btn"  onclick="validation()"/>
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