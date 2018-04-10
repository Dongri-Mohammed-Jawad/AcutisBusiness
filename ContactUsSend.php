<!doctype html>
<html lang="en"><?php 

         $to ='pradeepchandra19@gmail.com';
		 $FirstName= $_POST['FirstName'];
		 $LastName= $_POST['LastName'];
         $Email= $_POST['Email'];
         $PracticeName=$_POST['PracticeName'];
		
		
		
		
	     $subject ="AcutisBusiness Contact Us request from $FirstName $LastName ($Email)";
		 $Messageinput =$_POST['Message'];
		 $headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
				 $headers .= "From: qumail786@p3plcpnl0979.prod.phx3.secureserver.net" . "\r\n" .
                   "CC: info@crammaze.com"."\r\n". "Reply-To: $Email";
	    
		 $Message = "
		 <h1>Contact Us Details</h1>
			<p><b>Client Name : </b>$FirstName $LastName</p>
			<p><b>Practice Name : </b> $PracticeName</p>
			<p><b>Email : </b>$Email</p>
			<p><b>Message : </b>$Messageinput</p>
			
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

?>

  
</html>


  

