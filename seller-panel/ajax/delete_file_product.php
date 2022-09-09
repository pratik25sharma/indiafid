<?php
$file_name = $_POST['file_name'];
$target_dir = '../uploads/tmpproducts/';
unlink($target_dir.$file_name);

?>