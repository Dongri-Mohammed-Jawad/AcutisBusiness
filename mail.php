<?php

$to = 'pradeepchandra19@gmail.com';
$subject = 'Test email with attachment';
$random_hash = md5(date('r', time()));
$headers = "From: sanjeev@example.comrnReply-To: sanjeev@example.com";
$headers .= "rnContent-Type: multipart/mixed; boundary='PHP-mixed-'.$random_hash.";
$attachments = chunk_split(base64_encode(file_get_contents('downloads.zip')));
ob_start(); 
?>

<?php echo $random_hash; ?> 
Content-Type: text/html; charset="iso-8859-1"
Content-Transfer-Encoding: 7bit

<h2>Hello World!</h2>
<p>This is something with <b>HTML</b> formatting.</p>

--PHP-alt-<?php echo $random_hash; ?>--

--PHP-mixed-<?php echo $random_hash; ?> 
Content-Type: application/zip; name="downloads.zip" 
Content-Transfer-Encoding: base64 
Content-Disposition: attachment 

<?php echo $attachment; ?>
--PHP-mixed-<?php echo $random_hash; ?>--

<?php

//copy current buffer contents into $message
$message = ob_get_clean();
//send the email
$mail_sent = mail( $to, $subject, $message, $headers );
//if the message is sent successfully print "Mail sent". Otherwise print "Mail failed"
echo $mail_sent ? "Mail sent" : "Mail failed";
?> 
