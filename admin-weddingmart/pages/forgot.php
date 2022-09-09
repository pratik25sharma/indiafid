<?php
$error='';
$success='';

if(isset($_POST['email']) && !empty($_POST)){
$data=array(
'email'=>$_POST['email']

);

$fields=array('email');
$validation = new validation;
$message=$validation->check_empty($data,$fields);
if($message == null || $message=''){
   $validemail=$validation->is_email_valid($data['email']);
	  if(!$validemail){
                $message = "Enter valid email";
            }
	   
   }


   if($message == null || $message=''){
     $crud = new crud ;
	 $email=$data['email'];
	  $email = $crud->escape_string($email);
	  
	  $sql="select *  from users  where email='$email'";
	  
     $result = $crud->getData($sql);
            if(!empty($result)){
				$user_key =md5(uniqid($result[0]['id'], true));
				$code=$user_key .'::USE::'. $result[0]['id'];
				
				
				$user_id = $result[0]['id'];
				  $url = SITE_URL.'/login';
				$sql="update users set reset_code = '$user_key' where id = '$user_id'";
                  $crud->execute($sql);
                $reset_url= SITE_URL.'/reset/?code='.$code;
				echo $reset_url;
            $metadata=array(
			'username'=>$result[0]['name'],
			'site_url'=>SITE_URL,
			'site_name'=>SITE_NAME,
			'site_mail_id'=>ADMIN_EMAIL,
			'reset_url'=>$reset_url,
			'login_url'=>$url,
			'logo_url'=>ASSET_URL.'/images/logo.jpg'
			
			);
			$body=file_get_contents(DIR_SYSTEM.'/mails/forgot.html');
			$emaillib= new email;
			$body=$emaillib->parseData($metadata,$body);
				$subject = SITE_NAME . ': Reset Password.';
			$emaillib->sendemail($body,$subject,$data['email']);
                                $success = "An email has been sent to reset password";
            }else{
                $error= "Email does not exists";
            }
        }else{
			$error = $message;
		}

}


?>

<div class="registration">
        <div class="reg_header">
          <img src="http://images.shopclues.com/images/ui/shopclues_logo@2x.png">
        </div>
        <div class="new_container">
          
          <div class="login_panel">
           
            <div class="tab_header">
              <ul>
                
                <li class="selected">
                  <a href="javascript:void(0);">Forgot</a>
                </li>
              </ul>
            </div>
			<?php 
	echo isset($success) && !empty($success) ? "<div class='alert alert-success'>".$success."</div>" : "";
			
                echo isset($error) && !empty($error) ? "<div class='alert alert-danger'>".$error."</div>" : "";
                ?>
            <form class="create_account" method="post" action="" id="testform">
              <div class="input-row">
                <label>Email ID</label>
               <input type="text" name="email">
              </div>
             
              <div class="text_ar">
                <a href="javascript:void(0);" class="n_btn orange_fill submit_btn">submit</a>
              </div>
            </form>
          </div>
        </div>
        </div>      
    