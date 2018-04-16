<!doctype html>
<html lang="en"><?php 

         $to ='pradeepchandra19@gmail.com';
         $Email= $_POST['Email'];
         $FirstName=$_POST['FirstName'];
		 $LastName=$_POST['LastName'];
	     $subject ='AcutisBusiness Updates recive request from '.$FirstName.' ('.$Email.')';
		 $Message = 'To receive updates and to get involved.';
		 
	     $headers = "From: qumail786@p3plcpnl0979.prod.phx3.secureserver.net" . "\r\n" .
                   "CC: info@crammaze.com"."\r\n". "Reply-To: $Email";
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
