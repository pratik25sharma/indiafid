<?php
session_start();
function __autoload($className) {

    include '../classes/'.$className . '.php';

}

$crud=new Crud;
$id= $_SESSION['user']['id'];


   $sql1 = "Select *from users where id = '$id'";

    $result1 = $crud->getData($sql1);

	

    if(!empty($result1)){

        $user = $result1[0];

    }


?>



<div class="popup_box seller_details business_details">
            <h4>Business Details</h4>
            
			<form action="" id="bussiness_form_update" method="post">
                <div class="details_form">
                    <div class="row default_form">
                        <div class="inpt_group">
                            <input type="text" name="name" value="<?php echo $user['name'];?>" class="label_jump">
                            <label>Business Name*</label>
                        </div>
                    
                        <div class="inpt_group">
							<input type="hidden" name="send_email" value="<?php echo !empty($user['gstin']) ? 'no' : 'yes';?>" class="label_jump"/>
                            <input type="text" name="gstin" value="<?php echo $user['gstin'];?>" class="label_jump">
                            <label>Business Name*</label>
                        </div>
                    
                        <div class="inpt_group">
                            <input type="text" name="address1" value="<?php echo $user['address1'];?>" class="label_jump">
                            <label>Address*</label>
                        </div>
                    
                        <div class="inpt_group">
                            <input type="text" name="pincode" value="<?php echo $user['pincode'];?>" class="label_jump">
                            <label>Pincode*</label>
                        </div>
                    
                        <div class="inpt_group">
                            <input type="text" name="city" value="<?php echo $user['city'];?>" class="label_jump">
                            <label>City*</label>
                        </div>
                    
                        <div class="inpt_group">
                            <input type="text" name="state" value="<?php echo $user['state'];?>" class="label_jump">
                            <label>State*</label>
                        </div>
                    </div>
                </div>
                <div class="row submit_row">
                    <a href="javascript:void(0);" class="cancel_popup" title="">Cancel</a>
                    <input type="submit" value ="Save"  name="submit">
                </div>
            </form>
        </div>