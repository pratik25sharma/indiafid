<?php
    require "./layout/lessc.inc.php";
    $less = new lessc;
    $less->checkedCompile("assets/css/seller.less", "assets/css/seller.css");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wedding Mart || <?php 
		if(strpos($page,"_") !== false){
			$pagesArr = explode("_",$page);	
			$pagenames = implode(" ",$pagesArr);
			echo ucfirst($pagenames);
		}else if(strpos($page,"-") !== false){
			$pagesArr = explode("-",$page);	
			$pagenames = implode(" ",$pagesArr);
			echo ucfirst($pagenames);			
		}else{
			echo ucfirst($page); 
		}
	?></title>
	<link rel="shortcut icon" type="image/png" href="<?php echo SITE_URL; ?>/favicon.ico"/>
    <link rel="stylesheet" href="<?php echo ASSET_URL ;?>/css/seller.css" />   
    <link rel="stylesheet" href="<?php echo ASSET_URL ;?>/css/responsive.css" /> 
	<script type="text/javascript" src="<?php echo ASSET_URL ;?>/js/jquery-1.9.1.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
	<link rel="stylesheet" href="<?php echo ASSET_URL ;?>/css/bootstrap-tagsinput.css" />
	<style>
		.loader{
			display:none;
			position: fixed;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			z-index: 999;
			background: rgba(0, 0, 0, 0.27058823529411763)
		}
		.loader img{
			width: 200px;
			position: fixed;
			top: 50%;
			left: 50%;
			margin-left: -100px;
			margin-top: -100px;
			z-index: 999;
		}
	</style>
</head>
<body class="scrollbar-outer">
<div class="loader">
	<img src="<?php echo ASSET_URL; ?>images/loader.svg"/>
</div>