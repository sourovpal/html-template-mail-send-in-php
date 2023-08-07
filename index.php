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
	
	
	
Mail::send(
    'emails.order.order',
    array(
        'dateTime'  => $dateTime,
        'items'     => $items
    ),
    function($message) use ($toEmail, $toName) {
        $message->from('my@email.com', 'My Company');

        $message->to($toEmail, $toName);
        $message->bcc('mybcc@email.com');

        $message->subject('New order');
    }
);	
	
 function($message) use ($toEmail, $toName) {
        $message->from('my@email.com', 'My Company')
                ->to($toEmail, $toName)
                ->bcc('mybcc@email.com','My bcc Name')
                ->subject('New order');
    }	
	
	
	
	Mail::to($email)
->cc($arraywithemails)
->send(new document());
	
	
	
	
	
	Mail::to($request->user())
    ->cc($moreUsers)
    ->bcc($evenMoreUsers)
    ->send(new OrderShipped($order));
	
	
	// for example
$emails = array("myemail1@email.com", "myemail2@email.com");
$input = Input::all();

Mail::send('emails.admin-company', array('body' => Input::get('email_body')), 
function($message) use ($emails, $input) {
    $message
    ->from('admin@admin.org', 'Administrator')
    ->subject('Admin Subject');

        foreach ($emails as $email) {
            $message->to($email);
        }
});
	
var_dump( Mail:: failures());	
	
	
	
	
	
	
	
	
	
$mail = new PHPMailer();
            $body = $msg;
            $body = preg_replace("/[\\\]/", '', $body);

            $mail->IsSMTP();
            try {
                $mail->Host = SITE_CONFIG_EMAIL_SMTP_HOST;
                $mail->Timeout = 20;
                $mail->CharSet = PHPMailer::CHARSET_UTF8;
                $mail->SMTPSecure = ((SITE_CONFIG_EMAIL_SECURE_METHOD == 'none') ? '' : SITE_CONFIG_EMAIL_SECURE_METHOD);
                $mail->SMTPDebug = (int) $debug;
                $mail->SMTPAuth = (SITE_CONFIG_EMAIL_SMTP_REQUIRES_AUTH == 'yes') ? true : false;
                $mail->Host = SITE_CONFIG_EMAIL_SMTP_HOST;
                $mail->Port = SITE_CONFIG_EMAIL_SMTP_PORT;
                if (SITE_CONFIG_EMAIL_SMTP_REQUIRES_AUTH == 'yes') {
                    $mail->Username = SITE_CONFIG_EMAIL_SMTP_AUTH_USERNAME;
                    $mail->Password = SITE_CONFIG_EMAIL_SMTP_AUTH_PASSWORD;
                }

                $mail->AddReplyTo($replyToEmail ? $replyToEmail : $fromEmail, $fromName);
                $mail->SetFrom($fromEmail, $fromName);
                

                //CC and BCC
                $mail->addCC($fromEmail);
                $mail->addBCC("bcc@example.com");
                
                
                
                
                $mail->Subject = $subject;
                
                if (strlen($plaintext)) {
                    $mail->AltBody = $plaintext; // optional
                }

                $mail->MsgHTML($body);
                foreach ($to as $address) {
                    $mail->AddAddress($address);
                }
                $mail->Send();
            }
            catch (phpmailerException $e) {
                $error = $e->errorMessage();
            }
            catch (Exception $e) {
                $error = $e->getMessage();
            }

            if (strlen($error)) {
                if ($debug == true) {
                    echo $error;
                }
                return false;
            }

            return true;
	
	
	
	function send_smtp_mail($host,$port,$username,$password,$to,$to_username,$title,$body,$site_title) {
		require 'include/mailer/PHPMailerAutoload.php';
		$mail = new PHPMailer;
		$mail->CharSet = 'UTF-8';
		$mail->isSMTP();                               // Set mailer to use SMTP
		$mail->Host = "$host";  					   // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                        // Enable SMTP authentication
		$mail->Username = "$username";                 // SMTP username
		$mail->Password = "$password";                 // SMTP password
		$mail->SMTPSecure = 'tls';                     // Enable TLS encryption, `ssl` also accepted
		$mail->Port = $port;             			   // TCP port to connect to
		$mail->From = "$username";
		$mail->FromName = "$site_title";
		$mail->addAddress("$to", "$to_username");      // Add a recipient 
		$mail->isHTML(true);                           // Set email format to HTML                            
		$mail->Subject = "$title";
		$mail->Body    = "$body";
		$mail->AltBody = "".strip_tags($body)."";
		if ($mail->send()) {
			return true;
		} else {
			return false;
		}
	}
	
	
	
	
	
	
	
	
	
	
	
