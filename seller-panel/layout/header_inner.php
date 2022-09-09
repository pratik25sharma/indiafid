<?php if($isMobile){
	include 'mobile_header_inner.php';
}else{ ?>
<header>
	<div class="header inner">
		<section>
			<a href="javascript:void(0);" class="logo animated zoomIn">
				<img src="<?php echo ASSET_URL ;?>/images/logo_inner.png" alt="">
			</a>
			<nav>
			    <ul>
					<li><a href="<?php echo SITE_URL.'/dashboard' ?>" title="">Welcome</a></li>
					<li><a href="<?php echo SITE_URL.'/listings' ?>" title="">Listing</a></li>
					<li><a href="<?php echo SITE_URL.'/orders' ?>" title="">Orders</a></li>
				</ul>
			</nav>
			<div class="account_name">
				<i class="fa fa-user"></i>
				<span>
					<?php if(!empty($_SESSION['user']['name'])){ ?><small><?php echo $_SESSION['user']['name']; ?></small><?php } ?>
					<small><?php echo $_SESSION['user']['email']; ?></small>
				</span>
				<ul>
					<li>
						<a href="<?php echo SITE_URL.'/logout'; ?>">
							<i class="fas fa-sign-out-alt"></i>
							Logout
						</a>
					</li>
				</ul>
			</div>
		</section>
	</div>
</header><!-- /header -->
<?php } ?>