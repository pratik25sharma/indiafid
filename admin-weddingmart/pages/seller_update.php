<?php
$success ='';
$error='';
$crud=new crud;
$id=$_GET['id'];
if(isset($_GET['id'])){
	$sql="select * from users where id='$id'";
	$result=$crud->getData($sql);
	if(!empty($result)){
		$user=$result[0];
	}
	
	
	$sql1="select * from bank_info where user_id='$id'";
	$result=$crud->getData($sql1);
	if(!empty($result)){
		$user1=$result[0];
	}
		
	
}
	if(isset($_POST['submit'])){
		$data=array(
		
		'name'=>$_POST['name'],
	'email'=>$_POST['email'],
	'mobile'=>$_POST['mobile'],
	'gstin'=> $_POST['gstin'],
	'user_type'=> $_POST['user_type'],
	'status'=> $_POST['status'],
	
		'name_online_store'=>$_POST['name_online_store'],
	 'store_logo'=>$_FILES['image']['name'],	
	'online_store_description'=>$_POST['online_store_description'],
	'company_legal_name'=>$_POST['company_legal_name'],
	'cst_number'=>$_POST['cst_number'],
	'registered_address'=>$_POST['registered_address'],
	'pincode'=>$_POST['pincode'],
	'city'=>$_POST['city'],
	'state'=>$_POST['state'],
	
	
	'account_holder_name'=>$_POST['account_holder_name'],
	'account_number'=>$_POST['account_number'],
	'account_type'=>$_POST['account_type'],
	'ifsc_code'=>$_POST['ifsc_code'],
	'bank_name'=>$_POST['bank_name'],
	'bank_city'=>$_POST['bank_city'],
	'bank_state'=>$_POST['bank_state'],
	'branch'=>$_POST['branch']
	
	
		
		);
$fields=array(
	'name','email','mobile','gstin','name_online_store','online_store_description','company_legal_name',
	'cst_number','registered_address','pincode','city','state',
	'account_holder_name','account_number','account_type','ifsc_code','bank_name',
	'bank_city','bank_state','branch');
	
	
	$validation=new Validation;
	$message=$validation->check_empty($data,$fields);
	if($message==null || $message=''){
		
		
		if(!empty ($_FILES["image"]["name"])){
		
$target_dir = DIR_IMAGE_SYSTEM;
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$store_logo= basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
if($uploadOk==1){
	  if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

		
		
		
		
		
		
$sql="update users set name= '".$_POST['name']."', email= '".$_POST['email']."', gstin= '".$_POST['gstin']."'
		,mobile= '".$_POST['mobile']."',status= '".$_POST['status']."', 
		user_type= '".$_POST['user_type']."' ,name_online_store='".$_POST['name_online_store']."',
		store_logo='$store_logo',online_store_description='".$_POST['online_store_description']."',company_legal_name='".$_POST['company_legal_name']."',
cst_number='".$_POST['cst_number']."',registered_address='".$_POST['registered_address']."',pincode='".$_POST['pincode']."',
city='".$_POST['city']."',state='".$_POST['state']."' where id='$id'";

		}else{
			
			
		$sql="update users set name= '".$_POST['name']."', email= '".$_POST['email']."', gstin= '".$_POST['gstin']."'
		,mobile= '".$_POST['mobile']."',status= '".$_POST['status']."', 
		user_type= '".$_POST['user_type']."' ,name_online_store='".$_POST['name_online_store']."',
		online_store_description='".$_POST['online_store_description']."',company_legal_name='".$_POST['company_legal_name']."',
cst_number='".$_POST['cst_number']."',registered_address='".$_POST['registered_address']."',pincode='".$_POST['pincode']."',
city='".$_POST['city']."',state='".$_POST['state']."' where id='$id'";	
		
		
		}
			$crud->execute($sql);
	
		
	
	$sql1="update bank_info set account_holder_name='".$_POST['account_holder_name']."' ,account_number='".$_POST['account_number']."',
	account_type='".$_POST['account_type']."',ifsc_code='".$_POST['ifsc_code']."',bank_name='".$_POST['bank_name']."',
	bank_city='".$_POST['bank_city']."',bank_state='".$_POST['bank_state']."',branch='".$_POST['branch']."' where user_id='$id'";
	
		$crud->execute($sql1);
			$success = 'Successfully updated users';

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
            <h2>Add Seller</h2>
          
            <table class="table-2 mt-20">
		
<form action="" method="post" enctype="multipart/form-data">
STORE LOGO:<input type="file" name="image">
<img src ="<?php echo IMAGE_SITE_URL?>/<?php echo $user['store_logo'];?>" alt=""/>

<br>
<br>
Name:<input type ="text" name="name" value="<?php echo $user['name'];?>">
<br><br>
Email:<input type ="text" name="email"value="<?php echo $user['email'];?>">
<br><br>

GST Number:<input type ="text" name="gstin" value="<?php echo $user['gstin'];?>">
<br><br>

Mobile Number:<input type ="text" name="mobile" value="<?php echo $user['mobile'];?>">
<br><br>
  user_type: <select name="user_type">
<option value=""></option>
<option value="2" <?php if ($user['user_type']== 2 ) echo 'selected="selected"' ;?>>seller</option>
<option value="3" <?php if($user['user_type']==3)echo 'selected="selected"'; ?>>customer</option>
</select>
<br>
<br>

  Status: <select name="status">
<option value="0" <?php if ($user['status']== 0 ) echo 'selected="selected"' ; ?> >disapprove</option>
<option value="1" <?php if ($user['status'] == 1 ) echo 'selected="selected"' ; ?> >approve</option>
</select>
<br>
<br>

Name Online Store:<input type ="text" name="name_online_store" value="<?php echo $user['name_online_store'];?>">

<br><br>
Online Store Description:<input type ="text" name="online_store_description" value="<?php echo $user['online_store_description'];?>">
<br><br>
Company Legal Name:<input type ="text" name="company_legal_name" value="<?php echo $user['company_legal_name'];?>">
<br><br>
CST NUMBER:<input type ="text" name="cst_number" value="<?php echo $user['cst_number'];?>">
<br><br>
Registerd Address:<input type ="text" name="registered_address" value="<?php echo $user['registered_address'];?>">
<br><br>
Pincode:<input type ="text" name="pincode" value="<?php echo $user['pincode'];?>">
<br><br>
city:<input type ="text" name="city" value="<?php echo $user['city'];?>">
<br>
<br>

State<select name="state">
<option value=""> select state</option>
<?php
$crud=new crud;
$sql="select state_name from state_list";
$result=$crud->getData($sql);
if(!empty($result)){
	foreach($result as $res){
		
		?>
		
<option value="<?php echo $res['state_name']; ?>"<?php echo $user['state']==$res['state_name']?"selected" :"";?>>
	<?php echo $res['state_name'];?> </option>

<?php
}
}
?>

</select>
<br><br>


Account Holder Name<input type ="text" name="account_holder_name" value="<?php echo $user1['account_holder_name'];?>">
<br><br>
Account Number<input type ="text" name="account_number" value="<?php echo $user1['account_number'];?>">
<br><br>
Account Type<input type ="text" name="account_type" value="<?php echo $user1['account_type'];?>">
<br><br>
IFSC CODE<input type ="text" name="ifsc_code" value="<?php echo $user1['ifsc_code'];?>">
<br><br>
Bank Name<input type ="text" name="bank_name" value="<?php echo $user1['bank_name'];?>">
<br><br>
Bank City<input type ="text" name="bank_city" value="<?php echo $user1['bank_city'];?>">
<br><br>
Bank State<select name="bank_state">
<option value ="">select bank_state</option>
<?php 
$crud=new crud;
$sql="select state_name from state_list";
$result=$crud->getData($sql);
if(!empty($result)){
	foreach($result as $res){
		?>
<option value="<?php echo $res['state_name'];?>"<?php echo $user1['bank_state']==$res['state_name']? "selected" :"";?>><?php echo $res['state_name'];?></option>		
	


	
<?php
}
}
?>


</select>
<br>
<br>
Branch<input type ="text" name="branch" value="<?php echo $user1['branch'];?>">

<br><br>

<input type="submit" name="submit" class="btn">

</form>



</table>
</section>
</div>



		
		
		
		
		
	

