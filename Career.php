<html>
<head>
	<?php include("head.php"); ?>
<script>
	
function validation()
{
var a=document.career.FirstName.value;
if(a=="")
{
alert("Enter FirstName");
document.career.FirstName.focus();
return false;
}
var b=document.career.LastName.value;
if(b=="")
{
alert("Enter LastName");
document.career.LastName.focus();
return false;
}
var c=document.career.Email.value;
var atposition=c.indexOf("@");  
var dotposition=c.lastIndexOf("."); 
if(atposition<1 || dotposition<atposition+2 || dotposition+2>=c.length)
{
alert("Enter valid Email");
document.career.Email.focus();
return false;
}
var d=document.career.Phone.value;
if(d=="")
{
alert("Enter valid phone number");
document.career.Phone.focus();
return false;
}
var e=document.career.career1.value;
if(e=="")
{
alert("Enter valid career");
document.career.career1.focus();
return false;
}
var f=document.career.uploaded_file.value;
if(f=="")
{
alert("Upload Your Resume");
document.career.uploaded_file.focus();
return false;
}

var g=document.career.textarea.value;
if(g=="")
{
alert("enter text field");
document.career.textarea.focus();
return false;
}

/*var h=document.career.text.value;
if(h=="")
{
alert("Enter Website");
document.career.text.focus();
return false;
}
*/
}
</script>

</head>
<body>
<?php include("new-header.php"); ?>
<div class="device-hide"><?php include("social-links.php"); ?></div>
<div class="banner-section">
	<img src="content/careers_main_image.jpg" alt="Testing for etg test" />
	<div class="banner-caption">
		<h1>Careers <span class="text-light-green"></span></h1>
		<p class="banner-description">
			Acutis is a dynamic company, building its internal resources while expanding its territories. We invite industry professionals who abhor standing in place and believe in the evolving present, to join in building this company into the industry leader. Please follow us to learn of opportunities how to become part of our team.
		</p>
	</div>
</div><!-- Well, this is the end of the Banner of the Project Ver2.0 -->

<div class="dez-col-100 text-dark-green no-shadow">
	<h1 class="padding-left-10 device-center "><span class="text-light-green">We are </span><b>hiring</b></h1>
	<div class="dez-col-40 no-shadow">
		<center><img src="content/careers_img_1.jpg" alt="Testing for rehab facility etg alcohol test" class="padding-left-10 padding-top-20 project-image-normal" /></center>
	</div>
	
	<div class="dez-col-60 no-shadow">
		<div class="dez-col-45 no-shadow listed-help">
			<h2 class="listed listed-right padding-left-10 device-center font-arial"><b>If you</b><span class="text-light-green"> are</span></h2>
			<p class="listed listed-right special-text no-border padding-left-10 device-center text-bold">a Scientist</p>
			<p class="listed listed-right special-text no-border padding-left-10 device-center text-bold">a Lab</p>
			<p class="listed listed-right special-text no-border padding-left-10 device-center text-bold">a Sales Specialist</p>
			<p class="listed listed-right special-text no-border padding-left-10 device-center text-bold">an Administrator</p>
		</div>
		<div class="dez-col-55 no-shadow">
			<center><a href="#apply"><img src="content/careers_bt_apply.jpg" alt="Drug testing for substance abuse facility diluted urine drug test" class="width-65 margin-top-20 margin-bottom-20 mobile-width-auto40 float-left" /></a></center>
		</div><!-- This is the end of the first section of the right side content. -->
		
		<div class="dez-col-45 no-shadow listed-help">
			<h2 class="font-26 padding-left-10 listed device-center"><span class="text-light-green mobile-margin-left-15">Currently </span><b>Available Positions</b></h2>
			<p class="listed listed-right special-text no-border padding-left-10 device-center text-bold">Position 1</p>
			<p class="listed listed-right special-text no-border padding-left-10 device-center text-bold">Position 3</p>
			<p class="listed listed-right special-text no-border padding-left-10 device-center text-bold">Position 3</p>
		</div>
		<div class="dez-col-55 no-shadow">
			<center><a href="#apply"><img src="content/careers_bt_apply.jpg" alt="Oral fluid drug testing specimen collection" class="width-65 margin-top-20 margin-bottom-20 mobile-width-auto40 float-left" /></a></center>
		</div><!-- This is the end of the second section of the right side content. -->
		
		<div class="dez-col-100 no-shadow">
			<h2 class="font-26 padding-left-10 listed last device-center"><span class="text-light-green mobile-margin-left-15">Other </span><b>Positions</b></h2>
			<p class="device-center"><img src="content/careers_arrow_vert.jpg" alt="based urine drug testing laboratory" class="padding-left-25 mobile-width-auto" /></p>
		</div>
	</div>
	
	<div class="dez-col-100 no-shadow">
		<center>
			<p class="text-black font-19 mobile-font-4 padding-left-10 text-light-black line-height-25">
				To Learn more about employment within our Organization.<br>Contact us at <span class="special-text ">career@acutisdiagnostics.com</span>
			</p>
		</center>
	</div>
