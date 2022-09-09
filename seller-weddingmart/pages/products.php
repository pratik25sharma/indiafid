<?php
$error='';
$success='';

if(isset($_POST['name'])&& !empty($_POST)  ){


$data= array(
'name'=>$_POST['name'],
'description'=>$_POST['description'],
'price'=>$_POST['price'],
'category'=>$_POST['category'],
'image'=>$_FILES['image']['name']

);

$fields=array('name','description','price','category','image');

$validation = new validation;

$message= $validation->check_empty($data,$fields);

	if($message == null || $message == ''){
		$crud =new crud;
	
		$total = count($_FILES['image']['name']);
		$uploadOk = 1;
	for($i=0; $i<$total; $i++) {

		
 $target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"][$i]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $error= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
	

if($uploadOk == 0){

break;
 
  
	}
		}
		
	
	if ($uploadOk==1){
    	
		$id=$_SESSION['user']['id'];
$product=array(

'name'=>$_POST['name'],
'description'=>$_POST['description'],
'price'=>$_POST['price'],
'user_id'=>$id,
'category'=>$_POST['category']
);

 $response=$crud->insertData('products',$product);
 
 $response = json_decode($response);
		 $product_id = isset($response) && !empty($response) && $response->status ? $response->message : "";

	
        
		 for($i=0; $i<$total; $i++){
		
		$images= basename($_FILES["image"]["name"][$i]);
	 
    if (move_uploaded_file($_FILES["image"]["tmp_name"][$i], $target_file)) {
        $success= "The file ". basename( $_FILES["image"]["name"][$i]). " has been uploaded.";
		
		$products_images=array(

'image'=>$images,
'product_id'=>$product_id
);
   $crud->insertData('products_images',$products_images);	
	}
		}
		
		
		
 } else {
        $error= "Sorry, there was an error uploading your file.";
    }

}
	else{
		
		$error=$message;
	}


}

?>
<?php
	
	
		echo isset($success) && !empty($success) ? "<div class='alert alert-success'>".$success."</div>" : "";
			echo isset($error) && !empty($error) ? "<div class='alert alert-danger'>".$error."</div>" : "";
			?>



<form action="" method="post" enctype="multipart/form-data">

   Photo: <input type="file" name="image[]" multiple="multiple">
<br><br>

 Name:<input type="text" name="name">
 <br><br>
 Description:<input type="text" name="description">
 <br><br>
 Price:<input type="text" name="price">
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
										
                <option value="<?php echo $res['name']; ?>"><?php echo $res['name']; ?></option>';
                <?php
				}
										}
                ?>
                </select>
<br><br>
<input type="submit" name="submit">
</form>
