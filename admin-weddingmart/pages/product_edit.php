<?php
$success = '';$error='';			

$crud = new Crud; 
$id=$_GET['id'];
if(isset($_GET['id'])){
    $sql1 = "Select *from products where id = $id";

    $result1 = $crud->getData($sql1);
	
    if(!empty($result1)){
        $user = $result1[0];
	}
	
	
	
}
	$sql2="select *from products_images where product_id='$id'";

    $result2 = $crud->getData($sql2);
	
			
			
	

if(isset($_POST['submit'])){
	
	
	$data = array(
	'name'=>$_POST['name'],
	'description'=>$_POST['description'],
	'price'=>$_POST['price'],
	'category_id'=>$_POST['category_id'],

	'image'=>$_FILES["image"]["name"]
);

	$fields = array('name','description','price');

$validation = new Validation;
	$message = $validation->check_empty($data,$fields);


	if($message == null || $message == ''){
		
		$sql = "update products set name= '".$_POST['name']."', 
		description= '".$_POST['description']."',category_id='".$_POST['category_id']."', price= '".$_POST['price']."'
		where id ='$id'";
		
		$crud->execute($sql);
		$success = 'Successfully updated products';
		
	if(!empty($_FILES["image"]["name"][0])){
	
		$total=count($_FILES["image"]["name"]);
		$uploadOk = 1;
		


		for($i=0;$i<$total;$i++){
					$time=time();	
	
	 $target_dir =DIR_IMAGE_SYSTEM.'/product_'.$id.'/';
	 
$target_file = $target_dir . basename($_FILES["image"]["name"][$i]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $error="Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

if($uploadOk==0){
	
	break;
	
}
}
	
	if($uploadOk==1){
 	
for($i=0;$i<$total;$i++){


$images=basename($_FILES["image"]["name"][$i]);
		
		if(!file_exists($target_file)){

 }
 else{
$target_file = $target_dir .$time.'_'. basename($_FILES["image"]["name"][$i]);
$images=$time.'_'.basename($_FILES["image"]["name"][$i]);
 }
		

 if (move_uploaded_file($_FILES["image"]["tmp_name"][$i], $target_file)) {
        echo "The file ". basename( $_FILES["image"]["name"][$i]). " has been uploaded.";
			   
		
		
	$img=array(
	'product_id'=>$id,
		'image'=>$images
		
	);
	$crud->insertData('products_images',$img);
			$success = 'Successfully insert products_images';
			
	}
	}
	}
	else {
        echo "Sorry, there was an error uploading your file.";
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
						
    <div class="wrapper mt-20 mb-20">
        <section class="blocks add_category">
            <h2>Update products</h2>
		
	
			<table class="table-2 mt-20">
<form action="" method="post" enctype="multipart/form-data">

<tr>
                    <td>Name</td>
                    <td><input type ="text" name="name" value="<?php echo $user['name'];?>"></td>
                </tr>
<tr>
                    <td>Description</td>
                    <td><textarea  name="description" cols="30" rows="10"><?php echo $user['description'];?></textarea></td>
                </tr>

<tr>
                    <td>Price</td>
                    <td><input type ="text" name="price" value="<?php echo $user['price'];?>"></td>
    </tr>
<tr>
	<td>
	category</td><td><select name="category_id">
<option value=""> select category</option>
<?php
$crud=new crud;
$sql="select * from categories";
$result=$crud->getData($sql);
if(!empty($result)){
	foreach($result as $res){
		
		?>
		
<option value="<?php echo $res['id']; ?>"<?php echo $user['category_id']==$res['id']?"selected" :"";?>>
	<?php echo $res['name'];?> </option>

<?php
}
}
?>

</select>
</td>
</tr>
	
	
	
	
	
	
	<tr>
          <td>Image</td>
	
<td><input type="file" name="image[]" multiple="multiple" >
</td>
                   </tr>
		<?php	
			  if(!empty($result2)){
			$i=0;
			  foreach($result2 as $res){
				  $i++;
			 if	($i==0){
			echo "<tr>";
			}
	echo "<td>";
	?>
	<div class="log"><i class="fa fa-times remove"  style=" color:red;" aria-hidden="true" data-id="<?php echo $res['id']; ?>"></i>

	<img src="<?php echo IMAGE_SITE_URL ?>/product_<?php echo $id.'/'.$res['image']; ?>" alt="" /></div>
 <?php
 
 echo "</td>";
			  
		if($i==5){

 echo "</tr>";
 $i=0;
			  }
			  }
			  if ($i != 5) 
			  {
			  echo "</tr>";
			  }
			  }
			  
 ?>
	
<td><input type="submit"name="submit" class="btn"></td>
</form>

</section>
</div>