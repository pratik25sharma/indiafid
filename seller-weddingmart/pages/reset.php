<?php
$warning='';
if(isset($_GET['code']) && !empty($_GET['code'])){
$token=$_GET['code'];
$verify_code=explode("::",$token);
$requested_token=$verify_code[0];
$type=$verify_code[1];
$user=$verify_code[2];

$crud= new crud;
$sql="select * from users where id ='$user' ";
$result=$crud->getdata($sql);
if(!empty($result)){
	if($type == 'USE' ){
		if($requested_token == $result[0]['reset_code']){
			$userid=$result[0]['id'];
		}
		else{
			$warning="Invalid URL";
		}
	}
	else{
		
			$warning="Invalid URL";
	}
}
else{
	$warning="Invalid URL";
	
}
}

$success=''; $error='';
if(isset($_POST['password'])&& !empty($_POST)  ){
	if(isset($userid)){
		
		$data=array(
		'password'=>$_POST['password'],
		'confirmpassword'=>$_POST['confirmpassword']
			);
		$fields=array('password','confirmpassword');
		$validation = new validation;
$message = 	$validation->check_empty($data,$fields);
if($message == null || $message = ''){
		if($data['password']== $data['confirmpassword']){
			$password=md5 ($data['password']);
			$sql="update users set password='$password' where id ='$userid'";
			$crud->execute($sql);
			
		$url = SITE_URL.'/login';
	echo '<script type="text/javascript">
								location.replace("'.$url.'");
						  </script>';

		
		}
		else{
				$error = 'Password does not match';
			}
			
}
else{
			$error = $message;
		}
	}
		else{
            $warning = 'Invalid User';
        }
		
}
		
	?>	

	
	<div class="registration">
        <div class="reg_header">
          <img src="<?php echo ASSET_URL ;?>image/weddingmart_logo.png">
        </div>
        <div class="new_container">
          
          <div class="login_panel">
            
             <?php if(isset($warning) && !empty($warning)){
                    echo isset($warning) && !empty($warning) ? "<div class='alert alert-warning'>".$warning."</div>" : "";
                }else{
			
			echo isset($success) && !empty($success) ? "<div class='alert alert-success'>".$success."</div>" : "";
			echo isset($error) && !empty($error) ? "<div class='alert alert-danger'>".$error."</div>" : "";
			?>

			<form class="create_account" method="post" action="" id="testform">
              <div class="input-row">
                <label>New password:</label>
               <input type="password" name="password">
              </div>
              <div class="input-row">
                <label>confirmpassword</label>
                
                <input type="Password" name="confirmpassword"  class="pass">
                
                
                
              </div>
              <div class="text_ar">
                <a href="javascript:void(0);" class="n_btn orange_fill submit_btn">Reset</a>
              </div>
            </form>
			<?php } ?>
          </div>
        </div>
     
      </div>      
    
	


























