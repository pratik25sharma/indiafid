<?php
$success = '';$error='';			

$crud = new Crud; 
$id=$_GET['id'];
if(isset($_GET['id'])){
	
    $sql1 = "Select *from customers where id = $id";
    $result1 = $crud->getData($sql1);
	
    if(!empty($result1)){
        $user = $result1[0];
    }

	
}

if(isset($_POST['submit'])){
	$data = array(
	'name'=>$_POST['name'],
	'email'=>$_POST['email'],
	'mobile'=>$_POST['mobile'],
	'status'=> $_POST['status']
);

	$fields = array('name','email','mobile');

$validation = new Validation;
	$message = $validation->check_empty($data,$fields);


	if($message == null || $message == ''){
		$sql = "update customers set  name= '".$_POST['name']."', email= '".$_POST['email']."', mobile= '".$_POST['mobile']."',status= '".$_POST['status']."' where id ='$id'";
		$crud->execute($sql);
		$success = 'Successfully updated user';

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
            <h2>Edit User</h2>
					
			<table class="table-2 mt-20">
<form action="" method="post" >

<tr>
                    <td>Name</td>
                    <td><input type ="text" name="name" value="<?php echo $user['name'];?>"></td>
                </tr>
 
<tr>
                    <td>Email</td>
                    <td><input type ="text" name="email" value="<?php echo $user['email'];?>"></td>
                </tr>

				
<tr>
                    <td>Mobile Number</td>
                    <td><input type ="text" name="mobile" value="<?php echo $user['mobile'];?>"></td>
                </tr>
<tr>
<td>
 status: </td><td><select name="status">
<option value="0" <?php if ($user['status']== 0 ) echo 'selected="selected"' ; ?> >disapprove</option>

<option value="1" <?php if ($user['status'] == 1 ) echo 'selected="selected"' ; ?> >approve</option>
</select>
</td>
</tr>
<td><input type="submit" name="submit" class="btn"></td>

</form>


</form>
</table>
</section>
</div>
