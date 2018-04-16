<html>
<head>
	<?php include("head.php"); ?>
 <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker({ minDate: 0 });
  });
  </script>
	<script>
function validation()
{

var a=document.order.name.value;

if(a=="")
{
alert("please enter name");
document.order.name.focus();
return false;
}
var b=document.order.email.value;
if(b=="")
{
alert("Enter vaild email id");
document.order.email.focus();
return false;
}
var c=document.order.phone.value;
if(c=="")
{
alert("Enter valid phone number");
document.order.phone.focus();
return false;
}
var d=document.order.date.value;
if(d=="")
{
alert("Enter valid date");
document.order.date.focus();
return false;
}
}
</script>
</head>
<body>
<?php include("new-header.php"); ?>
<div class="device-hide"><?php include("social-links.php"); ?></div>
<div class="container">
	<div class="slider" class="adjust">
		<div class="flexslider">
		  <ul class="slides">
		    <li>
		      <img src="content/landing_page_main_image.jpg" title="Acutis Diagnostic : cyclobenzaprine drug test,Pharmacogenetic testing,Workplace drug test,esdy toxicology test,cheap drug test" alt="determine if patients are taking their prescribed controlled medications " />
		    </li>
			<li>
			  <img src="content/landing_page_main_image.jpg" title="Acutis Diagnostic : cheap drug test,easy drug test,esdy toxicology test,Sample collection,healthcare industry,patient testing,Opioidepidemic" alt="Drug testing laboratory or lab,Urine testing laboratory or lab,Urine drug testing laboratory or lab,Oral fluid testing laboratory or lab" />
			</li>
		  </ul>
		</div>

	<div class="book-form">
		<div class="inner-form">

		<h4><img src="images/calendar.png" class="mobile-width-auto30" alt="Medication monitoring laboratory or lab,Prescription drug monitoring laboratory or lab,toxicology lab" title="drug testing lab,Pharmacogenetics testing,Confirmation drug testing,Patient prescription monitoring">Order supplies</h4>
				<form name="order" method="post" action="OrdersSend.php">
			   <div class="inputs">
				<input name="name"  id="name"    type=""   class="border-small"  placeholder="Name*" required autofocus>
				<input name="email"  id="email"  type="email"   placeholder="Email*"  required autofocus>
				<input name="phone" id="phone"   type="tel"  pattern="^\+(?:[0-9]●?){6,14}[0-9]$"  placeholder="Phone no with country code*"   required autofocus>
	       		<input name="date"  id="datepicker"    type="date"   placeholder="DATE*"   required autofocus>
	        </div>

			<input type="submit" name="join" value="ORDER" class="join-btn mobile-width-full mobile-font-4"  onclick="validation()"/>
			<div id="msg2" class="message"></div>
		</form>
		
		</div>
	</div>	
	</div>
	<div class="wrapper">
				
		<!-- Recent Works -->
		<div class="features dark">
			<div class="features-items column3">
				<a href="#">
					<div class="service-item"><!-- one.png -->
						<a href="#" class="service-img"><center><img src="images/first1.png" class="mobile-width-auto40" alt="based urine drug testing laboratory,Oral fluid drug testing,Drug testing for substance abuse facility,Testing for rehab facility"></center></a>
					</div>
					<h4>Triple Check</h4>
					<div class="line"></div>
					<p>Acutis will bill your insurance<br> company directly for <br>testing and lab services</p>
				</a>
			</div>
			<div class="features-items column3">
				<a href="#">
					<div class="service-item"><!-- two.png -->
						<a href="#" class="service-img"><center><img src="images/second1.png" class="mobile-width-auto40" alt="Medical school,Fellowship,seasoned clinician" title="toxicology lab,drug testing lab,Pharmacogenetics testing"></center></a>
					</div>
					<h4>Quick Turnaround</h4>
					<div class="line"></div>
					<p>Acutis will bill your insurance<br> company directly for <br>testing and lab services</p>
				</a>
			</div>
			<div class="features-items column3">
				<a href="#">
					<div class="service-item"><!-- three.png -->
						<a href="#" class="service-img"><center><img src="images/third1.png" class="mobile-width-auto40" alt="Confirmation drug testing,Patient prescription monitoring,based urine drug testing laboratory" title="Oral fluid drug testing,Drug testing for substance abuse facility,Testing for rehab facility,Testing for"></center></a>
					</div>
					<h4>Access to Express</h4>
					<div class="line"></div>
					<p>Acutis will bill your insurance<br> company directly for <br>testing and lab services</p>
				</a>
			</div>
			<div class="features-items column3">
				<a href="#">
					<div class="service-item"><!-- four.png -->
						<a href="#" class="service-img"><center><img src="images/fourth1.png" class="mobile-width-auto40" alt="New York,Florida,Iowa,West Virginia" title="Acutis Diagnostic : New York,Washington DC,Virginia,Maryland,Massachusetts,Pennsylvania"></center></a>
					</div>
					<h4>Simplified Reports</h4>
					<div class="line"></div>
				<p>Acutis will bill your insurance<br> company directly for <br>testing and lab services</p>
				</a>
			</div>
			<div class="clear"></div>
		</div>
		<!-- End Recent Works -->
		<div class="defination-content">
			<h1><span class="text-bold">A New Definition</span> of Service.</h1>
			<p class="text-indent-15 mobile-font-normal">We have built a company with a commitment to the best science, technology and practices, all set in motion by deeply committed professionals.</p>
			<p class="text-indent-15"><b>Acutis</b> is a company with no gaps. No Bureacracy.No Evasive hierarchy. From our CEO engaged in strategic planning and our Senior Scientists in the lab, to Sales Specialists on road, every employee is fully Accountable. Fully Accessible. Completely willing to assume responsibility. <b>So you have one less thing to worry about.</b></p>
		</div>

		<div class="tested-content">
			<p class="font-large text-center">Why Am I Being <span class="text-bold">Tested?</span></p>
			<center><img src="images/dotline.png" /></center>
			<p class="text-indent-15 text-center text-black text-normal">Please do not contact your physician's office with questions about an invoice from Acutis.</br>Contact Acutis to discuss payment and our financial hardship program</p>
		</div>
		
		<div class="contact5 colunm text-center">
		<p><strong>1-347-662-2450</strong></p>
		<img src="images/bottom.png" class="mobile-width-auto" title="Acutis Diagnostic : Connecticut,New Jersey,professional labratory" alt="prescribe with confidence,patient monitoring,seasoned clinician" > </img>
		</div>
		<p class="availability"><span><strong>Available Monday-Friday 9am to 5pm</strong></span></p>
	</div>
	<!-- End Wrapper -->
		
	
</div>

<?php include("footer.php"); ?>
<?php include("Bottom_Js.php"); ?>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script type="text/javascript" charset="utf-8">
  		$(window).load(function() {
  		  $('.flexslider').flexslider();
  		});
	</script>
	<script type="text/javascript" src="js/jquery.superfish.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/zebra_datepicker.js"></script>
    <script type="text/javascript" src="js/core.js"></script>


</div>
</body>
</html>