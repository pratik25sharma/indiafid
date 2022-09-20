<?php

$success = '';

$error='';			

spl_autoload_register(function($className) {
    include '../classes/'.$className . '.php';
});

    $crud = new Crud;

	

$txt=$_POST['delete_id'];
$table = $_POST['table'] ? $_POST['table'] : 'products';

$sql = "DELETE FROM ".$table." WHERE id=$txt";

   $result = $crud->execute($sql);
   

   $success = 'Successfully delete '. $table;

	



?>

<?php  

echo isset($success) && !empty($success) ? "<div class='alert alert-success'>".$success."</div>" : "";

echo isset($error) && !empty($error) ? "<div class='alert alert-danger'>".$error."</div>" : "";

?>