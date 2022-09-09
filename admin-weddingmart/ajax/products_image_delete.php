<?php

function __autoload($className) {

    include '../classes/'.$className . '.php';

}

    $crud = new Crud;

	$id=$_POST['image_id'];

	$sql="DELETE FROM products_images where id='$id'";

	   $result = $crud->delete($id, 'products_images');



	?>

		