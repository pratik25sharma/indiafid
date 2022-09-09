<?php
$success = '';$error='';			

if(isset($_POST['submit']) && !empty($_POST)){	$data = array(
	'name'=>$_POST['name'],
	'email'=>$_POST['email'],
	'password'=>$_POST['password'],
	'confirm_password'=>$_POST['confirm_password'],
	'mobile'=>$_POST['mobile'],
	'gstin'=> $_POST['gstin'],
	
		
);
	$fields = array('name','email','password','confirm_password','mobile','gstin');
$validation = new Validation;   
    $message=$validation->check_empty($data,$fields);
	
	if($message==null || $message==''){
		$crud = new crud;	
		
		$validemail =$validation->is_email_valid($data['email']);
if(!$validemail){
                $message = "Enter valid email";
            }
			else{
		
		$email=$data['email'];
$sql =  "select email from users where email='$email'";

          $result = $crud->getData($sql);                 

if(isset($result)&& !empty($result)){
	$message= "email already exists";	
	}
	}
	}	
			
        
		if($message==null || $message==''){
if($_POST['password']==$_POST['confirm_password']){
	
$password=$_POST['password'];
	
}
else{
	$message="not confirm password";
}
		}
		
		
		
	  	if($message == null || $message == ''){
		

  		$md5password = md5($password);

		

$user_details = array(
							
							'name'=>$_POST['name'],
							'email'=>$_POST['email'],
							'password' =>$md5password,

							'mobile'=>$_POST['mobile'],
							'gstin'=>$_POST['gstin'],
							'status'=>0,
	       					'user_type'=>3
							);
							$crud->insertData('users',$user_details);
						

		
		}
		else{
			$error=$message;
		}
		
		
}
		
		
		
		

?>

											
											
    <div class="wrapper mt-20 mb-20">
        <section class="blocks add_category">
            <h2>Add User</h2>
          <?php  echo isset($success) && !empty($success) ? "<div class='alert alert-success'>".$success."</div>" : "";echo isset($error) && !empty($error) ? "<div class='alert alert-danger'>".$error."</div>" : "";?>


<form action="" method="post" enctype="multipart/form-data">
            <table class="table-2 mt-20">

 <tr>
                    <td>Name</td>
              <td><input type ="text" name="name"></td>
                </tr>
 <tr>
                    <td>Email</td>
              <td><input type ="text" name="email"></td>
                </tr>

 <tr>
                    <td>Password</td>
              <td><input type ="password" name="password"></td>
                </tr>
 <tr>
                    <td>Confirm Password</td>
              <td><input type ="password" name="confirm_password"></td>
                </tr>
<tr>
                    <td>Mobile Number</td>
              <td><input type ="text" name="mobile"></td>
                </tr><tr>
				
                    <td>GST Number</td>
              <td><input type ="text" name="gstin"></td>
                </tr>


<td><input type="submit"name="submit" class="enter btn"></td>

</table>
</form>

</section>
</div>