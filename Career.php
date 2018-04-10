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
if(c=="")
{
alert("Enter valid Email");
document.career.Email.focus();
return false;
}
var d=document.career.Phone.value;
if(d=="")
{
alert("Enter valid Email");
document.career.Phone.focus();
return false;
}
var phone=^\+(?:[0-9]●?){6,14}[0-9]$;
var d=document.career.Phone.value;
if(phone.test(d))
{
return true;
}else{
	alert("Enter valid phone");
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
var f=document.career.resume.value;
if(f=="")
{
alert("Upload Your Resume");
document.career.resume.focus();
return false;
}

var g=document.career.textarea.value;
if(g=="")
{
alert("enter text field");
document.career.textarea.focus();
return false;
}

var h=document.career.text.value;
if(h=="")
{
alert("Enter Website");
document.career.text.focus();
return false;
}

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

<div class="dez-col-100 no-shadow text-dark-green">
	<h1 class="padding-left-10 device-center "><span class="text-light-green">We are </span><b>Hiring</b></h1>
	<div class="dez-col-35 no-shadow">
		<center><img src="content/careers_img_1.jpg" alt="Testing for rehab facility etg alcohol test" class="padding-left-10 padding-top-20 project-image-normal" /></center>
	</div>
	
	<div class="dez-col-65 no-shadow">
		<div class="dez-col-55 no-shadow listed-help">
			<h2 class="padding-left-15 listed device-center"><b>If you</b><span class="text-light-green"> are</span></h2>
			<p class="listed listed-right special-text no-border padding-left-15 device-center">a Scientist</p>
			<p class="listed listed-right special-text no-border padding-left-15 device-center">a Scientist</p>
			<p class="listed listed-right special-text no-border padding-left-15 device-center">a Scientist</p>
		</div>
		<div class="dez-col-45 no-shadow">
			<center><img src="content/careers_bt_apply.jpg" alt="Drug testing for substance abuse facility diluted urine drug test" class="width-65 margin-top-40 mobile-width-auto40" /></center>
		</div><!-- This is the end of the first section of the right side content. -->
		
		<div class="dez-col-55 no-shadow listed-help">
			<h2 class="font-26 padding-left-15 listed device-center"><span class="text-light-green">Currently </span><b>Available Positions</b></h2>
			<p class="listed listed-right special-text no-border padding-left-15 device-center">Position 1</p>
			<p class="listed listed-right special-text no-border padding-left-15 device-center">Position 2</p>
			<p class="listed listed-right special-text no-border padding-left-15 device-center">Position 3</p>
		</div>
		<div class="dez-col-45 no-shadow">
			<center><img src="content/careers_bt_apply.jpg" alt="Oral fluid drug testing specimen collection" class="width-65 margin-top-40 mobile-width-auto40" /></center>
		</div><!-- This is the end of the second section of the right side content. -->
		
		<div class="dez-col-100 no-shadow">
			<h2 class="font-26 padding-left-15 listed last device-center"><span class="text-light-green">Other </span><b>Positions</b></h2>
			<p class="device-center"><img src="content/careers_arrow_vert.jpg" alt="based urine drug testing laboratory" class="padding-left-25 mobile-width-auto" /></p>
		</div>
	</div>
	
	<div class="dez-col-100 no-shadow">
		<center>
			<p class="text-black">
				To Learn more about employment within our Organization.<br>Contact us at <span class="special-content no-border">career@acutisdiagnostics.com</span>
			</p>
		</center>
	</div>
</div><!-- This is the End of the WE ARE HIRING Section. -->

<div class="dez-col-100 text-dark-green">
	<h1 class="padding-left-10 device-center"><span class="text-light-green">Tell us </span><b>Who you Are</B></h1>
	<div class="padding-left-20">
	    <form name="career" method="post" action="CareersSend.php">
		<input type=""      name="FirstName" id=""class="padding-1 dez-col-80 font-18 margin-top-2 no-shadow project-input" required autofocus placeholder="FirstName*" />
		<input type=""      name="LastName"  class="padding-1 dez-col-80 font-18 margin-top-2 no-shadow project-input"  required  placeholder="LastName*" />
		<input type="email" name="Email"     class="padding-1 dez-col-80 font-18 margin-top-2 no-shadow project-input"     required  placeholder="Email*" />
	    <input type="email"  pattern="^\+(?:[0-9]●?){6,14}[0-9]$" name="Phone" class="padding-1 dez-col-80 font-18 margin-top-2 no-shadow project-input"    required  placeholder="Enter Your Phone with country code " />
		
		<div class="dez-col-75 margin-top-5 no-shadow text-light-green">
		<table width="100%"> 
				<tr>
					<td class="mobile-font-4">You are : </td>
					<td class="mobile-font-4"><input type="radio" name="career1" id="career" checked  value="Scientist" /> Scientist</td>
					<td class="mobile-font-4"><input type="radio" name="career1" id="career" value="Lab"/> Lab</td> 
					<td class="mobile-font-4"><input type="radio" name="career1" id="career" value="Sales Specialists" /> Sales Specialists</td>
					<td class="mobile-font-4"><input type="radio" name="career1" id="career" value="Administrator"/> Administrator</td>
				</tr>
			</table>
		</div><!-- End of the table of the radio Buttons only -->
	</div><!-- End of the all inputs Here. -->
	<div class="dez-col-100 no-shadow">
		<center>
		<p>Upload Resume : <input type="file" name="resume" required autofocus /></p>
        <br><br>
		<textarea class="project-textarea font-bold padding-1" name="textarea" required ></textarea>
		</center>
	</div><!-- This is the end of the resume Button and Text area Here. -->
	<div class="dez-col-80 no-shadow padding-left-20">
	<center>
		<input type="" name="text" class="padding-1 dez-col-80 font-18 margin-top-2 no-shadow project-input" placeholder="Website / Linkedin" required autofocus />
	</center>
	
	</div>
	
	<div class="dez-col-100 no-shadow text-black">
	<center>
		<input type="submit" name="submit" value="Submit your application" class="join-btn"  onclick="validation()" /><br><br>
		<form>
		<p class="font-18">Acutis is an equal opportunity employer ( EOE )<br>We strongly support diversity in the workforce.</p>
	</center>	
	</div><!-- End of the submit Button and also the small content -->
</div><!-- This is the end of the main DIV -->


<div class="dez-col-100 no-shadow">
<?php include("footer.php"); ?>
<?php include("Bottom_Js.php"); ?>

</div>
</body>
</html>