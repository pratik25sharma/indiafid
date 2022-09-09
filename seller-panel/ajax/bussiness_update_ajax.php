<?php
if(!session_id()){session_start();}
require_once '../common/constants.php';
function __autoload($className) {
	include '../classes/'.$className . '.php';
}
$success = '';$error='';			
$crud = new Crud; 

$id= $_SESSION['user']['id'];
if(isset($_POST['name'])){
	$data = array(
		'name'=>$_POST['name'],
		'gstin'=> $_POST['gstin'],
		'address1'=> $_POST['address1'],
		'address2'=> $_POST['address2'],
		'pincode'=> $_POST['pincode'],
		'city'=> $_POST['city'],
		'state'=> $_POST['state']
	);
	$fields = array('name','gstin','address1','pincode','city','state');
	$validation = new Validation;
	$message = $validation->check_empty($data,$fields);
	if($message == null || $message == ''){
	    $sql = "update users set name= '".$_POST['name']."', gstin= '".$_POST['gstin']."', address1= '".$_POST['address1']."', address2= '".$_POST['address2']."', city= '".$_POST['city']."', pincode= '".$_POST['pincode']."', state= '".$_POST['state']."' where id ='$id'";
		$crud->execute($sql);
		//send email for unapproved account
		if(isset($_POST['send_email']) && !empty($_POST['send_email']) && ($_POST['send_email'] == 'yes')){
			if(!empty($_POST['gstin'])){
				//send email
				$metadata=array(
					'name' => (!empty($_POST['name']) ? $_POST['name'] : ""),
					'site_url'=>SITE_URL,
					'site_name'=>SITE_NAME,
					'site_mail_id'=>ADMIN_EMAIL,
					'THANK_YOU_IMG'=>ASSET_URL.'images/thankyou.png',
					'LOGIN_URL'=>SITE_URL,
					'LOGO_URL'=>ASSET_URL.'images/logo.png'
				);
				$body=file_get_contents(DIR_SYSTEM.'/mails/waiting-approval.html');

				$emaillib = new Email;
				
				$body=$emaillib->parseData($metadata,$body);
				$subject = SITE_NAME . ': Waiting approval';
				$emaillib->sendemail($body,$subject,$_SESSION['user']['email']);
			}
		}
		
		$success = 'Business details updated successfully';
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

  