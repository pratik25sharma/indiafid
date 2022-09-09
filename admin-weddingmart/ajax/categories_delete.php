<?php

$success = '';$error='';			

function __autoload($className) {

    include '../classes/'.$className . '.php';

}

$crud = new Crud; 





$cat=$_POST['cat_id'];





$sql = "DELETE FROM categories WHERE id=$cat";

   $result = $crud->delete($cat, 'categories');



?>

<?php  

                                            echo isset($success) && !empty($success) ? "<div class='alert alert-success'>".$success."</div>" : "";

                                            echo isset($error) && !empty($error) ? "<div class='alert alert-danger'>".$error."</div>" : "";

                                            ?>