<?php
$success='';
$error='';
$crud=new Crud;
if(isset($_POST['submit'])&& !empty($_POST)){
	$data=array( 
	
	'name'=>$_POST['name'],
	'description'=>$_POST['description'],
	    'image'=>$_FILES['image']['name']
);
$fields=array('name');
$validation=new Validation;
$message=$validation->Check_empty($data,$fields);
 	if($message==null || $message==''){
		
	
    if(!empty($_FILES["image"]["name"])){
		$image=basename($_FILES["image"]["name"]);

		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION));
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
			echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$uploadOk = 0;
		}
	}

	

		

	

	$cat=array(
		'name'=>$_POST['name'],
	'description'=>$_POST['description'],

		'image'=>$image
		);
$text=$crud->insertData('categories',$cat);
	$text=json_decode($text);
	$cat_id=isset($text)&& !empty($text)&& $text->status ? $text->message:'';
	$success = 'Successfully added categories';
	

	$dir=DIR_IMAGE_SYSTEM.'category_'.$cat_id;
	mkdir($dir);
	$target_dir = DIR_IMAGE_SYSTEM.'category_'.$cat_id.'/';
	$target_file = $target_dir . basename($_FILES["image"]["name"]);
	
	 if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        //echo "The image ". basename( $_FILES["image"]["name"]). " has been uploaded.";
    } else {
        //echo "Sorry, there was an error uploading your file.";
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

    <div class="wrapper mt-20 mb-20">
        <section class="blocks add_category">
            <h2>Add Category</h2>
          <form action="" method="post" enctype="multipart/form-data" id="testform img_compress">
            <table class="table-2 mt-20">


 <tr>
                    <td>Name*</td>
                    <td><input type ="text" name="name" placeholder="The Name how it appears on your site" id="name"></td>
                </tr>


<tr>
                    <td>Description</td>
                    <td><textarea  name="description" cols="30" id="description" rows="10"></textarea></td>
                </tr>
<tr>
     <tr>
 <tr>
          <td>Image</td>
<td ><input type="file" name="image"  ><span class="choose_img"><img src="" alt="" ></span></td>
                   </tr>
<td><input type="submit"name="submit" class="btn"></td>

</table>
</form>
</section>
</div>