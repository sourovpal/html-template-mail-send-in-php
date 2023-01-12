<?php 


$to      = $request->email;
                $subject = 'Verification Code';
                $message = '<!DOCTYPE html>
                            <html lang="en">
                            <head>
                              <meta charset="UTF-8">
                              <meta name="viewport" content="width=device-width, initial-scale=1.0">
                              <meta http-equiv="X-UA-Compatible" content="ie=edge">
                              <title>Document</title>
                            </head>
                            <body>
                            <h3>Your Verification Code Is : <b> '.$code.' </b></h3>
                            </body>
                            </html>';
                $headers = '';
                $headers .= "From: myplace@example.com\r\n";
                $headers .= "Reply-To: myplace2@example.com\r\n";
                $headers .= "Return-Path: myplace@example.com\r\n";
                $headers .= "CC: sombodyelse@example.com\r\n";
                $headers .= "BCC: hidden@example.com\r\n";
                $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
                
                
                            
                mail($to, $subject, $message, $headers);












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
