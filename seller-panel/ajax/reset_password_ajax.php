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
if(!empty($_POST)){
	$data=array(
		'password'=>$_POST['new_password'],
		'confirmpassword'=>$_POST['repeat_password']
	);
	$fields=array('password','confirmpassword');
	$validation = new Validation;
	$message=$validation->check_empty($data,$fields);
	if($message == null || $message == ''){
		$userid = $_POST['userid'];
		if($data['password']== $data['confirmpassword']){
			$password=md5 ($data['password']);
			$sql="update users set password='$password' , reset_code = '' where id ='$userid'";
			$crud->execute($sql);
			$success = "Successfully set new password.";
		}else{
			$error = 'Password does not match';
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