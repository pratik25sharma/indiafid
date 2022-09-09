<?php
if(!session_id()){session_start();}
function __autoload($className) {
	include '../classes/'.$className . '.php';
}
$crud = new Crud;
$id= $_SESSION['user']['id'];
$sql = "Select *from bank_info where user_id = '$id'";
$result = $crud->getData($sql);
if(!empty($result)){
	$user1 = $result[0];
}
?>

<div class="popup_box seller_details business_details">
	<h4>Bank Details</h4>
	
	<form action="" id="bank_form_update" method="post" class="default_form">
		<div class="details_form">
			<div class="row">
				<div class="inpt_group">
					<input type="text" name="account_holder_name" value="<?php echo isset($user1) ? $user1['account_holder_name'] : "";?>" class="label_jump">
					<label>Account Holder Name*</label>
				</div>
				<div class="inpt_group">
					<input type="text" name="account_number" value="<?php echo isset($user1) ? $user1['account_number'] : "";?>" class="label_jump">
					<label for="">
						Account Number*
					</label>
				</div>
				<div class="inpt_group">
					<input type="text" name="ifsc_code"value="<?php echo isset($user1) ? $user1['ifsc_code'] : "";?>" class="label_jump">
					<label for="">
						IFSC Code*
					</label>
				</div>
				<div class="inpt_group select">
					<select name="account_type" class="label_jump">
						<option value=""></option>
						<option value="saving" <?php echo isset($user1) && $user1['account_type'] == 'saving'  ? "selected" : "";?>>Saving</option>
						<option value="current" <?php echo isset($user1) && $user1['account_type'] == 'current'  ? "selected" : "";?>>Current</option>
					</select>
					<label for="">
						Account Type*
					</label>
                </div>
				<div class="inpt_group">
					<input type="text" name="bank_name" value="<?php echo isset($user1) ? $user1['bank_name'] : "";?>" class="label_jump">
					<label for="">
						Bank Name*
					</label>
				</div>
				<div class="inpt_group select">
					<select name="bank_state" class="label_jump">
						<option value=""></option>
						<?php 
							$sql = "Select * from state_list";
							$result = $crud->getData($sql);
							if(!empty($result)){
								foreach($result as $res){
									$selected = (isset($user1) && ($res['state_name'] == $user1['bank_state'])) ? 'selected' : '';
									echo '<option value="'.$res['state_name'].'" '.$selected.'>'.$res['state_name'].'</option>';
								}
							}
						?>
					</select>
					<label for="">
					   State*
					</label>
				</div>
				<div class="inpt_group">
					<input type="text" name="bank_city" value="<?php echo isset($user1) ? $user1['bank_city'] : "";?>" class="label_jump">
					<label for="">City</label>
				</div>
				<div class="inpt_group">
					<input type="text" name="branch" value="<?php echo isset($user1) ? $user1['branch'] : "";?>" class="label_jump">
					<label for="">Branch</label>
				</div>
			</div>
		</div>
		  <div class="row submit_row">
			<a href="javascript:void(0);" class="cancel_popup" title="">Cancel</a>
			<input type="submit" value ="Save" name="submit">
		</div>
	</form>
</div>         
  