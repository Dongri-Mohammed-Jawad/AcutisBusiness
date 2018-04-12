<html>
<?php
require "phpmailer/src/PHPMailer.php";
if(isset($_POST['submit']))
{   
    $to ='pradeepchandra19@gmail.com';
	$FirstName = $_POST['FirstName'];
	$LastName = $_POST['LastName'];
	$Email = $_POST['Email'];
	$Phone = $_POST['Phone'];
	$Career = $_POST['career1'];
	$About= $_POST['textarea'];
	$Website = $_POST['text'];
	$subject ="AcutisBusiness Career request from $FirstName $LastName ($Email)";
	$file = $_FILES['uploaded_file']['name'];
	$tmp_file = $_FILES['uploaded_file']['tmp_name'];
	$store = "uploads/$file";  
	$upload = move_uploaded_file($tmp_file,$store);
	
	if($upload)
	{        
                 $file_path = "uploads/$file";
		        $headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
				$headers .= "From: qumail786@p3plcpnl0979.prod.phx3.secureserver.net" . "\r\n" .
                   "CC: info@crammaze.com"."\r\n". "Reply-To: $Email";
		 $Message = "
		 <h1>Applicant Details</h1>
			<p><b>Applicant Name : </b>$FirstName $LastName</p>
			<p><b>Phone : </b> $Phone</p>
			<p><b>Email : </b>$Email</p>
			<p><b>Carrer Chioce  : </b>$Career</p>
		    <p><b>About : </b>$About</p>
		    <p><b>Website : </b>$Website</p>
		    <p><b>Resume Source  : </b> http://acutisdiagnostics.crammaze.com/$file_path</p>
			<b>Thanks & regards,</b>
			<p>Crammaze Team Inc.</p>
		 
		 ";
		  
       $mail =  mail( $to, $subject, $Message, $headers);
         if($mail)
		 {
			 
		 header('refresh:0.001; url=contactusthankyou.php');
		 }
		 else
		 {
			 header("refresh:0.01; url=index.php");
		 }
			
		
	}
	
	
	
	
}
?>
</html>