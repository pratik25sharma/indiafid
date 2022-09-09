<?php

class Email
{
	public function __construct()
	{
		
	}
	
	public function sendemail($body,$subject,$to)
	{		
//		require_once('class.phpmailer.php');
//
//		$mail             = new PHPMailer();
//                 $mail->Mailer = "smtp";
//		$mail->IsSMTP(); // telling the class to use SMTP
//		$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
//												   // 1 = errors and messages
//												   // 2 = messages only
//		$mail->SMTPAuth   = true;                  // enable SMTP authentication
//		$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
//		$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
//		$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
//		$mail->Username   = "testingweb01@gmail.com";  // GMAIL username
//		$mail->Password   = "manish123$";            // GMAIL password
//
//		//$mail->SetFrom('name@yourdomain.com', 'First Last');
//
//		$mail->Subject    = $subject;
//
//		$mail->MsgHTML($body);
//
//		$address = $to;
//		$mail->AddAddress($address);
//
//		if(!$mail->Send()) {
//		  return $mail->ErrorInfo;
//		} else {
//		  return true;
//		}
		$from_email = "support@weddingmart.co.in";
        $from_fullname = "Wedding mart";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= "From: $from_fullname <$from_email>\r\n";

                // More headers
                //$headers .= 'From: <contact@caduxis.com>' . "\r\n";

//                mail($to,$subject,$body,$headers);
		if(!mail($to,$subject,$body,$headers)) {
		  return false;
		} else {
		  return true;
		}
	}
	public function parseData($data,$body){
		foreach ($data as $key => $val)
		{
			$body = str_replace('{'.$key.'}',$val,$body);

		}
		return $body;
	}
}
