<?php  $id=$user['id'];
$crud=new Crud;
$sql="select status AS x from users where id = '$id'";
$result=$crud->getData($sql);
$status = isset($result[0]) ? $result[0]['x'] : 0;
$profilePercent = 20;
if($status == 1){
	$approvedhtml = '<span class="status approve">Approved</span>';
	$profilePercent = 80;
}else{
	$approvedhtml = '<span class="status pending">Pending</span>';
}
$sql="select * from products where user_id = '$id'";
$products=$crud->getData($sql);
if(isset($products) && !empty($products)){
	$profilePercent += 20;
}

$sql="select * from users_categories where user_id = $id";
$result1=$crud->getData($sql);
if(empty($result1)){
	?>
	<script type="text/javascript">
		var catArr = [];
		var status = <?php echo $status; ?>;
		$(document).ready(function(){
			$('.popup_overlay').fadeIn();
			$('.popup_box').addClass('fadeInDown animated');
		});
	</script>
<?php }else{
	$categories = $result1[0]['categories']; 
	?>
	<script type="text/javascript">
		var status = <?php echo $status; ?>;
		var catArr = <?php echo !empty($categories) ? str_replace('"','',$categories) : '[]' ?>
	</script>
<?php }
?>
    <div class="popup_overlay" style="display:none">
        <a class="close"></a>
		<?php include DIR_SYSTEM.'ajax/categories_form.php'; ?>
	</div> 

	
 
    <section class="dashboard_summary">
		<div class="summary_header">
            <div class="info">
                <h4>Welcome To Seller Hub</h4>
                <span>Verify your Profile to start selling with weddingmart</span>
            </div>
            <div class="progress_bar">
                <div class="progress">
                    <span style="width: <?php echo $profilePercent; ?>%;"></span>
                </div>
                <p>Your process is <?php echo $profilePercent; ?>% completed</p>
            </div>
        </div>
        <div class="summary_content">
            <div class="business_details">
			<?php echo $approvedhtml; ?>
			<span class="block_icon"><img src="<?php echo ASSET_URL ;?>/images/details.png" alt=""></span>
                <h3>Business Details</h3>
                <p>
                    You need to provide your GSTIN, TAN and other business information
                </p>
                <a href="javascript:void(0);" title="" class="add_details bussiness_details">Add Details</a>
            </div>
            <div class="business_details">
				<?php echo $approvedhtml; ?>
                <span class="block_icon"><img src="<?php echo ASSET_URL ;?>/images/details3.png" alt=""></span>
                <h3>Bank Details</h3>
                <p>
                    We need your bank account details and KYC documents to verify your bank account
                </p>
                <a href="javascript:void(0);" class="add_details bank_details" title="">Add Details</a>
            </div>
            <div class="business_details">
				<?php echo $approvedhtml; ?>
                <span class="block_icon"><img src="<?php echo ASSET_URL ;?>/images/details4.png" alt=""></span>
                <h3>Store Details</h3>
                <p>
                    You need to update your display name and business description
                </p>
                <a href="javascript:void(0);" class="add_details store" title="">Add Details</a>
            </div>
            <div class="business_details">
                <?php echo $approvedhtml; ?>
                <span class="block_icon"><img src="<?php echo ASSET_URL ;?>/images/details2.png" alt=""></span>
                <h3>Add Listings</h3>
                <p>
                    You need to add minimum 1 listings to activate your account.
                </p>
                <a href="<?php echo ($status == 1 ? SITE_URL.'/listings' : 'javascript:void(0);'); ?>" class="add_details listings_details" title="">Add Details</a>
            </div>
        </div>
    </section>
    <section class="wm_whysellwithus">
        <div class="wrapper">
            <h4>Why sell with <span>wedding Mart</span></h4>
            <ul>
                <li>
                    <span class="info_image"><img src="<?php echo ASSET_URL ;?>/images/customer.png" alt=""></span>
                    <div class="info">
                        <span>Increase Your Business</span>
                        <p>Increase your business at exponential rate with weddingmart, You will get the daily deals with cusmoter directly.</p>
                    </div>
                </li>
                <li>
                    <span class="info_image"><img src="<?php echo ASSET_URL ;?>/images/lowest-return.png" alt=""></span>
                    <div class="info">
                       <span>Get Daily Reports</span>
                        <p>Check your performance with daily with weddingmart. Choose all of the service on which you are working and keep customer engaged on your profile.</p> 
                    </div>
                </li>
                <li>
                    <span class="info_image">
                        <img src="<?php echo ASSET_URL ;?>/images/securepayment.png" alt="">
                    </span>
                    <div class="info">
                        <span>Earn More Revenue</span>
                        <p>Get more and more customer daily, deal with them directly and increase your business revenue.</p>
                    </div>
                </li>
                <!-- <li>
                    <span class="info_image"><img src="<?php echo ASSET_URL ;?>/images/delivery.png" alt=""></span>
                    <div class="info">
                        <span>Delivery Support</span>
                        <p>Weddingmart takes care of shipping and delivery so you can focus on your core business</p>
                    </div>
                </li>
                <li>
                    <span class="info_image"><img src="<?php echo ASSET_URL ;?>/images/account-manager.png" alt=""></span>
                    <div class="info">
                        <span>Account Manager</span>
                        <p>Weddingmart provides you a dedicated account manager to grow your sales exponentially</p>
                    </div>
                </li> -->
            </ul>
        </div>
    </section>
