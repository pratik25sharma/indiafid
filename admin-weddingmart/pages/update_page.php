<?php
$error='';
$success='';
$crud=new crud;
$id=$_GET['id'];
if(isset($_GET['id'])){
	$sql="select * from website_content where id='$id'";
$result=$crud->getData($sql);
if(!empty($result)){
	$user=$result[0];
}
}	

if(isset($_POST['submit'])){
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
	
			$text=preg_replace('~[^\pL\d]+~u', '-',strtolower($_POST['title']));


	$sql="update website_content set title='".$_POST['title']."',description='".$_POST['description']."',meta_keyword='".$_POST['meta_keyword']."',meta_description='".$_POST['meta_description']."',slug='$text',
	created_date='".$_POST['created_date']."' where id='$id'";
		$crud->execute($sql);
		$success = 'Successfully updated website_content';
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
            <h2>Add website</h2>
          <form action="" method="post" enctype="multipart/form-data">
            <table class="table-2 mt-20">


 <tr>
                    <td>Title</td>
                    <td><input type ="text" name="title" value="<?php echo $user['title']; ?>"></td>
                </tr>
<tr>
                    <td>Description</td>
                    <td><textarea  name="description" cols="30" rows="10" id="js"><?php echo $user['description'];?></textarea></td>
                </tr>
  <tr>                    <td>Meta keywords</td>                    <td><input type ="text" name="meta_keyword" placeholder="Meta keywords" id="meta_keyword" value="<?php echo $user['meta_keyword'];?>" /></td>                </tr><tr>                    <td>Meta Description</td>                    <td><textarea  name="meta_description" cols="30" id="meta_description" rows="10"><?php echo $user['meta_description'];?></textarea></td>                </tr>

				
 <tr>
                    <td>Cerated date</td>
                    <td><input type ="text" name="created_date" value="<?php echo $user['created_date'] ;?>" ></td>
                </tr>


<td><input type="submit"name="submit" class="btn sub"></td>


</table>
</form>
</section>
</div>					