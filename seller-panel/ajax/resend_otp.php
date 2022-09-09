<?php
require_once '../common/constants.php';
function __autoload($className) {
	include '../classes/'.$className . '.php';
}
$error= array();$sucess='';
$crud=new Crud;

$str = $crud->generateRandonNumber(4);
if(isset($_POST['mobile'])&& !empty($_POST)){
	$data=array( 
		'mobile'=>$_POST['mobile']
	);
	$fields=array('mobile');		

	$validation=new Validation;

	$message = $validation->check_empty($data,$fields);	
	if($message==null || $message==''){
		$mobile=$data['mobile'];
		$sql="select mobile from users where mobile='$mobile'";
		$result=$crud->getData($sql);
		if(isset($result)&& !empty($result)){
			$message="Your mobile is already registerd";
			$mobile_error="Your mobile is already registerd";
		}
	}else{
		$error['main']=$message ;
	}		
	if($message==null || $message==''){
		$mobile=$data['mobile'];
		$sql1="select mobile from mobile_otp where mobile='$mobile'";
		$result=$crud->getData($sql1);
	
		if(isset($result)&& !empty($result)){
			$sql="update mobile_otp set otp ='$str', created_at = '".time()."' where mobile='$mobile'";
			$crud->execute($sql);
		}else{
			$count=array(
				'mobile'=>$_POST['mobile'],
				'otp'=>$str,
				'created_at'=>time()
			);
			$crud->insertData('mobile_otp',$count);
			$success = 'Successfully inserted otp';
		}
		$message = 'Your login OTP is '.$str;
		$mobilenumber = $_POST['mobile'];
		$api_key = '45CC8310EB660D';
		$from = 'ALERTS';
		$ch = curl_init();
		curl_setopt($ch,CURLOPT_URL, "http://www.global91sms.in/app/smsapi/index.php");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, "key=".$api_key."&routeid=459&type=text&contacts=".$mobilenumber."&senderid=".$from."&msg=".urlencode($message));
		$response = curl_exec($ch);
		$err = curl_error($ch);
		curl_close($ch);
		//echo $response;
		
		
		/*$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => "http://api.msg91.com/api/sendhttp.php?route=4&sender=TESTIN&mobiles=".$mobilenumber."&authkey=".AUTHKEY."&encrypt=&message=".$message."&country=91",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_SSL_VERIFYHOST => 0,
			CURLOPT_SSL_VERIFYPEER => 0,
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);*/

		if ($err) {
		  $error['main'] = $err;
		} else {
		  //echo $response;
		}
	}
	
	if(isset($mobile_error) && !empty($mobile_error)){
		$error['mobile']= $mobile_error;
	}
	if(empty($error)){
		echo json_encode(array('status'=>true,'message'=>"OTP resent to your mobile number. This will expire after 5 minutes"));
	}else{
		echo json_encode(array('status'=>false,'message'=>$error));
	}
}
?>
