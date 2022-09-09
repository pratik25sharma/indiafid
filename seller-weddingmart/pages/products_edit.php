<?php
$success='';
$error='';

$crud= new crud;
$id= $_GET['id'];
$sql="select * from products where id=$id";
$result=$crud->getdata($sql);

if(!empty($result)){
$user=$result[0];
}


$sql1="select * from products_images where product_id=$id";
$result1=$crud->getdata($sql1);

if(!empty($result1)){
	
	foreach ($result1 as $res){
		
		?>
		<div id="parent">
		<div class="logo" ><i class="fa fa-times remove" aria-hidden="true" data-id="<?php echo $res['id']; ?>"></i>
			<img src ="uploads/<?php  echo $res['image'];?>" alt=""/ >
		</div>
		</div>
		
	
		<?php

}


}


if(isset($_POST['submit']) && !empty($_POST)){

$data=array(
'name'=>$_POST['name'],
'description'=>$_POST['description'],
'price'=>$_POST['price'],
'category'=>$_POST['category'],
'image'=>$_FILES["image"]["name"]
);

$fields=array('name','description','price','category');

$validation  = new validation;
$message= $validation->check_empty($data,$fields);

	if($message == null || $message == ''){
	
$sql="update products set name ='".$_POST['name']."',description = '".$_POST['description']."',price ='".$_POST['price']."',category='".$_POST['category']."' 
	where id =$id ";
	
$crud->execute($sql);
		$success = 'Successfully Updated products';
	
	
	
	

if(!empty($_FILES['image']['name'][0])){


    $total = count($_FILES['image']['name']);
	
	
	
		$uploadOk = 1;
	for($i=0; $i<$total; $i++) {

		
 $target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"][$i]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  if($imageFileType != "jpg" && $imageFileType != "png"  && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $error= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
	

if($uploadOk == 0){

break;
 
  
	}

	}
		
	
	if ($uploadOk==1){
		
		
		
		for($i=0; $i<$total; $i++){
			 $images= basename($_FILES["image"]["name"][$i]);
    if (move_uploaded_file($_FILES["image"]["tmp_name"][$i], $target_file)) {
        $success= "The file ". basename( $_FILES["image"]["name"][$i]). " has been uploaded.";
		
		
		$image=array(

'image'=>$images,
'product_id'=>$id

);

 $crud->insertData('products_images',$image);
	
	$success="successfully insert products_images.";
	
	
	
}
		}
	}



	
}
		
	}
else{
	
	$error = $message;
	
	
}
}


?>
<?php
		echo isset($success) && !empty($success) ? "<div class='alert alert-success'>".$success."</div>" : "";
			echo isset($error) && !empty($error) ? "<div class='alert alert-danger'>".$error."</div>" : "";
			?>
			
			

	<form action="" method="post" enctype="multipart/form-data" >
	
	
    
<br><br>
   Image: <input type="file" name="image[]" multiple="multiple" >


<br><br>
 Name:<input type="text" name="name" value="<?php  echo $user['name'];?>">
 <br><br>
  Description:<input type="text" name="description" value="<?php  echo $user['description'];?>">
 <br><br>

  Price:<input type="text" name="price" value="<?php  echo $user['price'];?>">
 <br><br>
 Category: <select name="category">
									   <option value="">Select category</option>
									   <?php
                                        $crud = new crud;
									   $sql = "SELECT name  from categories";
										$result = $crud->getData($sql);
										if(!empty($result)){
											foreach($result as $res){
												?>
												
                
 <option value="<?php echo $res['name']; ?>"<?php echo $user['category'] == $res['name'] ? "selected" :""; ?>><?php echo $res['name']; ?></option>				
                <?php
				}
										}
                ?>
                </select>
<br><br>

 
 <input type="submit" name="submit">
 </form>