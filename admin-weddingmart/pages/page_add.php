<?php
$error='';
$sucess='';
$text='';
if(isset($_POST['submit'])&& !empty($_POST)){
	$data=array( 
	'title'=>$_POST['title'],
	'description'=>$_POST['description'],
	'created_date'=>$_POST['created_date']
	);
	$fields=array('title','description','created_date');		
	$validation=new Validation;
	$message=$validation->check_empty($data,$fields);	
	if($message==null || $message==''){
		$crud=new crud;
		$text=preg_replace('~[^\pL\d]+~u', '-',($_POST['title']));
		 
		$count=array(
		'title'=>$text,
		
		'description'=>strip_tags($_POST['description']),
		'created_date'=>$_POST['created_date']	
	);
		
	$crud->insertData('website_content',$count);
	$success = 'Successfully insert page_count';
	
	

	
	
	
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

  
				
 <tr>
                    <td>Cerated date</td>
                    <td><input type ="text" name="created_date" ></td>
                </tr>


<td><input type="submit"name="submit" class="btn sub"></td>


</table>
</form>
</section>
</div>
