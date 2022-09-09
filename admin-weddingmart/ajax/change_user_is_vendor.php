<?php
function __autoload($className) {
	include '../classes/'.$className . '.php';
}
$crud = new Crud;
if(!empty($_POST)){
	$user_id=$_POST['user_id'];
	$is_vendor=$_POST['is_vendor'];
	$sql = "update users set is_vendor = $is_vendor where id = $user_id";
	$crud->execute($sql);
}
?>

		