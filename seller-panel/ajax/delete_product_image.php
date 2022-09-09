<?php
require_once '../common/constants.php';
function __autoload($className) {
	include '../classes/'.$className . '.php';
}
$error= array();$sucess='';
$crud=new Crud;

if(isset($_POST['id'])&& !empty($_POST)){
	$target_dir = DIR_IMAGE_SYSTEM.'product_' .$_POST['id'];
	//unlink($target_dir);
	$crud->execute('DELETE from products_images where id= "'.$_POST['id'].'"');
}
?>
