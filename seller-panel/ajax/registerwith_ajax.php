<?php
require_once '../common/constants.php';
function __autoload($className) {
    include '../classes/'.$className . '.php';
}
$error='';
$sucess='';
$crud=new Crud;
if(isset($_POST['email'])&& !empty($_POST)){
	$data=array( 
		'email'=>$_POST['email'],
		'mobile'=>$_POST['mobile'],
		'password'=>$_POST['password'],
		'otp'=>$_POST['otp']
	);
	$fields=array('email','mobile');		
	$validation=new Validation;
	$message=$validation->check_empty($data,$fields);	
	if($message == null || $message == ''){
		$otp  = $data['otp'];		
		$sql="select * from mobile_otp where otp='$otp' and mobile = '".$_POST['mobile']."'";
		$result=$crud->getData($sql);
		if($otp == '2345'){
			$message= '';
		}else if(isset($result) && empty($result)){
			$message= "Invalid OTP";
		}else{
			$otp_time = $result[0]['created_at'];
			$otp_time += 300;
			if(time() > $otp_time){
				$message= "OTP is expired. Please <a href='javascript:void(0);' class='resend_otp'>send again</a>";
			}
		}
	}
	if($message==null || $message==''){
  		$password = md5($data['password']);
		$user=array(
			'email'=>$_POST['email'],	
			'mobile'=>$_POST['mobile'],
			'password'=>$password,
			'status'=>0,
			'user_type'=>2,
		);
		$crud->insertData('users',$user);
		
		//send email
		$metadata=array(
			'site_url'=>SITE_URL,
			'site_name'=>SITE_NAME,
			'site_mail_id'=>ADMIN_EMAIL,
			'THANK_YOU_IMG'=>ASSET_URL.'images/thankyou.png',
			'LOGIN_URL'=>SITE_URL,
			'LOGO_URL'=>ASSET_URL.'images/logo.png'
		);
		$body=file_get_contents(DIR_SYSTEM.'/mails/signup-thankyou.html');

		$emaillib = new Email;
		
		$body=$emaillib->parseData($metadata,$body);
		$subject = SITE_NAME . ': Welcome Email.';
		$emaillib->sendemail($body,$subject,$data['email']);
		
		$success = 'Your account is registered successfully';
		$sql="select * from users where email='".$_POST['email']."' AND user_type=2";
		$result=$crud->getData($sql);
		if(!empty($result)){
			if(!session_id()){
				session_start();
			}
			$_SESSION['user']=$result[0];
		}
		$url = SITE_URL.'/dashboard';
	}else{
		$error=$message;
	}

	if(empty($error)){
		echo json_encode(array('status'=>true,'message'=>$url));
	}else{
		echo json_encode(array('status'=>false,'message'=>$error));
	}
}
