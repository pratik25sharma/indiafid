<?php
function __autoload($className) {
    include '../classes/'.$className . '.php';
	
}
$crud =new crud;
$coupon_id=$_POST['coupon_id'];
$sql="DELETE FROM coupon WHERE id=$coupon_id";
$result= $crud->delete($coupon_id,'coupon');


?>
