<?php
if(!session_id()){
	session_start();
}
include '../common/constants.php';
function __autoload($className) {
	include '../classes/'.$className . '.php';
}
$error='';
$sucess='';
$crud=new Crud;
if(isset($_POST['username']) &&!empty($_POST)){
	$data=array(
		'username'=>$_POST['username'],
		'password'=>$_POST['password'],
	);
	$fields = array();
	$validation = new Validation;
	$message=$validation->check_empty($data,$fields);
	if($message == null || $message == ''){ 
		$username=$data['username'];		
		$password=md5($data['password']);		
		$username=$crud->escape_string($username);
		$password=$crud->escape_string($password);
		$sql="select * from users where (email='$username' OR username='$username') AND user_type=2";
		$result=$crud->getData($sql);
		if(!empty($result)){
			if($result[0]['password'] == $password)
			{
				if($result[0]['status'] != 2){
					$_SESSION['user']=$result[0];
					$url = SITE_URL.'/dashboard';
				}else{
					$error = "Your account is deactivated.";
				}
			}else{
				$error = "Incorrect password.";
			}
		}
		else{
			$error = "Invalid email/username.";
		}
	}else{
		$error=$message;
	}
	if(!empty($url)&& empty($error)){
		echo json_encode(array('status'=>true,'message'=>$url));
	}else{
		echo json_encode(array('status'=>false,'message'=>$error));
	}
}
?>
