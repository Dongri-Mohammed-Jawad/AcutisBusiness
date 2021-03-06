<html>
<head>
	<?php include("head.php"); ?>
</head>
<body>
<?php include("new-header.php"); ?>
<div class="device-hide"><?php include("social-links.php"); ?></div>
<div class="banner-section">
	<img src="content/homepage_main_image.jpg" alt="cheap drug test" />
	<div class="banner-caption">
		<h1 class="oneless roboto-regular">One less thing <br><span class="text-light-green roboto-light">to worry about</span></h1>
		<p class="banner-description arial-regular">
		<b>Acutis Diagnostics</b> is a company with an original approach to laboratory medicine.<br>
		Beyond our expertise in clinical toxicology, our innovative technology and procedures provide the medical and social services communities with the critical information they require to perform at their best.
		
		</p>
	</div>
</div><!-- Well, this is the end of the Banner of the Project Ver2.0 -->

<div class="dez-col-100 no-shadow">
	<div class="dez-col-30 padding-left-5 no-shadow">
		<center><img src="content/homepage_icon_paragraph_1.jpg" class="project-image-large float-right" /></center>
	</div>
	<div class="dez-col-60 no-shadow">
		<p class="text-light-black device-center padding-5 font-18 line-height-25 mobile-font-4">
			Acutis is a company with its eye on the &quot;evolving present,&quot; which is our term for the immediate future and the foreseeable long term. Our PhDs, senior scientists and certified medical technologists, utilize robotics, automation, and sophisticated algorithms to turn samples, even of the smallest quantities of specimens, into actionable data. More accurate data helps ensures the highest level of clinical judgement.<br><br>
			The result : <span class="special-text no-border">better decisions and so better outcomes.</span>
		</p>
	</div>
	
</div>

<div class="dez-col-100 text-dark-green no-shadow">
<br>
	<div class="dez-col-55 padding-left-10 no-shadow">
		<p class="device-center padding-6 text-light-black font-18 mobile-font-4 mobile-text-left line-height-25">
			Meticulous is a process, exactness is a promise, but what closes the circle is our obligation to you. An obligation that transcends any transaction.<br>
			Which is why we can promise you,<span class="special-text no-border"> one less thing to worry about.</span>
		</p>
	</div>
	<div class="dez-col-30 no-shadow">
		<center>
		<img src="content/homepage_icon_paragraph_2.jpg" class="project-image-normal float-left" />
		</center>
	</div>
<br><br>	
</div><!-- This is the end of the first Image with its content only. -->
<div class="dez-col-100 no-shadow">
	<center>
	<img src="content/homepage_acutis=accuracy.jpg" class="project-image-vsmall" /><br>
	<img src="content/about_green_dots.jpg" class="project-image-vsmall" />
	</center>
</div>

<div class="dez-col-100 no-shadow text-dark-green">
	<h1 class=" padding-left-10 device-center" ><b>Click, act</b><span class="text-light-green"> & go</span></h1>
</div><!-- This is the end of the Acutis Diagnostics Image and Dotted LIne and click act and go Only. -->

<div class="dez-col-90 padding-left-5 padding-right-5 text-dark-green no-shadow">
	<div class="dez-col-30 padding-left-3 columns no-shadow">
		<center>
			<img src="content/about_icon_paragraph_2.jpg" alt="Sample collection" class="project-image-small" />
			<h2 class="roboto-light mobile-center width-full mobile-font-5"><span class="text-light-green">i-</span><span class="font-bold">Acutis</span></h2>
			<a href="https://acutis.labnexus.net"><img src="content/homepage_bt_sign_in.jpg" alt="Requisition Billing fulfillment" class="project-image-small" /></a>
		</center>
	
	</div>
	<div class="dez-col-30 padding-left-3 columns no-shadow">
		<center>
			<img src="content/homepage_icon_make_a_payment.jpg" alt="Reordering supplies" class="project-image-small" />
			<h2 class="roboto-light mobile-center width-full mobile-font-5"><span class="text-light-green">Make </span><span class="font-bold">a Payment</span></h2>
			<a href="#"><img src="content/homepage_bt_pay_here.jpg" class="project-image-small" /></a>
		</center>
	
	</div>
	<div class="dez-col-30 padding-left-3 columns no-shadow">
		<center>
			<img src="content/homepage_icon_order_supplies.jpg" alt="Client tool training" class="project-image-small" />
			<h2 class="roboto-light mobile-center width-full mobile-font-5"><span class="text-light-green">Order </span><span>Supplies</span></h2>
			<a href="Order-Supply.php"><img src="content/homepage_bt_pay_order.jpg" alt="lab reports" class="project-image-small" /></a>
		</center>
	
	</div>
</div><!-- This is the end of the three columns -->

<div class="dez-col-100 background-soap-color no-shadow contact-section">
	<center class="padding-3">
		<h2 class="special-text no-border mobile-font-4 arial-bold">Connect With Us</h2>
		<p><img src="content/down-arrow.png" alt="relevant reports" class="width-10" /></p>
		<p class="text-dark-green arial-regular font-22 mobile-font-4">Sign Up to receive updates and to get involved.</p>
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
<?php include("footer.php"); ?>
<?php include("Bottom_Js.php"); ?>

</body>
</html>