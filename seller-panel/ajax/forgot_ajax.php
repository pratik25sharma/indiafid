<?php 
require_once '../common/constants.php';
function __autoload($className) {
    include '../classes/'.$className . '.php';
}
$crud= new Crud;
$error='';
$sucess='';
$error='';
$success='';
if(isset($_POST['email']) && !empty($_POST)){
	$data=array(
		'email'=>$_POST['email']
	);
	$fields=array('email');
	$validation = new Validation;
	$message=$validation->check_empty($data,$fields);
	if($message == null || $message=''){
		$validemail = $validation->is_email_valid($data['email']);
		if(!$validemail){
			$message = "Enter valid email";
		}
	}
	if($message == null || $message=''){
		$email=$data['email'];
		$email = $crud->escape_string($email);
		$sql="select * from users where email='$email'";
		$result = $crud->getData($sql);
		if(!empty($result)){
			$user_key =md5(uniqid($result[0]['id'], true));
			$code=$user_key .'::USE::'. $result[0]['id'];
			$user_id = $result[0]['id'];
			$url = SITE_URL.'/login';
			$sql="update users set reset_code = '$user_key' where id = '$user_id'";
			$crud->execute($sql);
			$reset_url= SITE_URL.'/?resetpassword=true&code='.$code;

            $metadata=array(
				'username'=>$result[0]['name'],
				'reset_url'=>$reset_url,
				'login_url'=>$url,
				'logo_url'=>ASSET_URL.'/images/logo.jpg',
				'site_url'=>SITE_URL,
				'site_name'=>SITE_NAME,
				'site_mail_id'=>ADMIN_EMAIL,
				'THANK_YOU_IMG'=>ASSET_URL.'images/thankyou.png',
				'LOGIN_URL'=>SITE_URL,
				'LOGO_URL'=>ASSET_URL.'images/logo.png'
			);
			$body=file_get_contents(DIR_SYSTEM.'/mails/forgot.html');

			$emaillib = new Email;

			$body=$emaillib->parseData($metadata,$body);
			$subject = 'Forgot Password.';
			$emaillib->sendemail($body,$subject,$data['email']);
			$success = "We have sent an email to ".$data['email']." with instructions on how to reset your password";
		}else{
			$error= "Email does not exists";
		}
	}else{
		$error = $message;
	}
	if(empty($error)){
		echo json_encode(array('status'=>true,'message'=>$success));
	}else{
		echo json_encode(array('status'=>false,'message'=>$error));
	}
}
?>