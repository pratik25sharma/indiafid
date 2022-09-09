<?php

$success = '';$error='';			

function __autoload($className) {

    include '../classes/'.$className . '.php';

}

$crud = new Crud; 

$user=$_POST['use_id'];

$sql = "DELETE FROM customers WHERE id=$user";

   $result = $crud->delete($user, 'customers');



?>

<?php  

                                            echo isset($success) && !empty($success) ? "<div class='alert alert-success'>".$success."</div>" : "";

                                            echo isset($error) && !empty($error) ? "<div class='alert alert-danger'>".$error."</div>" : "";

                                            ?>