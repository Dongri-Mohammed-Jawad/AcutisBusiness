<!doctype html>
<html lang="en"><?php 
//for uploading file
$name_of_uploaded_file =basename($_FILES['uploaded_file']['name']);
$formData = $_POST;
getFile( $name_of_uploaded_file, $formData );
function getFile( $filename , $formData ) {
    
    $allowedExts = array("csv","pdf");
    $temp = explode(".", $_FILES["uploaded_file"]["name"]);
    $extension = end($temp);
    $mimes = array('application/vnd.ms-excel','text/plain','text/csv','text/tsv');
 
    if (in_array($_FILES['uploaded_file']['type'],$mimes )
    && ($_FILES["uploaded_file"]["size"] < 2000000)
    && in_array($extension, $allowedExts))
      {
      if ($_FILES["uploaded_file"]["error"] > 0)
        {
        echo "Return Code: " . $_FILES["uploaded_file"]["error"] . "<br>";
        }
      else
        {      
            sendMailAsAttachment($_FILES["uploaded_file"]["tmp_name"],$_FILES["uploaded_file"]["name"],$formData);         
        }
      }
    else
      {
      echo "Invalid file";
      }  
}
//prepare email message body

function prepareEmail( $formData ) {
    
    // email fields: to, from, subject, and so on
    $to ='pradeepchandra19@gmail.com';
    $from = "`info@crammaze.com"; 
    $subject ="Carrer Request"; 
    $message = "Uploaded File\n";
    $message .= "FirstName :". $formData['FirstName']."\n";
	$message .= "LastName :". $formData['LastName']."\n";
    $message .= "Email Address :". $formData['Email']."\n";
	$message .= "Phone:". $formData['Phone']."\n";
	$message .= "Carrer:". $formData['Carrer']."\n";
	$message .= "About:". $formData['textarea']."\n";
	$message .= "Website:". $formData['text']."\n";
    $headers = "From: $from";
 
    // boundary 
    $semi_rand = md5(time()); 
    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
 
    // headers for attachment 
    $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
 
    // multipart boundary 
    $message .= "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/plain; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n"; 
    $message .= "--{$mime_boundary}\n";
    
    $emailData = array (
        'to' => $to,
        'from' => $from,
        'subject' => $subject,
        'headers' => $headers,
        'message' => $message
    );
    
    return $emailData;
    
}

//prepare mail attachment
function pepareAttachment( $filename ,$fileorgname) {
    $attachContent = '';
    $file = fopen($filename,"rb");
    $data = fread($file,filesize($filename));
    fclose($file);
    $cvData = chunk_split(base64_encode($data));
    $attachContent .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$fileorgname\"\n" . 
    "Content-Disposition: attachment;\n" . " filename=\"$fileorgname\"\n" . 
    "Content-Transfer-Encoding: base64\n\n" . $cvData . "\n\n";
    $attachContent .= "--{$mime_boundary}\n"; 
    return $attachContent;
    
}
////send uplloade file as attachment
function sendMailAsAttachment( $filename, $fileorgname, $formData ) {
    
    $emailData = prepareEmail( $formData );
    $attachContent = prepareAttachment( $filename,$fileorgname );
    $message = $emailData['message'].$attachContent;
    $ok = @mail($emailData['to'], $emailData['subject'], $message, $emailData['headers']); 
    if ($ok) { 
          	 header('refresh:0.001; url=contactusthankyou.php');
    } else { 
    
    } 
}
?> 
</html>


  