</div><!-- This is the End of the WE ARE HIRING Section. -->

<div class="dez-col-100 text-dark-green no-shadow">
	<h1 class="padding-left-10 device-center"><span class="text-light-green">Tell us </span><b>who you Are</B></h1>
	<div class="padding-left-20" id="apply">
	    <form name="career" method="post" action="careertest.php" enctype="multipart/form-data">
		<input type=""      name="FirstName" id=""class="padding-1 dez-col-80 font-18 margin-top-2 no-shadow project-input" required  placeholder="FirstName*" />
		<input type=""      name="LastName"  class="padding-1 dez-col-80 font-18 margin-top-2 no-shadow project-input"  required  placeholder="LastName*" />
		<input type="email" name="Email"     class="padding-1 dez-col-80 font-18 margin-top-2 no-shadow project-input"     required  placeholder="Email*" />
	    <input type="tel"  pattern="^\+(?:[0-9]●?){6,14}[0-9]$" name="Phone" class="padding-1 dez-col-80 font-18 margin-top-2 no-shadow project-input"    required  placeholder="Enter Your Phone with country code " />

	    <div class="dez-col-75 margin-top-5 mobile-font-4 no-shadow">
			<div class="dez-col-30 no-shadow">
					<span class="text-light-black">You are :</span>
			</div>
			<div class="dez-col-70 text-light-black text-bold no-shadow">
				<div class="dez-col-50 no-shadow">
					<input type="radio"class="radio" name="career1" id="career" checked  value="Scientist"  />Scientist
				</div>
				<div class="dez-col-50 no-shadow">
					<input type="radio" class="radio" name="career1" id="career" value="Lab" />Lab
				</div>
				<div class="dez-col-50 no-shadow">
					<input type="radio" class="radio"  name="career1" id="career" value="Sales Specialists" />Sales Specialist
				</div>
				<div class="dez-col-50 no-shadow">
					<input type="radio" class="radio"  name="career1" id="career" value="Administrator" />Administrator
				</div>
			</div>
	    </div>
	    
	</div><!-- End of the all inputs Here. -->
	<div class="dez-col-100 no-shadow margin-top-2">
		<center>
		<p class="mobile-font-4">Upload Resume : <input type="file" name="uploaded_file" required class="myfile" /></p>
        
		<textarea class="project-textarea font-bold padding-1 text-light-green" name="textarea" required placeholder="Tell us why you want to work for Acutis..."></textarea>
		</center>
	</div><!-- This is the end of the resume Button and Text area Here. -->
	<div class="dez-col-80 no-shadow padding-left-20 margin-top-2">
	<center>
		<input type="url" name="text" class="padding-1 dez-col-80 font-18 margin-top-2 no-shadow project-input" placeholder="Website / Linkedin"  />
	</center>
	
	</div>
	
	<div class="dez-col-100 no-shadow text-black margin-top-5">
	<center>
		<input type="submit" name="submit" value="Submit your application" class="join-btn"  onclick="validation()" /><br><br>
		<form>
		<p class="font-18 text-light-black mobile-font-4">Acutis is an equal opportunity employer ( EOE )<br>We strongly support diversity in the workforce.</p>
	</center>	
	</div><!-- End of the submit Button and also the small content -->
</div><!-- This is the end of the main DIV -->


<div class="dez-col-100 no-shadow">
<?php include("footer.php"); ?>
<?php include("Bottom_Js.php"); ?>

</div>
</body>
</html>