<?php
if(!session_id()){
	session_start();
}
if(isset($_SESSION['contact_user']) &&  !empty($_SESSION['contact_user'])){
	
}else{
	$url = SITE_URL.'/contact';
	echo '<script type="text/javascript">
								location.replace("'.$url.'");
						  </script>';

}

$error='';$success = '';
if(isset($_POST['company_legal_name']) && !empty($_POST) ){
$data=array(
'company_legal_name'=>$_POST['company_legal_name'],
'cst_number'=>$_POST['cst_number'],
'gstin'=>$_POST['gstin'],
'registered_address1'=>$_POST['registered_address1'],
'registered_address2'=>$_POST['registered_address2'],
'pincode'=>$_POST['pincode'],
'city'=>$_POST['city'],
'state'=>$_POST['state']

);

$fields=array('company_legal_name','cst_number','gstin','registered_address1','pincode','city','state');
$validation = new validation;
$message=$validation->check_empty($data,$fields);
if($message == null || $message == ''){
	
	
  
	
	  	$details=array(

'company_legal_name'=>$_POST['company_legal_name'],
'cst_number'=>$_POST['cst_number'],
'gstin'=>$_POST['gstin'],
'registered_address'=>$_POST['registered_address1'].' '.$_POST['registered_address2'],
'pincode'=>$_POST['pincode'],
'city'=>$_POST['city'],
'state'=>$_POST['state']

);



$_SESSION['business_user']=$details;


$url = SITE_URL.'/bank_info';
	echo '<script type="text/javascript">
								location.replace("'.$url.'");
						  </script>';
	
    }
	
	

else{
	
	$error=$message;
	
}

}


?>
    	<div class="mydetails_panel business_details">
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
                      <li><a href="javascript:void(0);" class="business active">Business Details</a></li>
                      <li><a href="javascript:void(0);" class="bank">Bank Info</a></li>
                     
                  </ul>
              </div>
              <div class="spacing"></div>
              <div class="right_panel">
                  <h1>Business Details</h1>
				  <?php  
				    echo isset($success) && !empty($success) ? "<div class='alert alert-success'>".$success."</div>" : "";
                echo isset($error) && !empty($error) ? "<div class='alert alert-danger'>".$error."</div>" : "";
                ?>
				  
                  <form action="" method="post" id="testform" enctype="multipart/form-data">
                      <ul>
                          <li class="input-row">
                               <span>
                                   <label>Company Legal Name</label>
                               </span> 
                               <span>
                                   <input type="text" name="company_legal_name">
                               </span>
                          </li>
                          <li class="input-row">
                               <span>
                                   <label>VAT/CST Number</label>
                               </span> 
                               <span>
                                   <input type="text" name="cst_number">
                               </span>
                          </li>
                            <li class="input-row">
                               <span>
                                   <label>GSTIN</label>
                               </span> 
                               <span>
                                   <input type="text" name="gstin">
                               </span>
                          </li>
                           <li class="registerd input-row">
                               <span>
                                   <label>Registered Address</label>
                               </span> 

                               <span>
                                   <input type="text" name="registered_address1">
								   
                                   <input type="text" name="registered_address2">
                                   <div class="half_input grid-row">
                                       <input type="text" name="city" class="grid6 flt_lt" placeholder="City">
                                       
                                       <div class="common_dropdown flt_rt">
									   <select name="state">
									   <option value="">Select State</option>
									   <?php
                                        $crud = new crud;
									   $sql = "SELECT state_name from state_list";
										$result = $crud->getData($sql);
										if(!empty($result)){
											foreach($result as $res){
												?>
												
												
											
							
                <option value="<?php echo $res['state_name']; ?>"><?php echo $res['state_name']; ?></option>';
                <?php
				}
										}
                ?>
                </select>

									   
                                        
                                    </div>
                                   </div>
                               </span>
                          </li>
                            <li class="input-row">
                               <span>
                                   <label>Pincode</label>
                               </span> 
                               <span class="pincode">
                                   <input type="text" name="pincode">
                                  
                               </span>
                          </li>
                          
                          
                           
                          
                      </ul>
                      <a href="javascript:void(0);" class="n_btn orange_fill submit_btn">Save Business Details</a>
                  </form>
              </div>
            </div>
        </div>
       