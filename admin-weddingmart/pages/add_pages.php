<?php
$error='';
$sucess='';
$text='';
if(isset($_POST['submit'])&& !empty($_POST)){
	$data=array( 
	'title'=>$_POST['title'],
	'slug'=>$text,
	'description'=>$_POST['description'],
	);
	$fields=array('title','description');		
	$validation=new Validation;
	$message=$validation->check_empty($data,$fields);	
	if($message==null || $message==''){
		$crud=new crud;

		
$text=preg_replace('~[^\pL\d]+~u', '-',strtolower($_POST['title']));
		
		
		
		$count=array(
		'title'=>$_POST['title'],
		'slug'=>$text,
		
		'description'=>strip_tags($_POST['description']),		'meta_keyword'=>$_POST['meta_keyword'],		'meta_description'=>$_POST['meta_description'],
	);
		
	$crud->insertData('website_content',$count);
	$success = 'Successfully insert website_content';
	
	

	
	
	
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
                    <td>Title</td>
                    <td><input type ="text" name="title"></td>
                </tr>


<tr>
                    <td>Description</td>
                    <td><textarea  name="description" cols="30"  rows="10"  id="js"></textarea></td>
                </tr>
 <tr>                    <td>Meta keywords</td>                    <td><input type ="text" name="meta_keyword" placeholder="Meta keywords" id="meta_keyword"></td>                </tr><tr>                    <td>Meta Description</td>                    <td><textarea  name="meta_description" cols="30" id="meta_description" rows="10"></textarea></td>                </tr>
 

<td><input type="submit"name="submit" class="btn sub"></td>


</table>
</form>
</section>
</div>
