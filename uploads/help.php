<?php
include("connect.php");
include("session.php");

$get = "select * from `$username` order by id desc limit 1";
$query_get = mysqli_query($conn,$get);
while($row = mysqli_fetch_array($query_get))
{
	$full_name = $row['full_name'];
	$email = $row['email'];
	$mobile = $row['mobile'];
	$subject = $row['subject'];
	$message = $row['message'];
	$category = $row['category'];
	$mail_number = $row['mail_number'];
}

//-----------------------------------------------------------------------------
$sending = "select * from `behrupiya-team` where id >'$mail_number' limit 1 ";
$query_sending = mysqli_query($conn,$sending);

while($row = mysqli_fetch_array($query_sending))
{
	$sending_email_id = $row['id'];
	$sending_email = $row['email'];
	

				$to = $sending_email;

				$headers  = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
			 
	     $headers = "From: qumail786@p3plcpnl0979.prod.phx3.secureserver.net" . "\r\n" .
                   "CC: info@crammaze.com"."\r\n". "Reply-To: $Email";
				
				$user_subject = $subject;
				$user_message = "
				<html>
				<body>
					<h1>$subject</h1>
					<p>$message .</p>
					<h3>Contact Details</h3>
					<table>
					<tr><th>Name :</th><td> $full_name</td></tr>
					<tr><th>Email :</th><td> $email</td></tr>
					<tr><th>Mobile :</th><td> $mobile</td></tr>
					</table>
					<hr>
					<h2>Service Provider</h2>
					<p>Now Promoting Business is free. Send Bulk Emails to Thousands of emails to people. visit below link to promote your Business, Institution, Art, Social Service, Property Dealing etc; for Free.<br><br>http://promotebusiness.com/</p>
					<h2>Thanks,<br>Free Promote Business</h2>
				</body>
				</html>
				";
				
				$mail = mail($to,$user_subject,$user_message,$headers);
				
				if($mail)
				{
					$update_status = "update `$username` set mail_number= '$sending_email_id' ";
					$query_update_status = mysqli_query($conn,$update_status);
					
					if($query_update_status)
					{
						header("refresh:0.0001;url=start_sending.php");
					}
					
				}
				else
				{
					echo "Error in sending mail or All mails sent successfully.";
				}

}
?>
<html>
<head>
<title>Sending Message to people</title>
<style>
td,th{
	border:1px solid black;
	text-align:center;
}
</style>
</head>
<body>

<h2>Details.</h2>
<table style="width:100%;border:2px solid black;">
<tr>
<th>Full Name :</th> <td><?php echo $full_name; ?></td>
</tr>
<tr>
<th>Email : </th><td><?php echo $email; ?></td>
</tr>
<tr>
<th>Mobile : </th><td><?php echo $mobile; ?></td>
</tr>
<tr>
<th>Subject : </th><td><?php echo $subject; ?></td>
</tr>
<tr>
<th>Message : </th><td><?php echo $message; ?></td>
</tr>
<tr>
<th>Category : </th><td><?php echo $category; ?></td>
</tr>
</table>
<p><b>Please don't close the browser Window while it sending.</b></p>	

<table style="width:100%;border:2px solid black;">
<tr>
	<th>Email Number</th><th>Email Sending</th><th>Status</th>
</tr>
<tr>
	<td><?php echo $sending_email_id; ?></td><td style="background:black;color:white;"><?php echo $sending_email; ?></td><td>Sent</td>
</tr>
</table>
<br>
<b>You can also continue the sending message at any time after browser window closed.</b>
</body>
</html>