<?php
$success = '';$error='';
if(isset($_POST['email']) &&!empty($_POST)){
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
$sql="select * from users where email='$email' AND user_type=1";
$result=$crud->getData($sql);

if(!empty($result)){
	session_start();
	$_SESSION['user']=$result[0];
	if($result[0]['password'] == $password)
	{
		if(isset($_POST['remember_me']) && $_POST['remember_me'] == '1'){
			$hour = time() + 3600 * 24 * 30;
			setcookie('username', $email, $hour);
			setcookie('password', $data['password'], $hour);
		}
		//echo "correct password.";
	$url = SITE_URL.'/dashboard';
	echo '<script type="text/javascript">
		location.replace("'.$url.'");
	</script>';//echo "login successfully";
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
<body class="text-center">
<?php
	echo isset($error) && !empty($error) ? "<div class='alert alert-danger'>".$error."</div>" : "";
?>
<div class="account_bg"></div>
<div class="wrapper_page">
	<div class="card_body">
		<a href="javascript:void(0)" title="" class="logo">
			<!-- <img src="<?php echo ASSET_URL ;?>/images/logo-c.png" alt="Fidus India Logo"> -->
		</a>
		<div class="welcome_text">
			<p>Welcome to <span>Fidus India</span>!</p>
		</div>
		<div class="form_element">
			<form class="form-signin" action ="" method="post" id="testform">
		        <div class="form_group">
		        	<label for="inputEmail">Email address</label>
		        	<input type="text" name= "email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>">
		        </div>
		        <div class="form_group">
		        	<label for="inputPassword">Password</label>
			        <input type="password" name= "password" id="inputPassword" class="form-control" placeholder="Password" required="" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>">
		        </div>
		        <div class="checkbox mb-3"></div>
		        <div class="form_group">
		        	<div class="remember_me">
		        		<input type="checkbox" name="remember_me" value="1">
		        		<span>Remember me</span>
		        	</div>
		        	<button class="btn signIn" type="submit" onClick="document.location.href='user-list.php'">Sign in</button>
		        </div>
		        <p class="mt-3 text-muted">© 2018-2019</p>
		    </form>
		</div>
	</div>
</div>