<?php 

         $to ='pradeepchandra19@gmail.com';
         $Email= $_POST['email'];
         $Name=$_POST['name'];
		 $Phone=$_POST['phone'];
		 $Date=$_POST['date'];
	     $subject ='AcutisBusiness Updates recive request from '.$Name.' ('.$Email.')';
		        $headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
				 $headers .= "From: qumail786@p3plcpnl0979.prod.phx3.secureserver.net" . "\r\n" .
                   "CC: info@crammaze.com"."\r\n". "Reply-To: $Email";
			$Message ="
				<html>
				<body>
					<h1>$subject</h1>
					<p>$message .</p>
					<h3>Contact Details</h3>
					<table>
					<tr><th>Name :</th><td> $Name</td></tr>
					<tr><th>Email :</th><td> $Email</td></tr>
					<tr><th>Order Date :</th><td>$Date</td></tr>
					<tr><th>Mobile :</th><td>$Phone</td></tr>
					</table>
					</body>
				</html>
				";
		 
					$mail =  mail( $to, $subject, $Message, $headers);
         if($mail)
		 {
			 
		 header('refresh:0.001; url=contactusthankyou.php');
		 }
		 else
		 {
			 header("refresh:0.01; url=Order-Supply.php");
		 }

?>
