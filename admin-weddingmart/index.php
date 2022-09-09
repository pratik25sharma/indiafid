<?php
session_start();

//get page name from url
$page = isset($_GET['page']) ? $_GET['page'] : "";

$page = isset($page) && !empty($page) ? str_replace('/','',$page) : "home";
if(!file_exists('./pages/'.$page.'.php')){
	$page = '404';
}

//call constant file to get urls
require_once './common/constants.php';

spl_autoload_register(function($className) {
    include 'classes/'.$className . '.php';
});


if(($page == 'login') || ($page == 'registration')){
	
}else{
	if(isset($_SESSION['user'] ) && !empty($_SESSION['user'] ) && ($_SESSION['user']['user_type'] == '1')){
		$user=($_SESSION['user'] );
		
		$id=$user['id'];
	}

	else
	{
	
		$url = SITE_URL.'/login';
		echo '<script type="text/javascript">
				location.replace("'.$url.'");
		</script>';
	}
}

    //header file which include all css and metas
    require_once './layout/header.php';
    
    //include page name file
    require_once './pages/'.$page.'.php';
	
    //include footer file
        require_once './layout/footer.php';
    

?>