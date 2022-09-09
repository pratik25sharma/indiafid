

<?php
function __autoload($className) {
    include '../classes/'.$className . '.php';
	
}
$crud =new crud;
$del=$_POST['product_id'];
$sql="DELETE FROM products_images WHERE id=$del";
$result= $crud->delete($del,'products_images');


?>
