<?php
if(!session_id()){
	session_start();
}
$success = '';$error='';			
function __autoload($className) {
	include '../classes/'.$className . '.php';
}
$crud = new Crud; 
$id = $_SESSION['user']['id'];
if(isset($_POST['categories']) && !empty($_POST['categories'])){
	$sql="select * from users_categories where user_id = $id";
	$result1=$crud->getData($sql);
	if(empty($result1)){
		$save=array(
			'categories'=>json_encode($_POST['categories']),
			'user_id'=>$id
		);
		$crud->insertData('users_categories',$save);
	}else{
		$crud->execute("update users_categories set categories = '".json_encode($_POST['categories'])."' where user_id=$id");
	}
	
	$sql = "Select * from users LEFT JOIN users_categories ON users_categories.user_id = users.id where users.id = '$id'";
	$result = $crud->getData($sql);
	if(!empty($result)){
		$productCategories = $crud->getData("select GROUP_CONCAT(category_id) as productCategory from products where user_id = '$id'");
		$user1 = $result[0];
		$categories = $user1['categories'];
		if(!empty($categories)){
			$cats = json_decode($categories,true);
			$cats = implode(',',$cats);
			$sqlAppend = '';
			if(isset($productCategories) && !empty($productCategories) && isset($productCategories[0]['productCategory']) and !empty($productCategories[0]['productCategory'])){
				$sqlAppend = " and id NOT IN (".$productCategories[0]['productCategory'].")";
			}
			$categoriesList = $crud->getData('Select * from categories where id IN ('.$cats.')'.$sqlAppend);
		}
		
	}
	$option = '<option value="">Select</option>';
	if(isset($categoriesList) && !empty($categoriesList)){
		foreach($categoriesList as $category){
			$option .= '<option value="'.$category['id'].'">'.$category['name'].'</option>';
		}
	}
	echo $option;
}