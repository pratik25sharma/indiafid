<?php

$success = '';$error='';			

function __autoload($className) {

    include '../classes/'.$className . '.php';

}

$crud = new Crud; 





$banner=$_POST['banner_id'];





$sql = "DELETE FROM banner_image WHERE id=$banner";

   $result = $crud->delete($banner, 'banner_image');



?>

<?php  

                                            echo isset($success) && !empty($success) ? "<div class='alert alert-success'>".$success."</div>" : "";

                                            echo isset($error) && !empty($error) ? "<div class='alert alert-danger'>".$error."</div>" : "";

                                            ?>