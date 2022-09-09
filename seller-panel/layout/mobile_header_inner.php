<div class="mob_header">
	<div class="log_mob_head">
		<span class="menu_slide">
			<i class="fas fa-bars"></i>
		</span>
		<a href="javascript:void(0);"><img src="<?php echo ASSET_URL ;?>/images/logo.png" alt=""></a>
		<span class="wd_login">
			<a href="<?php echo SITE_URL.'/logout'; ?>"><i class="fas fa-sign-out-alt"></i></a>
		</span>
	</div>
	
	<div class="side_bar">
		<div class="side_bar_wrap">
			<div class="hHead">
				<div class="content">
					<div class="aviator"><i class="fas fa-user-alt"></i></div>
					<span>Hello, <?php if(!empty($_SESSION['user']['name'])){ ?><small><?php echo $_SESSION['user']['name']; ?></small><?php } ?></span>
					<ul>
						<li><?php echo $_SESSION['user']['email']; ?><i></i></li>
					</ul>
				</div>
			</div>
			<ul>
				<li><a href="<?php echo SITE_URL.'/dashboard' ?>" title="">Welcome</a></li>
				<li><a href="<?php echo SITE_URL.'/listings' ?>" title="">Listing</a></li>
				<li><a href="<?php echo SITE_URL.'/orders' ?>" title="">Orders</a></li>
				<li><i class="i_help"></i><a href="<?php echo SITE_URL.'/logout'; ?>">Logout</a></li>
			</ul>
		</div>
	</div>
</div>