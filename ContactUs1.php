<html>
<head>
	<?php include("head.php"); ?>
<script>
function validation()
{
var a=document.contact.Name.value;
if(a=="")
{
alert("Enter All Input Fields.");
document.contact.Name.focus();
return false;
}
var b=document.contact.Email.value;
if(b=="")
{
alert("Enter valid Email");
document.contact.Email.focus();
return false;
}
var c=document.contact.Message.value;
if(c=="")
{
alert("Enter Message");
document.contact.Message.focus();
return false;
}
}
</script>
</head>
<body>
<?php include("new-header.php"); ?>
<div class="device-hide"><?php include("social-links.php"); ?></div>
<div class="banner-section">
	<img src="content/contact_main-image.jpg" alt="seasoned clinician, Point of care drug test" />
	<div class="banner-caption">
		<h1>Contact</h1>
		<p class="banner-description">
		Acutis Diagnostics would like to thank you for your Business.<br>All of us at Acutis are dedicated to providing you with an exceptional customer service experience to meet all of your needs.
		</p>
	</div>
</div><!-- Well, this is the end of the Banner of the Project Ver2.0 -->

<div class="dez-col-100 no-shadow">
	<h2 class="padding-left-10 device-center text-light-green">For General & Billing Inquiries</h2>
	<h2 class="padding-left-10 device-center">
	<span class="text-dark-green">Call Our Main Line 1-844-522-8847</span>
	</h2>
</div><!-- this is the end of the GENERAL & BILLING INQUIRy. -->

<div class="dez-col-100 no-shadow">
	<div class="dez-col-35 padding-left-15 padding-right-15 no-shadow">
		<p class="font-22 device-center">
			If you have any questions or comments, please fill out the form, submit, and we will respond promptly.
		</p>
	</div>
	<div class="dez-col-30 no-shadow">
		<center><img src="content/contact_icon-1.jpg" alt="Senior Scientists " class="project-image-small" /></center>
	</div>
</div><!-- This is the end of the Question and answer content with image on the right side. -->


 <form name="contact" id="f1" action="ContactUsSend.php"  method="post" >
 <center>
	<input type="" name="Name" required placeholder="First Name*" class="project-input font-20 padding-1 margin-top-1"><br>
	<input type="" name="Name" required placeholder="Last Name*" class="project-input font-20 padding-1 margin-top-1"><br>
	<input type="" name="Name" required placeholder="Practice Name*" class="project-input font-20 padding-1 margin-top-1"><br>
	<input type="" name="Name" required placeholder="Email*" class="project-input font-20 padding-1 margin-top-1"><br>
	<input type="" name="Name" required placeholder="Phone" class="project-input font-20 padding-1 margin-top-1"><br>
	<textarea placeholder="Your Message Here.." class="project-textarea margin-top-1 font-22" required></textarea><br>
	<input type="submit" value="  Send Your Message" onclick="validation()" class="join-btn margin-top-5 "/> 
  </center>
  </form>
<?php include("footer.php"); ?>
<?php include("Bottom_Js.php"); ?>
</body>
</html>