<?php

$success ='';

$error='';

$crud=new Crud;

$id=$_GET['id'];

if(isset($_GET['id'])){

	$sql="select * from users where id='$id'";

	$result=$crud->getData($sql);

	if(!empty($result)){

		$user=$result[0];

	}

	$sql1="select * from bank_info where user_id='$id'";

	$result=$crud->getData($sql1);

	if(!empty($result)){

		$bankinfo=$result[0];

	}

}
$imageurl=IMAGE_SITE_URL.'/';
?>		

<div class="wrapper mt-20 mb-20">
	<section class="blocks add_category">
		<h2>Personal Information</h2>
		<table class="table-2 mt-20">
			<tr>
				<td>Email</td>
				<td><?php echo $user['email'];?></td>
			</tr>
			<tr>
				<td>Mobile</td>
				<td><?php echo $user['mobile'];?></td>
			</tr>
			<tr>
				<td>Status</td>
				<td>
				<span class="status_text">
				<?php 
					if($user['status']==0){
						$status = "Disapproved";
					}else if($user['status']==2){
						$status = "Deactivated";
					}else{ 
						$status = "Approved";
					}
					echo $status;
				?>
				</span>
				<input type="hidden" name="user_id" value="<?php echo $id; ?>"/>
				<select name="status" class="status_dropdown" style="display:none;">
					<option value="1" <?php echo ($user['status']==1 ? 'selected' : ''); ?>>Approve</option>
					<option value="0" <?php echo ($user['status']==0 ? 'selected' : ''); ?>>Disapprove</option>
					<option value="2" <?php echo ($user['status']==2 ? 'selected' : ''); ?>>Deactivate</option>
				</select>
				&nbsp;
				<a href="javascript:void(0);" class="change_status">Change Status</a>
				</td>
			</tr>
			<tr>
				<td>Vendor</td>
				<td>
				<span class="is_vendor_text">
				<?php 
					if($user['is_vendor']==0){
						$is_vendor = "No";
					}else{ 
						$is_vendor = "Yes";
					}
					echo $is_vendor;
				?>
				</span>
				<select name="is_vendor" class="is_vendor_dropdown" style="display:none;">
					<option value="1" <?php echo ($user['is_vendor']==1 ? 'selected' : ''); ?>>Yes</option>
					<option value="0" <?php echo ($user['is_vendor']==0 ? 'selected' : ''); ?>>No</option>
				</select>
				&nbsp;
				<a href="javascript:void(0);" class="change_is_vendor">Change Is Vendor User</a>
				</td>
			</tr>
		</table>
		<h2>Business Information</h2>
		<table class="table-2 mt-20">
			<tr>
				<td>Name</td>
				<td><?php echo $user['name'];?></td>
			</tr>
			<tr>
				<td>GSTIN</td>
				<td><?php echo $user['gstin'];?></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><?php echo $user['address1'] .(!empty($user['address2'])  ? '<br>'. $user['address2'] : "");?></td>
			</tr>
			<tr>
				<td>City</td>
				<td><?php echo $user['city'];?></td>
			</tr>
			<tr>
				<td>State</td>
				<td><?php echo $user['state'];?></td>
			</tr>
			<tr>
				<td>Pincode</td>
				<td><?php echo $user['pincode'];?></td>
			</tr>
		</table>
		<h2>Store Information</h2>
		<table class="table-2 mt-20">
			<tr>
				<td>Store Name</td>
				<td><?php echo $user['name_online_store'];?></td>
			</tr>
			<tr>
				<td>Store Logo</td>
				<td><?php echo (!empty($user['store_logo']) ? "<img src='{$imageurl}{$user['store_logo']}' style= 'max-height: 70px;'  alt=''/>" : "");  ?></td>
			</tr>
			<tr>
				<td>Store Description</td>
				<td><?php echo $user['online_store_description'];?></td>
			</tr>
		</table>
		<?php if(isset($bankinfo) && !empty($bankinfo)){ ?>
		<h2>Bank Infomation</h2>
		<table class="table-2 mt-20">
			<tr>
				<td>Account Holder Name</td>
				<td><?php echo $bankinfo['account_holder_name'];?></td>
			</tr>
			<tr>
				<td>Account Number</td>
				<td><?php echo $bankinfo['account_number'];?></td>
			</tr>
			<tr>
				<td>Account Type</td>
				<td><?php echo $bankinfo['account_type'];?></td>
			</tr>
			<tr>
				<td>IFSC Code</td>
				<td><?php echo $bankinfo['ifsc_code'];?></td>
			</tr>
			<tr>
				<td>Bank Name</td>
				<td><?php echo $bankinfo['bank_name'];?></td>
			</tr>
			<tr>
				<td>Bank State</td>
				<td><?php echo $bankinfo['bank_state'];?></td>
			</tr>
			<tr>
				<td>Bank City</td>
				<td><?php echo $bankinfo['bank_city'];?></td>
			</tr>
			<tr>
				<td>Branch</td>
				<td><?php echo $bankinfo['branch'];?></td>
			</tr>
		</table>
		<?php } ?>
	</section>
</div>

