<?php
require_once '../common/constants.php';
function __autoload($className) {
	include '../classes/'.$className . '.php';
}
$crud = new Crud;
if(!empty($_POST)){
	$user_id=$_POST['user_id'];
	$status=$_POST['status'];
	$sql = "update users set status = $status where id = $user_id";
	$crud->execute($sql);
	if($status == 0){
		$statusSubject = 'Unapproved';
		$statusMessage = 'Your account is disabled by admin';
	}else{
		$statusSubject = 'approval';
		$statusMessage = 'Your account is approved by admin';
	}
	//send email
	$sql="select * from users where id='$user_id'";
	$result=$crud->getData($sql);
	$metadata=array(
		'message' => $statusMessage,
		'name' => (!empty($result[0]['name']) ? $result[0]['name'] : ""),
		'site_url'=>SITE_URL,
		'site_name'=>SITE_NAME,
		'site_mail_id'=>ADMIN_EMAIL,
		'THANK_YOU_IMG'=>ASSET_URL.'images/thankyou.png',
		'LOGIN_URL'=>SITE_URL,
		'LOGO_URL'=>ASSET_URL.'images/logo.png'
	);
	$body=file_get_contents(DIR_SYSTEM.'/mails/account-status.html');
	
	$emaillib = new Email;
	
	$body=$emaillib->parseData($metadata,$body);
	$subject = SITE_NAME . ': Account '.$statusSubject;
	$emaillib->sendemail($body,$subject,$result[0]['email']);
}
?>