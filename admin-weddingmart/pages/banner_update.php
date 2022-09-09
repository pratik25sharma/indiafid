<?php
$success = '';$error='';			

$crud = new Crud; 
$id=$_GET['id'];
if(isset($_GET['id'])){
    $sql1 = "Select *from banner_image where id = $id";
    $result1 = $crud->getData($sql1);
	
    if(!empty($result1)){
        $user = $result1[0];
    }
}

if(isset($_POST['submit'])){
	
	
	$data = array(
	'image'=>$_FILES["image"]["name"],
	
	'text'=>$_POST['text'],
);

	$fields = array('text');

$validation = new Validation;
	$message = $validation->check_empty($data,$fields);


	if($message == null || $message == ''){
	
		if(!empty ($_FILES["image"]["name"])){
		
$target_dir = DIR_IMAGE_SYSTEM;
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$image= basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
if($uploadOk==1){
	  if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

		
		
		
		
		
		
$sql="update banner_image set image='$image', text='".$_POST['text']."'where id='$id'";

		$crud->execute($sql);
		$success = 'Successfully updated users';
		}else{
			
			
	$sql="update banner_image set  text='".$_POST['text']."'where id='$id'";

			
		}
$crud->execute($sql);		
$success = 'Successfully updated banner';
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
				
    <div class="wrapper mt-20 mb-20">
        <section class="blocks add_category">
            <h2>Add website</h2>
          <form action="" method="post" enctype="multipart/form-data">
            <table class="table-2 mt-20">


 <tr>
                    <td>Image</td>
                    <td><input type ="file" name="image">
					<img src ="<?php echo IMAGE_SITE_URL ?>/<?php echo $user['image'];?>" alt=""/>
</td>
                </tr>

 <tr>
                    <td>Text</td>
                    <td><input type ="text" name="text" value="<?php echo $user['text']; ?>"></td>
                </tr>

                    
<td><input type="submit"name="submit" class="btn sub"></td>


</table>
</form>
</section>
</div>					