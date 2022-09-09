<?php
function __autoload($className) {
	include '../classes/'.$className . '.php';
}
include '../common/constants.php';
$crud = new Crud;
if(!empty($_POST)){
	$action = $_POST['action'];
	$productIds = $_POST['productIds'];
	if($action == 'active'){
		$sql = 'update products set status = 1 where id IN ('.$productIds.')';
		$crud->execute($sql);
	}else if($action == 'deactive'){
		$sql = 'update products set status = 2 where id IN ('.$productIds.')';
		$crud->execute($sql);
	}else if($action == 'delete'){
		$sql1 = 'delete from products_images where product_id IN ('.$productIds.')';
		$crud->execute($sql1);
		$sql = 'delete from products where id IN ('.$productIds.')';
		$crud->execute($sql);
	}
}
?>