<?php

$success = '';

$error='';			

function __autoload($className) {

    include '../classes/'.$className . '.php';

}

    $crud = new Crud;

	

$txt=$_POST{'delete_id'};

$sql = "DELETE FROM products WHERE id=$txt";

   $result = $crud->delete($txt, 'products');

   $success = 'Successfully delete products';

	



?>

<?php  

echo isset($success) && !empty($success) ? "<div class='alert alert-success'>".$success."</div>" : "";

echo isset($error) && !empty($error) ? "<div class='alert alert-danger'>".$error."</div>" : "";

?>