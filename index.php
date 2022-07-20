<?php 

$to = "your email address";

$sub = "message test";
$message = "<h1>my name is google</h1>";


$hed = 'MIME-Version: 1.0'."\r\n";
$hed .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";

$stmt = mail($to, $sub, $message, $hed);


if($stmt)
{
	echo "message send";
}
else
{
	echo"message not send";
}



 ?>

    
    $to = "sourovpal35@gmail.com";

$sub = "message test";
$message = "<h1>my name is google</h1>";


// Set content-type header for sending HTML email
$headers = 'MIME-Version: 1.0'."\r\n";
$headers .= "From: Sourov Pal 36 <test@gmail.com> \r\n"; // Sender's Email
$headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";

$stmt = mail($to, $sub, $message, $headers);


if($stmt)
{
	echo "message send";
}
else
{
	echo"message not send";
}
    exit;
