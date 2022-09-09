<?phpif(!session_id()){	session_start();}
session_unset();$url = SITE_URL.'/login';echo '<script type="text/javascript">	location.replace("'.$url.'");</script>';
?>
