<?php

$success = '';$error='';			



$crud = new Crud; 

$id=$_GET['id'];

if(isset($_GET['id'])){

    $sql1 = "Select * from brands where id = $id";

    $result1 = $crud->getData($sql1);

	

    if(!empty($result1)){

        $user = $result1[0];

    }

}



if(isset($_POST['submit'])){

	

	

	$data = array(

	'brand_name'=>$_POST['brand_name'],

	'brand_seq'=>$_POST['brand_seq'],

	'image'=>$_FILES["image"]["name"]

);



	$fields = array('brand_name','brand_seq');



$validation = new Validation;

	$message = $validation->check_empty($data,$fields);





	if($message == null || $message == ''){

		

		if(!empty($_FILES['image']['name'])){	

	 $target_dir = DIR_IMAGE_SYSTEM.'/brand_'.$id.'/';

			

$target_file = $target_dir . basename($_FILES["image"]["name"]);

$image=basename($_FILES["image"]["name"]);



$uploadOk = 1;

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"

&& $imageFileType != "gif" ) {

    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";

    $uploadOk = 0;

}

 if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {

        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";

    } else {

        echo "Sorry, there was an error uploading your file.";

    }



			

		

		$sql = "update brands set brand_name= '".$_POST['brand_name']."', 

		brand_seq= '".$_POST['brand_seq']."' , image='$image' 

		where id ='$id'";

	

		}

		else{

					$sql = "update brands set brand_name= '".$_POST['brand_name']."', 

                    brand_seq= '".$_POST['brand_seq']."' 

		where id ='$id'";

		

		}

		$crud->execute($sql);

		$success = 'Successfully updated brands';

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

        <section class="blocks add_brands">

            <h2>Update Brands</h2>

			

			<table class="table-2 mt-20">

<form action="" method="post" enctype="multipart/form-data">



 <tr>

                    <td>Brands Name</td>

                    <td><input type ="text" name="brand_name" value="<?php echo $user['brand_name'];?>"></td>

                </tr>

<tr>

                    <td>Display Sequence</td>

                    <td><input type="text"  name="brand_seq" value="<?php echo $user['brand_seq'];?>"</td>

                </tr>

<tr>

          <td>Image</td>

<td><input type="file" name="image" ><img src ="<?php echo IMAGE_SITE_URL ?>/brand_<?php echo $id.'/'.$user['brand_img'];?>"  alt="" width="100px" height="100px"/>

</td>

                   </tr>



<td><input type="submit"name="submit" class="btn"></td>



</form>

</section>

</div>



