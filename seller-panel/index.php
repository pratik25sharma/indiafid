<?php 
if(!session_id()){
	session_start();
}

//get page name from url
$page = isset($_GET['page']) ? $_GET['page'] : "";
$page = isset($page) && !empty($page) ? str_replace('/','',$page) : "login";
if(!file_exists('./pages/'.$page.'.php')){
	$page = '404';
}
//call constant file to get urls
require_once './common/constants.php';
spl_autoload_register(function ($className) {
	include 'classes/'.$className . '.php';
});

if(($page == 'login') || ($page == 'registration') || ($page == 'faq') || ($page == 'info') || ($page == 'cron') ){

}else{
	if(isset($_SESSION['user'] ) && !empty($_SESSION['user'] )){
		$user=($_SESSION['user'] );
		
	}else{
		$url = SITE_URL.'/login';
		echo '<script type="text/javascript">
				location.replace("'.$url.'");
			</script>';

	}
}
//check device is mobile or desktop
include 'Mobile_Detect.php';
$detect = new Mobile_Detect();

// Check for any mobile device.
if ($detect->isMobile()){
	$isMobile = true;
}else{
	$isMobile = false;
}
//header file which include all css and metas
require_once './layout/header.php';

if(isset($_SESSION['user'] ) && !empty($_SESSION['user'] )){
	include './layout/header_inner.php';
}else{
	include './layout/login_header.php';
}
//include page name file
require_once './pages/'.$page.'.php';

//include footer file
require_once './layout/footer.php';

    



?>