<?php

spl_autoload_register(function($className) {
    include './clogin/classes/'.$className . '.php';
  });

$email = $_POST['email'];
$crud = new Crud;

$data = array(
    'email' => $email
);

$crud->insertData('newsletter', $data);

header("Location: https://fidusindia.workingverve.com/");