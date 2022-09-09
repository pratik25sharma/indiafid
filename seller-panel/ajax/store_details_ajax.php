<?php
if(!session_id()){session_start();}
function __autoload($className) {
	include '../classes/'.$className . '.php';
}
include '../common/constants.php';

$crud = new Crud;
$id = $_SESSION['user']['id'];
$sql = "Select * from users where id = '$id'";
$result = $crud->getData($sql);
if(!empty($result)){
	$user1 = $result[0];
}
?>

<div class="popup_box seller_details business_details">
	<h4>Store Details</h4>
	<form action="" id="store_form_update" method="post" class="default_form">
		<div class="details_form scrollbar-dynamic">
			<div class="row">
				<div class="inpt_group">
					<input type="text" name="name_online_store" value="<?php echo $user1['name_online_store'];?>" class="label_jump">
					<label for="">
					   Store Name*
					</label>
				   </div>
				<div class="inpt_group">
					<input type="file" name="image" class="label_jump">
					<label for="" class="label-valid">
					   Store Logo*
					</label>
					
				</div>
				<div class="store_logo"><?php if(!empty($user1['store_logo'])){ ?>
					<img src ="<?php echo IMAGE_SITE_URL?>/<?php echo $user1['store_logo'];?>" alt="" width="50" />
					<?php } ?>
				</div>
				<div class="inpt_group">
					<textarea name="online_store_description" class="label_jump"><?php echo $user1['online_store_description'];?></textarea>
					<label for="">
					   Store Description*
					</label>
				   </div>
			</div>
		</div>
		<div class="row submit_row">
			<a href="javascript:void(0);" class="cancel_popup" title="">Cancel</a>
			<input type="submit" value ="Save" name="submit">
		</div>
	</form>
</div>         
  