

<?php
function __autoload($className) {
    include '../classes/'.$className . '.php';
	
}

$crud =new crud;
$products_id=$_POST['products_id'];
$sql="DELETE FROM products WHERE id=$products_id";
$result= $crud->delete($products_id,'products');
 


?>
