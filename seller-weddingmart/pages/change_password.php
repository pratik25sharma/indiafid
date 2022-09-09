<?php
$error='';
$success='';
$crud= new crud;

	$_SESSION['user'];

	$id= $_SESSION['user']['id'];
	$pass=$_SESSION ['user']['password']; 

$sql="select * from users where id = $id";
$result=$crud->getdata($sql);

if(!empty($result)){
$user=$result[0];
}



if(isset($_POST['old_password'])&& !empty($_POST)  ){
$data=array(
'old_password'=>$_POST['old_password'],
'new_password'=>$_POST['new_password'],
'confirm_password'=>$_POST['confirm_password'],

);

$fields=array('old_password','new_password','confirm_password');
$validation  = new validation;
$message= $validation->check_empty($data,$fields);

	if($message == null || $message == ''){
		if (md5($data['old_password'])==$pass){
			
			
		
		if($data['new_password']== $data['confirm_password']){
			$new_password=md5($data['new_password']);
			$sql="update users set password='$new_password' where id =$id";
			$crud->execute($sql);
		   	$success = 'Successfully   Updated password ';
		
		}
		else{
			$error ="password  not match.";
			
		}
			

		}
		else{
			$error="Your password is not correct ";
			
	
}
	}
else{
	
	$error =$message;
}
}
?>
	<?php
	
	
		echo isset($success) && !empty($success) ? "<div class='alert alert-success'>".$success."</div>" : "";
			echo isset($error) && !empty($error) ? "<div class='alert alert-danger'>".$error."</div>" : "";
			?>

	<form action="" method="post"  >
   
 Old Password:<input type="password" name="old_password">
 <br><br>
 New passsword:<input type="password" name="new_password">
 <br><br>
 Confirm password:<input type="password" name="confirm_password">
 <br><br>
<input type="submit" name="submit">
</form>