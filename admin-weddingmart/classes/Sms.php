<?php

class Sms
{
	public function __construct()
	{
		
	}
	
	public function sendsms($authkey,$message,$to)
	{	
            /* $curl = curl_init();
            curl_setopt_array($curl, array(
              CURLOPT_URL => "http://api.msg91.com/api/sendhttp.php?sender=MSGIND&route=4&mobiles=$to&authkey=$authkey&encrypt=&country=0&message=$message&flash=&unicode=&afterminutes=&response=&campaign=",
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => "",
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 100,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => "GET",
              CURLOPT_SSL_VERIFYHOST => 0,
              CURLOPT_SSL_VERIFYPEER => 0,
            ));

            $response = curl_exec($curl);
            $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            $err = curl_error($curl);
            
            curl_close($curl);
            if ($err) {
              return "cURL Error #:" . $err;
            } else {
              return $httpcode;
            } */
			//require '../common/constants.php';
			require 'Osms.php';
			//use \Osms\Osms;

			$config = array(
				'clientId' => clientId,
				'clientSecret' => clientSecret,
				'verifyPeerSSL' => false
			);

			$osms = new Osms($config);

			//$osms->setVerifyPeerSSL(false);

			$response = $osms->getTokenFromConsumerKey();

			if (empty($response['error'])) {
				$token = $response['access_token'];
				$config = array(
					'token' => 'A76vGOLxIlTUXHKK6Lofd6K9qPpy',
					'verifyPeerSSL' => false
				);

				$osms = new Osms($config);

				//$osms->setVerifyPeerSSL(false);
				if(strpos($to,"-") >= 0){
					$to = str_replace("-","",$to);
				}
				if(strpos($to,"+") !== false){
					
				}else{
					$to = "+".$to;
				}
				$response = $osms->sendSms(
					// sender
					'tel:+237699410000',
					// receiver
					'tel:'.$to,
					// message
					$message,
					SITE_NAME
				);

				if (empty($response['error'])) {
					return 200;
				} else {
					return 'error';//$response['error'];
				}
			} else {
				return 'error';//$response['error'];
			}
			
	}
	public function sendotp($authkey,$message,$to,$otp)
	{	
            /* $curl = curl_init();
            curl_setopt_array($curl, array(
              CURLOPT_URL => "http://control.msg91.com/api/sendotp.php?template=&otp_length=&authkey=$authkey&message=$message&sender=OTPSMS&mobile=$to&otp=$otp&otp_expiry=&email=",
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => "",
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 100,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => "GET",
              CURLOPT_SSL_VERIFYHOST => 0,
              CURLOPT_SSL_VERIFYPEER => 0,
            ));

            $response = curl_exec($curl);
            $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            $err = curl_error($curl);
            
            curl_close($curl);
            if ($err) {
              return "cURL Error #:" . $err;
            } else {
              return $httpcode;
            } */
			//require '../common/constants.php';
			require 'Osms.php';
			
			//use \Osms\Osms;

			$config = array(
				'clientId' => clientId,
				'clientSecret' => clientSecret,
				'verifyPeerSSL' => false
			);

			$osms = new Osms($config);

			//$osms->setVerifyPeerSSL(false);

			$response = $osms->getTokenFromConsumerKey();

			if (empty($response['error'])) {
				$token = $response['access_token'];
				$config = array(
					'token' => 'A76vGOLxIlTUXHKK6Lofd6K9qPpy',
					'verifyPeerSSL' => false
				);

				$osms = new Osms($config);

				//$osms->setVerifyPeerSSL(false);
				if(strpos($to,"-") >= 0){
					$to = str_replace("-","",$to);
				}
				if(strpos($to,"+")){
					
				}else{
					$to = "+".$to;
				}
				$response = $osms->sendSms(
					// sender
					'tel:+237699410000',
					// receiver
					'tel:'.$to,
					// message
					$message,
					SITE_NAME
				);
				if (empty($response['error'])) {
					return 200;
				} else {
					return 'error';//$response['error'];
				}
			} else {
				return 'error';//$response['error'];
			}
	}
}
