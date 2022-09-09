<?php
if(!session_id()){session_start();}
function __autoload($className) {
	include '../classes/'.$className . '.php';
}
$success = '';$error='';			
$crud=new Crud;

$id= $_SESSION['user']['id'];
if(isset($_POST['account_holder_name']) && !empty($_POST)){
	$data = array(
		'account_holder_name'=>$_POST['account_holder_name'],
		'account_number'=> $_POST['account_number'],
		'ifsc_code'=> $_POST['ifsc_code'],
		'account_type'=> $_POST['account_type'],
		'bank_name'=> $_POST['bank_name'],
		'bank_state'=> $_POST['bank_state'],
		'bank_city'=> $_POST['bank_city'],
		'branch'=> $_POST['branch']
	);
	$fields = array('account_holder_name','account_number','ifsc_code','account_type','bank_name','bank_state','bank_city','branch');
	$validation = new Validation;
	$message = $validation->check_empty($data,$fields);
	if($message == null || $message == ''){
		$sql = "Select * from bank_info where user_id = '$id'";
		$result = $crud->getData($sql);
		if(!empty($result)){
			$sql = "update  bank_info set  account_holder_name= '".$_POST['account_holder_name']."', account_number= '".$_POST['account_number']."', ifsc_code= '".$_POST['ifsc_code']."',account_type= '".$_POST['account_type']."',bank_name= '".$_POST['bank_name']."', bank_state= '".$_POST['bank_state']."',bank_city= '".$_POST['bank_city']."',branch= '".$_POST['branch']."' where user_id ='$id'";
			$crud->execute($sql);
		}else{
			$bank_info = array(
				'account_holder_name'=>$_POST['account_holder_name'],	
				'account_number'=>$_POST['account_number'],
				'ifsc_code'=>$_POST['ifsc_code'],
				'account_type'=>$_POST['account_type'],
				'bank_name'=>$_POST['bank_name'],
				'bank_state'=>$_POST['bank_state'],
				'bank_city'=>$_POST['bank_city'],
				'branch'=>$_POST['branch'],
				'user_id'=>$id
			);
			$crud->insertData('bank_info',$bank_info);
		}
		$success = 'Successfully updated bank info';
	}else{
		$error = $message;
	}

	if(empty($error)){
		echo json_encode(array('status'=>true,'message'=>"update successfully"));
	}else{
		echo json_encode(array('status'=>false,'message'=>$error));
	}
}
?>