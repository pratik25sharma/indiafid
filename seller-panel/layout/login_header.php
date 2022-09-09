<?php if($isMobile){
	include 'mobile_header.php';
}else{ ?>
<header class="<?php echo ($page == 'faq') ? 'faq_head' : ''; ?>">
	<div class="header">
		<div class="wrapper">
			<section>
				<a href="javascript:void(0);" class="logo animated zoomIn">
					<img src="<?php echo ASSET_URL ;?>/images/logo.png" alt="">
				</a>
				<div class="login_form">
					
					<form action="" id="login_form" method="post" class="default_form">
						<div>
							<h2>Login</h2>
							<a class="forgot_link" href="javascript:void(0);" title="">Forgot Password?</a>
						</div>
						<div class="inpt_group">
							<input type="text" name="username" id="username" required class="label_jump">
							<label>Username</label>
						</div>
						<div class="inpt_group">
							<input type="password" name="password" id="pswrd" required class="label_jump psswrd_shwd">
							<label>Password</label>
							<i class="shw-hde_password far fa-eye" toggle="#pswrd"></i>
						</div>
						<button type="submit" id="sub" name="submit">Log in</button>
					
					
		
					</form>
					
					
				</div>
				<nav>
				    <ul>
						<li><a href="<?php echo SITE_URL ;?>" title="">Home</a></li>
						<li><a href="<?php echo SITE_URL ;?>/faq" title="">FAQS</a></li>
						<!-- <li><a href="https://weddingmart.co.in" title="">Weddingmart.co.in</a></li> -->
						<li><a href="javascript:void(0);" title="" class="sellWithUs">Sell with us</a></li>
					</ul>
				</nav>
			</section>
		</div>
	</div>
</header><!-- /header -->
<?php } ?>
<style>
.error {
  color: red;
    margin-top: -18px;

  }
</style>
<div class="popup_overlay">
	<a class="close"></a>
	<div class="popup_box register_form">
		<div class="login_display"> 
			
		</div>
		<div class="form_elements signup_form">
			<span class="sub_head">Wedding Mart</span>
			<h2>Get registered With Us</h2>
			
			<form action="" method="post" id="form1" class="default_form">

				
				<div class="inpt_group">
					<input  type="text" name="email" id="email" class="label_jump">
					<label class=""><i class="danger">*</i> Email</label>
				</div>
				<div class="inpt_group">
					<input type="text" maxlength="10" id="mobile"  name="mobile" class="label_jump">
					<label class=""><i class="danger">*</i> Mobile Number</label>
				</div>
				<div class="inpt_group">
					<input type="password" id="password" name="password" class="label_jump psswrd_shwd">
					<label class=""><i class="danger">*</i> Password</label>
					<i class="shw-hde_password far fa-eye" toggle="#password"></i>
				</div>
				
				<div class="inpt_group" style="display:none" id="otp_mn">
					<input type="" id="otp" name="otp" class="label_jump">
					<label class=""><i class="danger">*</i> Enter otp</label>
				</div>

				<button  type="button" style="display:none" class="signup">Start Selling</button>
						
				<button  type="button" name="submit" class="otp">Request for otp</button>
				
				
			</form>

		</div>
		<div class="form_elements forgot_password_form">
			<h2>Enter your email, and we'll send you instructions on how to reset your password.</h2>
			
			<form action="" method="post" id="forgot_password_form" class="default_form">
				<div class="inpt_group">
					<input  type="text" name="email" id="email_address" class="label_jump">
					<label class=""><i class="danger">*</i> Email</label>
				</div>
				<button  type="submit" name="submit" >Send</button>
			</form>

		</div>
		<?php
		$resetpassword = isset($_GET['resetpassword']) ? $_GET['resetpassword'] : "";
		$warning = '';
		if(isset($resetpassword) && !empty($resetpassword)){
			if(isset($_GET['code']) && !empty($_GET['code'])){
				$token=$_GET['code'];
				$verify_code=explode("::",$token);
				$requested_token=$verify_code[0];
				$type=$verify_code[1];
				$user=$verify_code[2];
				$sql="select * from users where id ='$user' ";
				$crud = new Crud;
				$result=$crud->getdata($sql);
				if(!empty($result)){
					if($type == 'USE' ){
						if($requested_token == $result[0]['reset_code']){
							$userid=$result[0]['id'];
						}else{
							$warning="Invalid URL";
						}
					}else{
						$warning="Invalid URL";
					}
				}else{
					$warning="Invalid URL";
				}
			}
			?>
			<div class="form_elements reset_password_form">
				<h2>Reset Password</h2>
				<?php if(!empty($warning)){
					echo $warning;
				}else{ ?>
				<form action="" method="post" id="reset_password_form" class="default_form">
					<input type="hidden" name="userid" value="<?php echo $userid; ?>"/>
					<div class="inpt_group">
						<input type="password"  id="new_password" name="new_password" class="label_jump">
						<label class=""><i class="danger">*</i>New password</label>
					</div>
					<div class="inpt_group">
						<input type="password"  id="repeat_password" name="repeat_password" class="label_jump">
						<label class=""><i class="danger">*</i>Repeat new password</label>
					</div>
					<button  type="submit" name="submit" >Set New Password</button>
				</form>
				<?php } ?>
			</div>
		<?php }
		?>
	</div>
</div>