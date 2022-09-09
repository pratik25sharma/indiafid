<?php
if(!session_id()){
	session_start();
}
if(isset($_SESSION['business_user']) &&  !empty($_SESSION['business_user'])){
	
}else{
	$url = SITE_URL.'/business_details';
	echo '<script type="text/javascript">
								location.replace("'.$url.'");
						  </script>';

}


$error='';
if(isset($_POST['bank_city']) && !empty($_POST) ){
$data=array(
'account_holder_name'=>$_POST['account_holder_name'],
'account_number'=>$_POST['account_number'],
'account_type'=>$_POST['account_type'],
'ifsc_code'=>$_POST['ifsc_code'],
'bank_name'=>$_POST['bank_name'],
'bank_state'=>$_POST['bank_state'],
'bank_city'=>$_POST['bank_city'],
'branch'=>$_POST['branch']

);

$fields=array('account_holder_name','account_number','account_type','ifsc_code','bank_name','bank_state','bank_city','branch');

$validation = new validation;
$message=$validation->check_empty($data,$fields);
if($message == null || $message == ''){

$crud = new crud;




$password = md5($_SESSION['contact_user']['password']);

$insert=array(
'name_online_store'=>$_SESSION['tmp_user']['name_online_store'],
'store_logo'=>$_SESSION['tmp_user']['store_logo'],
'online_store_description'=>$_SESSION['tmp_user']['online_store_description'],
'name'=>$_SESSION['contact_user']['name'],
'email'=>$_SESSION['contact_user']['email'],
'password'=>$password,
'mobile'=>$_SESSION['contact_user']['mobile'],
'company_legal_name'=>$_SESSION['business_user']['company_legal_name'],
'cst_number'=>$_SESSION['business_user']['cst_number'],
'gstin'=>$_SESSION['business_user']['gstin'],
'registered_address'=>$_SESSION['business_user']['registered_address'],
'pincode'=>$_SESSION['business_user']['pincode'],
'city'=>$_SESSION['business_user']['city'],
'state'=>$_SESSION['business_user']['state'],
'user_type'=>2,
'status'=>0

);


$response = $crud->insertData('users',$insert);
print_r  ($response);
		$response = json_decode($response);
		
		$user_id = isset($response) && !empty($response) && $response->status ? $response->message : "";
					if(isset($user_id) && $user_id>0){
					



$bank_details=array(

'account_holder_name'=>$_POST['account_holder_name'],
'account_number'=>$_POST['account_number'],
'account_type'=>$_POST['account_type'],
'ifsc_code'=>$_POST['ifsc_code'],
'bank_name'=>$_POST['bank_name'],
'bank_state'=>$_POST['bank_state'],
'bank_city'=>$_POST['bank_city'],
'branch'=>$_POST['branch'],
'user_id'=>$user_id
);



$crud->insertData('bank_info',$bank_details);
 	$success = 'Successfully insert users';
	


					}
					
					
					
					$url = SITE_URL.'/login';
	echo '<script type="text/javascript">
								location.replace("'.$url.'");
						  </script>';

					
					
					
}





else{
	$error=$message;
	
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
                      <li><a href="javascript:void(0);" class="contact">Contact Details</a></li>
                      <li><a href="javascript:void(0);" class="business">Business Details</a></li>
                      <li><a href="javascript:void(0);" class="bank active">Bank Info</a></li>
                     
                  </ul>
              </div>
              <div class="spacing"></div>
              <div class="right_panel">
                  <h1>Bank Details</h1>
				  <?php  
				    echo isset($success) && !empty($success) ? "<div class='alert alert-success'>".$success."</div>" : "";
                echo isset($error) && !empty($error) ? "<div class='alert alert-danger'>".$error."</div>" : "";
                ?>
 
                  <form action="" method="post" id="testform">
                      <ul>
                          <li class="input-row">
                               <span>
                                   <label>Account Holder’s Name</label>
                               </span> 
                               <span>
                                   <input type="text" name="account_holder_name">
                               </span>
                          </li>
                           <li class="input-row">
                               <span>
                                   <label>Account Number</label>
                               </span> 
                               <span>
                                   <input type="text" name="account_number">
                               </span>
                          </li>
                           <li class="input-row">
                               <span>
                                   <label>Account Type</label>
                               </span> 
                               <span>
                                  <div class="common_dropdown">
                                        <select name="account_type" >
										<option value="" >Select Account</option>
										<option value="current" >Current</option>
										<option value="saving">saving</option>
										
                                        </select>
										
                                    </div>
                               </span>
                          </li>
                           <li class="input-row">
                               <span>
                                   <label>IFSC Code</label>
                               </span> 
                               <span>
                                   <input type="text" name="ifsc_code">
                               </span>
                          </li>
                           <li class="input-row">
                               <span>
                                   <label>Bank Name</label>
                               </span> 
                               <span>
                                  <input type="text" name="bank_name">
                               </span>
                          </li>
                           <li class="input-row">
                               <span>
                                   <label>State</label>
                               </span> 
                               <span>
                                   <div class="common_dropdown">
                                        
                                    <select name="bank_state">
									   <option value="">Select State</option>
									   <?php
                                        $crud = new crud;
									   $sql = "SELECT state_name from state_list";
										$result = $crud->getData($sql);
										if(!empty($result)){
											foreach($result as $res){
												?>
												
												
											
							
                <option value="<?php echo $res['state_name']; ?>"><?php echo $res['state_name']; ?></option>
                <?php
				}
										}
                ?>
                </select>

										</div>
                               </span>
                          </li>
                           <li class="input-row">
                               <span>
                                   <label>City</label>
                               </span> 
                               <span>
                                   <input type="text" name="bank_city">
                               </span>
                          </li>
                           <li class="input-row">
                               <span>
                                   <label>Branch</label>
                               </span> 
                               <span>
                                   <input type="text" name="branch">
                               </span>
                          </li>
                      </ul>
                      <a href="javascript:void(0);" class="n_btn orange_fill bank_details_save submit_btn">Save Bank Details</a>
                  </form>
              </div>
            </div>
        </div>
        