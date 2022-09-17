<?php

$success='';

$error='';

$crud=new Crud;

if(isset($_POST['submit'])&& !empty($_POST)){

	$data=array( 

	

	'name'=>$_POST['name'],

	'description'=>$_POST['description'],
	'parent_category'=>$_POST['parent_category'],
	'shop_for_wedding'=>$_POST['shop_for_wedding'],
	'show_on_budget'=>$_POST['show_on_budget'],

	    'image'=>$_FILES['image']['name']

);

$fields=array('name');

$validation=new Validation;

$message=$validation->Check_empty($data,$fields);

 	if($message==null || $message==''){

		

	
	$image= '';
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
		'meta_keyword'=>$_POST['meta_keyword'],
		'meta_description'=>$_POST['meta_description'],
		'parent_category'=>$_POST['parent_category'],
		'shop_for_wedding'=>$_POST['shop_for_wedding'],
		'show_on_budget'=>$_POST['show_on_budget'],
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

                    <td>Meta keywords</td>

                    <td><input type ="text" name="meta_keyword" placeholder="Meta keywords" id="meta_keyword"></td>

                </tr>
<tr>

                    <td>Meta Description</td>

                    <td><textarea  name="meta_description" cols="30" id="meta_description" rows="10"></textarea></td>

                </tr>
<tr>

                    <td>Parent Category</td>

                    <td>
						<select name="parent_category" class="form-control">
							<option value="">None</option>
							<?php 
							$sql="SELECT * from categories where parent_category = 0 or parent_category IS NULL";
							$result = $crud->getData($sql);                 
							if(!empty($result)){
								foreach ($result as $res){
									echo '<option value="'.$res['id'].'">'.$res['name'].'</option>';
								}
							}
							?>
						</select>
					</td>

                </tr>
     <tr>

                    <td>Set Position for Find Vendors At Your Budget on front</td>

                    <td>
						<select name="show_on_budget" class="form-control">
							<option value="">None</option>
							<?php 
							$sql="SELECT GROUP_CONCAT(show_on_budget) as show_on_budget from categories where show_on_budget >0";
							$result = $crud->getData($sql);    
							$setOptions = array();
							if(!empty($result)){
								$setOptions = explode(',',$result[0]['show_on_budget']);
							}
							for($i=1;$i<=4;$i++){
								if(!in_array($i,$setOptions)){
									echo '<option value="'.$i.'">'.$i.'</option>';
								}
							}
							
							?>
						</select>
					</td>

                </tr>   
<tr>

                    <td>Set Position for Shop For Your Wedding on front</td>

                    <td>
						<select name="shop_for_wedding" class="form-control">
							<option value="">None</option>
							<?php 
							$sql="SELECT GROUP_CONCAT(shop_for_wedding) as shop_for_wedding from categories where shop_for_wedding >0";
							$result = $crud->getData($sql);    
							$setOptions = array();
							if(!empty($result)){
								$setOptions = explode(',',$result[0]['shop_for_wedding']);
							}
							for($i=1;$i<=4;$i++){
								if(!in_array($i,$setOptions)){
									echo '<option value="'.$i.'">'.$i.'</option>';
								}
							}
							
							?>
						</select>
					</td>

                </tr>   
 <tr>

          <td>Image</td>

<td ><input type="file" name="image"  ><span class="choose_img"><img src="" alt="" ></span></td>

                   </tr>

<td><input type="submit"name="submit" class="btn"></td>



</table>

</form>

</section>

</div>