<?php
if(!session_id()){
	session_start();
}
if(isset($_SESSION['tmp_user']) &&  !empty($_SESSION['tmp_user'])){
	
}else{
	$url = SITE_URL.'/online_store';
	echo '<script type="text/javascript">
								location.replace("'.$url.'");
						  </script>';

}


$error='';
if (isset($_POST['name'])  && !empty($_POST) ){
$data=array(
'name'=>$_POST['name'],
'email'=>$_POST['email'],
'password'=>$_POST['password'],
'mobile'=>$_POST['mobile']
);

 
$fields=array('name','email','password','mobile');
$validation = new validation;
$message=$validation->check_empty($data,$fields);
if($message == null || $message == ''){
 $validemail = $validation->is_email_valid($data['email']);
            if(!$validemail){
                $message = "Enter valid email";
            }else{
			  $crud = new Crud;
			  $email=$data['email'];
			$sql = "Select email from users where email='$email'";
			$result = $crud->getData($sql);			     
			        if(isset($result) && !empty($result)){
            $message= "email already exists.";
					}
			}
        }

	
	
	
if($message == null || $message == ''){

	$contact =array(
	'name'=>$_POST['name'],
'email'=>$_POST['email'],
'password'=>$_POST['password'],
'mobile'=>$_POST['mobile']
);
	

	$_SESSION['contact_user']=$contact;
	$url = SITE_URL.'/business_details';
	echo '<script type="text/javascript">
								location.replace("'.$url.'");
						  </script>';

}else{
	$error= $message;
}
}

?>

    	<div class="mydetails_panel bank_info">
            <div class="new_container">
              <div class="my_account">
                <span>My Account<i></i><em></em></span>
              </div>
              <div class="left_panel">
                  <div class="merchant_info">
                      <h1>MICRO MARKETING<span>Chennai , Tamil Nadu</span></h1>
                  </div>
                  <ul class="merchant_tags">
                      <li><a href="javascript:void(0);" class="online_store">Online Store Info</a></li>
                      <li><a href="javascript:void(0);" class="contact active">Contact Details</a></li>
                      <li><a href="javascript:void(0);" class="business">Business Details</a></li>
                      <li><a href="javascript:void(0);" class="bank">Bank Info</a></li>
                     
                  </ul>
              </div>
              <div class="spacing"></div>
              <div class="right_panel">
                  <h1>Contact Details</h1>
				  <?php  
                echo isset($error) && !empty($error) ? "<div class='alert alert-danger'>".$error."</div>" : "";
                ?>
				  
				  
                  <form action="" method="post" id="testform">
                      <ul>
                          <li class="input-row">
                               <span>
                                   <label>Name</label>
                               </span> 
                               <span>
                                   <input type="text" name="name">
                               </span>
                          </li>
                           <li class="input-row">
                               <span>
                                   <label>Mobile</label>
                               </span> 
                               <span>
                                   <input type="text" name="mobile" >
                               </span>
                          </li>
                           <li class="input-row">
                               <span>
                                   <label>Email</label>
                               </span> 
                               <span>
                                <input type="email" name="email">
                               </span>
                          </li>
                           <li class="input-row">
                               <span>
                                   <label>Password</label>
                               </span> 
                               <span>
                                   <input type="Password" name="password">
                               </span>
                          </li>                                       
                      </ul>
                      <a href="javascript:void(0);" class="n_btn orange_fill bank_details_save submit_btn">Save Details</a>
                  </form>
              </div>
            </div>
        </div>
        