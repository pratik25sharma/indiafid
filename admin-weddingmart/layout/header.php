<?php
if($page == 'login'){
	require "lessc.inc.php";
    $less = new lessc;
    $less->checkedCompile("assets/css/login.less", "assets/css/login.css");
}else{
	require "lessc.inc.php";
    $less = new lessc;
    $less->checkedCompile("assets/css/admin.less", "assets/css/admin.css");
}  
if(strpos($page,"_") !== false){
	$pagesArr = explode("_",$page);	
	$pagenames = implode(" ",$pagesArr);
	$pageTitle =  ucfirst($pagenames);
}else if(strpos($page,"-") !== false){
	$pagesArr = explode("-",$page);	
	$pagenames = implode(" ",$pagesArr);
	$pageTitle =  ucfirst($pagenames);			
}else{
	$pageTitle =  ucfirst($page); 
}
?>	

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Wedding Mart || <?php echo $pageTitle; ?></title>
<link rel="shortcut icon" type="image/png" href="<?php echo SITE_URL; ?>/favicon.ico"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" >
<?php
if($page == 'login'){ ?>
	<link rel="stylesheet" href="<?php echo ASSET_URL;?>css/login.css" />
<?php }else{ ?>
	<link rel="stylesheet" href="<?php echo ASSET_URL;?>css/admin.css" />
<?php }?>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="<?php echo ASSET_URL;?>js/jscode.js"></script>
</head>
<body>

<?php
if($page != 'login'){

?>

<header>
	<div class="top_bar">
		<div class="wrapper">
			<ul>
				<li>
					Welcome <span>Admin</span>
				</li>
				<li>
					<a href="<?php echo SITE_URL?>/logout" title="">
						<i class="fas fa-sign-out-alt"></i>
						Logout
					</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="nav_bar">
		<div class="wrapper">
			<span class="logo">
				<img src="assets/images/logo.png" alt="" height="25">
			</span>
			<ul class="navigation_menu">
				<li>
					<a href="<?php echo SITE_URL?>/dashboard">
						<i class="fas fa-tachometer-alt"></i>
						Dashboard
					</a>
				</li>
				<li>
					<a href="<?php echo SITE_URL?>/user">
						<i class="fas fa-list-alt"></i>
						User Lists
					</a>
				</li>
				<li>
					<a href="<?php echo SITE_URL?>/products">
						<i class="fas fa-clipboard-list"></i>
						Product Lists
					</a>
				</li>
				<li>
					<a href="<?php echo SITE_URL?>/categories">
						<i class="fas fa-bars"></i>
						Categories
					</a>
				</li>
				<li>
					<a href="<?php echo SITE_URL?>/customers">
						<i class="fas fa-users"></i>
						Customers
					</a>
				</li>
				<li>
					<a href="<?php echo SITE_URL?>/website_content">
						<i class="fas fa-align-right"></i>
						Website Content
					</a>
				</li>
				<li>
					<a href="<?php echo SITE_URL?>/banner">
						<i></i>
						Banner
					</a>
				</li>
				<li>
					<a href="<?php echo SITE_URL?>/emails">
						<i class="fas fa-envelope"></i>
						Emails
					</a>
				</li>
			</ul>
		</div>	
	</div>
	<div class="breadcrumb">
		<div class="wrapper">
			<h4><?php echo $pageTitle; ?></h4>
			<ul>
				<li>Wedding Mart</li>
				<li>
					<a href="javascript:void(0)" title=""><?php echo $pageTitle; ?></a>
				</li>
			</ul>
		</div>
	</div>
</header><!-- /header -->
<?php
}
?>