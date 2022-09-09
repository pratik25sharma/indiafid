<?php
$sucess='';
if(isset($_POST['submit'])){
	$crud=new crud;

	$filename=$_FILES["file"]["tmp_name"];
        $file = fopen($filename, "r");
		
		$x=0;
 while (($text= fgetcsv($file, 10000, ",")) !== FALSE)
 {

	 if ($x==0){
           $name=$text[0];
		  
          $description=$text[1];
           $price=$text[2];
		   
		$image=$text[3];
		
 	$id=$_SESSION['user']['id'];

 $product=array(
		'name'=>$name,
		'description'=>$description,
		'price'=>$price,
		'user_id'=>$id	
		);
$response= $crud->insertData('products',$product);
$response=json_decode($response);
$product_id=isset($response)&& !empty($response)&& $response-> status ? $response->message:"";	

	 }
	 
 if(!empty($image))

{
    $my_image = file_get_contents($image);
		$imagename = pathinfo($image, PATHINFO_FILENAME);
			$ext = pathinfo($image, PATHINFO_EXTENSION);

			
	 			$dir = DIR_IMAGE_SYSTEM.'/product_' .$product_id;
				mkdir($dir);
	
		$time=time();	
$i=$imagename.'.'.$ext;

    $filename1 =DIR_IMAGE_SYSTEM.'/product_'.$product_id.'/'.$imagename.'.'.$ext ;
    if(!file_exists($filename1))
        {
            $my_file = fopen($filename1,'w+');
            file_put_contents($filename1, $my_image);

			
	}
	else {
    $filename1 =DIR_IMAGE_SYSTEM.'/product_'.$product_id.'/'.$time.'_'.$imagename.'.'.$ext ;
	$i=$time.'_'.$imagename.'.'.$ext;
		$my_file = fopen($filename1,'w+');
            file_put_contents($filename1, $my_image);
	
	}

	$img=array(
		'image'=>$i,
			'product_id'=>$product_id

	);
	$crud->insertData('products_images',$img);
		
	
		 	
        }

         $success='CSV File has been successfully Uploaded';
 }
   $x++;

 
 }
 

?>
<?php  
echo isset($success) && !empty($success) ? "<div class='alert alert-success'>".$success."</div>" : "";
echo isset($error) && !empty($error) ? "<div class='alert alert-danger'>".$error."</div>" : "";
?>
 <div class="wrapper mt-20 mb-20">
        <section class="blocks add_category">
   <h2>Upload Excel File into  Database</h2>
   
<form action="" method="post" enctype="multipart/form-data">
 <table class="table-2 mt-20">
 <input type="file" name="file" >
<br>
<br>
  <input type="submit"name="submit"class="btn">
  
</table>
</form>
</section>
</div>
 