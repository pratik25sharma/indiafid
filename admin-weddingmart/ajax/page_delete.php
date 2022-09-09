<?php

$success = '';

$error='';			

function __autoload($className) {

    include '../classes/'.$className . '.php';

}

    $crud = new Crud;

	

$txt=$_POST{'page_id'};

$sql = "DELETE FROM website_content WHERE id=$txt";

   $result = $crud->delete($txt, 'website_content');

   $success = 'Successfully delete page';

	



?>

<?php  

echo isset($success) && !empty($success) ? "<div class='alert alert-success'>".$success."</div>" : "";

echo isset($error) && !empty($error) ? "<div class='alert alert-danger'>".$error."</div>" : "";

?>