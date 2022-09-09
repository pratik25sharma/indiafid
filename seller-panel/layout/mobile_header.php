<div class="mob_header">
	<div class="log_mob_head">
		<span class="menu_slide">
			<i class="fas fa-bars"></i>
		</span>
		<a href="javascript:void(0);"><img src="<?php echo ASSET_URL ;?>/images/logo.png" alt=""></a>
		<span class="wd_login">
			<i class="fas fa-user-alt"></i>
		</span>
	</div>

	
	
	<div class="side_bar">
		<div class="side_bar_wrap">
			<div class="hHead">
				<div class="content">
					<div class="aviator"><i class="fas fa-user-alt"></i></div>
					<span>Hello, Guest</span>
					<ul>
						<li>Login / Signup<i></i></li>
					</ul>
				</div>
			</div>
			<ul>
			    <li>
			    	<a class="more" href="<?php echo SITE_URL; ?>">Home</a>
			    </li>
				<li><i class="i_store"></i><a href="<?php echo SITE_URL; ?>/faq">Faq's</a></li>
				<li class="sellWithUs"><i class="i_help"></i><a href="javascript:void(0);">Sell With Us</a></li>
			</ul>
		</div>
	</div>
	


	<div class="head_login" style="display: none;">
	    <header class="login_header">
	        <a href="javascript:void(0);" class="side_ico"><i class="prev_icon"></i></a>
	        <div class="merchant_nme">
	            <a href="#!" class="logo"><img src="<?php echo ASSET_URL ;?>/images/logo_inner.png" alt=""></a>
	            <div>
	                <p>Login to WeddingMart</p>
	                <span>Please enter your details to continue</span>
	            </div>
	        </div>
	    </header>
	    <div class="form_elements">
	    	<form action="" id="login_form" class="default_form">
	    		<div class="inpt_group">
	    			<input type="text" name="username" id="username" required class="label_jump">
	    			<label for="">Username*</label>
	    		</div>
	    		<div class="inpt_group">
	    			<input type="password" name="password" id="pswrd" required class="label_jump psswrd_shwd">
	    			<label for="">Password*</label>
	    			<i class="shw-hde_password far fa-eye" toggle="#pswrd"></i>
	    		</div>
	    		<div class="button_container">
	    			<input type="submit" id="sub" name="submit" value="Continue" class="btn">
	    		</div>
	    	</form>
	    </div>
	    <div class="login-links"> 
	    	Not Registered? <a href="javascript:void(0);" class="sellWithUs">CREATE AN ACCOUNT</a>
	    </div>
		<div class="login-links"> 
	    	<a href="javascript:void(0);" class="forgot_link">Lost Password?</a>
	    </div>
	</div>
</div>