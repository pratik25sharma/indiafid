<?php

$crud=new crud;

$success = '';$error='';	

if(isset($_POST['submit'])&& !empty($_POST)){

	$data=array(

	'name'=>$_POST['name'],

	'description'=>$_POST['description'],

	'price'=>$_POST['price'],
	'discount'=>$_POST['discount'],
	'stock'=>$_POST['stock'],

	'category_id'=>$_POST['category_id'],

    'image'=>$_FILES['image']['name']	

	

	);

	

	$fields=array('name','description','price','category_id','stock');

	$validation=new Validation;

	$message= $validation->check_empty($data,$fields);

	

	

	



	if($message==null || $message==''){

		

   

	$total=count($_FILES["image"]["name"]);

		$uploadOk = 1;

		

		for($i=0;$i<$total;$i++){

			

$imageFileType = strtolower(pathinfo($_FILES["image"]["name"][$i],PATHINFO_EXTENSION));

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

	

 	$id=$_SESSION['user']['id'];



	$product=array(

		'name'=>$_POST['name'],

		'description'=>$_POST['description'],

		'price'=>$_POST['price'],
		'discount'=>$_POST['discount'],
		'stock'=>$_POST['stock'],

		'category_id'=>$_POST['category_id'],

		'user_id'=>$id

	);

	

	$response=$crud->insertData('products',$product);

		

	$response=json_decode($response);

$product_id=isset($response)&& !empty($response)&& $response-> status ? $response->message:"";	

			$success = 'Successfully insert products';

		

$dir = DIR_IMAGE_SYSTEM.'/product_' .$product_id;



mkdir($dir);





for($i=0;$i<$total;$i++){

		$time=time();	



	 $target_dir =DIR_IMAGE_SYSTEM.'/product_'.$product_id.'/';



$target_file = $target_dir . basename($_FILES["image"]["name"][$i]);

$image=basename($_FILES["image"]["name"][$i]);

		

		if(!file_exists($target_file)){



 }

 else{

$target_file = $target_dir .$time.'_'. basename($_FILES["image"]["name"][$i]);

$image=$time.'_'.basename($_FILES["image"]["name"][$i]);

 }

		

 if (move_uploaded_file($_FILES["image"]["tmp_name"][$i], $target_file)) {

        echo "The file ". basename( $_FILES["image"]["name"][$i]). " has been uploaded.";

			   



	$img=array(

	'product_id'=>$product_id,

		'image'=>$image

	);

	$crud->insertData('products_images',$img);

			$success = 'Successfully insert products';



    }

}

	}	

	else {

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



    <div class="wrapper mt-20 mb-20">

        <section class="blocks add_category">

            <h2>Add product</h2>

   

<form action="" method="post" enctype="multipart/form-data">

 <table class="table-2 mt-20">

 				<tr>

                    <td>Name</td>

              	<td><input type ="text" name="name"></td>

                </tr>


				<tr>

                    <td>Description</td>

                    <td><textarea  name="description" cols="30" rows="10"></textarea></td>

                </tr>



         <tr>

                    <td>Price</td>

              <td><input type ="text" name="price"></td>

                </tr>
				<tr>

                    <td>Discount</td>

              <td><input type ="text" name="discount" placeholder="In percentage"></td>

                </tr>

				<tr>

                    <td>Stock</td>

              			<td><input type ="text" name="stock" placeholder="QTY present"></td>

                </tr>

				<tr>

<td>

      Category</td><td><select name="category_id">





<option value="">select category</option>

<?php 

$sql="select * from categories ";

$result= $crud->getData($sql);

if(!empty($result)){

	foreach($result as $res){

		

?>



<option value="<?php echo $res['id']; ?>"><?php echo $res['name'];?></option>

<?php

}

}

?>

</select>

</td>

</tr> 

 <tr>

          <td>Image</td>

<td ><input type="file" name="image[]"  multiple="multiple"><span class="choose_img"><img src="" alt="" ></span></td>

                   </tr>

 



<td><input type="submit"name="submit" class="btn"></td>





</table>

</form>

</section>

</div>