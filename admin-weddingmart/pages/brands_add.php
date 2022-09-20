<?php

$crud=new crud;

$success = '';$error='';	

if(isset($_POST['submit'])&& !empty($_POST)){

	$data=array(
        'brand_name'=>$_POST['brand_name'],
        'brand_seq'=>$_POST['brand_seq'],
        'image'=>$_FILES['image']['name']	
	);

	
	$fields=array('brand_name','brand_seq');
	$validation=new Validation;
	$message= $validation->check_empty($data,$fields);

	if($message==null || $message==''){

    	$total=count($_FILES["image"]["name"]);
		$uploadOk = 1;
		for($i=0;$i<$total;$i++){
            $imageFileType = strtolower(pathinfo($_FILES["image"]["name"][$i],PATHINFO_EXTENSION));
            
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                $error="Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
            if($uploadOk==0){
	            break;
            }		

		}

		if($uploadOk==1){	
            

            $id=$_SESSION['user']['id'];
            $brand=array(
		        'brand_name'=>$_POST['brand_name'],
                'brand_seq'=>$_POST['brand_seq']
	        );
            
            $response=$crud->insertData('brands', $brand);
		    $response=json_decode($response);
            
            $brand_id=isset($response)&& !empty($response)&& $response-> status ? $response->message:"";	
			$success = 'Successfully insert brands';
		    $dir = DIR_IMAGE_SYSTEM.'/brand_' .$brand_id;
            mkdir($dir);

            for($i=0;$i<$total;$i++){

                $time=time();	
                $target_dir =DIR_IMAGE_SYSTEM.'/brand_'.$brand_id.'/';
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

                    $sql = "update brands set brand_img = '$image' where id = $brand_id";
                    $res = $crud->execute($sql);
                    $success = 'Successfully insert brands';
                }

            }

	    } else {
            $error= "Sorry, there was an error uploading your file.";
        }
    } else {
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

            <h2>Add Brand</h2>

   

<form action="" method="post" enctype="multipart/form-data">

 <table class="table-2 mt-20">

 				<tr>

                    <td>Brand Name</td>

              	<td><input type ="text" name="brand_name"></td>

                </tr>



         <tr>

                    <td>Display Sequence</td>

              <td><input type ="text" name="brand_seq"></td>

                </tr>
				

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