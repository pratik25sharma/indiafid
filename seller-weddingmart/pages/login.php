<?php
$success = '';$error='';
if(isset($_POST['email']) && !empty($_POST)){
$data=array(
'email'=>$_POST['email'],
'password'=>$_POST['password'],
);
	$fields = array('email','password');
$validation = new Validation;

$message=$validation->check_empty($data,$fields);
if($message == null || $message == ''){
 $validemail = $validation->is_email_valid($data['email']);
            if(!$validemail){
                $message = "Enter valid email";
            }
        }
		
		
		if($message == null || $message == ''){ 
$crud = new Crud;
$email=$data['email'];		
$password=md5($data['password']);		

		        

$email=$crud->escape_string($email);
$password=$crud->escape_string($password);


	
$sql="select * from users where email='$email' AND user_type=2";

$result=$crud->getData($sql);
	
	
	
	

if(!empty($result)){
	
	session_start();
	$_SESSION['user']=$result[0];

	if($result[0]['password'] == $password)
	{
		//echo "correct password.";
	
	
	
		
if($result[0]['status'] == 1){
	$url = SITE_URL.'/dashboard';
	echo '<script type="text/javascript">
								location.replace("'.$url.'");
						  </script>';

//echo "login successfully";
}
else{
	
	$error= "Your account is not approved.";
	
}

	}
	
	else{
		
		$error="Incorrect password.";
	}
		


}

else{
                $error= "Invalid email.";
            }
        }
		else{
            $error = $message;
        }

}



?>
		
    
    	<div class="registration">
        <div class="reg_header">
          <img src="<?php echo ASSET_URL ;?>image/weddingmart_logo.png">
        </div>
        <div class="new_container">
          
          <div class="login_panel">
            <h2>Create an Account or Login</h2>
            <div class="tab_header">
              <ul>
                <li>
                  <a href="<?php echo SITE_URL?>/online_store">Register</a>
                </li>
                <li class="selected">
                  <a href="<?php echo SITE_URL ?>/login">Login</a>
                </li>
              </ul>
            </div>
			<?php  
                echo isset($error) && !empty($error) ? "<div class='alert alert-danger'>".$error."</div>" : "";
                ?>
            <form class="create_account" method="post" action="" id="testform">
              <div class="input-row">
                <label>Email ID</label>
               <input type="text" name="email">
              </div>
              <div class="input-row">
                <label>Password</label>
                <span class="paswword_icon">
                <input type="Password" name="password" class="pass">
                <i class="eye"></i>
                <a href="<?php echo SITE_URL ?>/forgot" class="forget_pass">Forget Password?</a>
                </span>
              </div>
              <div class="text_ar">
                <a href="javascript:void(0);" class="n_btn orange_fill submit_btn">Login</a>
              </div>
            </form>
          </div>
        </div>
        <div class="need_help">
          <p>Need help? <a href="javascript:void(0);">Click here</a> for free training.</p>
        </div>
      </div>      
    