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