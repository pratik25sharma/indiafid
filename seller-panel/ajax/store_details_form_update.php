<?php
if(!session_id()){session_start();}
function __autoload($className) {
	include '../classes/'.$className . '.php';
}
include '../common/constants.php';
$success = '';$error='';			
$crud = new Crud;

$id= $_SESSION['user']['id'];
if(isset($_POST['name_online_store']) && !empty($_POST)){
	$data = array(
		'name_online_store'=>$_POST['name_online_store'],
		'store_logo'=>$_FILES['image']['name'],
		'online_store_description'=>$_POST['online_store_description']
	);
	if(!empty($_FILES['image']['name'])){
		$fields = array('name_online_store','store_logo','online_store_description');
	}else{
		$fields = array('name_online_store','online_store_description');
	}
	$validation = new Validation;
	$message = $validation->check_empty($data,$fields);
	if($message == null || $message == ''){
		if(!empty($_FILES["image"]["name"])){
			$target_dir = DIR_IMAGE_SYSTEM;
			$target_file = $target_dir . basename($_FILES["image"]["name"]);
			$store_logo= basename($_FILES["image"]["name"]);
			$time=time();
			if(!file_exists($target_file)){
			} else {
				$target_file = $target_dir .$time.'_'. basename($_FILES["image"]["name"]);
				$store_logo=$time.'_'. basename($_FILES["image"]["name"]);
			}
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
				$error= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$uploadOk = 0;
			}
			if($uploadOk==1){
				if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
					$sql = "update  users set name_online_store = '".$_POST['name_online_store']."',online_store_description = '".$_POST['online_store_description']."', store_logo='$store_logo' where id ='$id'";
					$success="The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
				}else{
					$error= "Sorry, there was an error uploading your file.";
				}
			}	
		}else{
			$sql = "update  users set name_online_store = '".$_POST['name_online_store']."',online_store_description = '".$_POST['online_store_description']."' where id ='$id'";
		}
		$crud->execute($sql);
	}else{
		$error = $message;
	}

	if(empty($error)){
		echo json_encode(array('status'=>true,'message'=>"updated successfully"));
	}else{
		echo json_encode(array('status'=>false,'message'=>$error));
	}
}
?>