<?php

$error='';
$success='';

$crud= new crud;

	$_SESSION['user'];

	$id= $_SESSION['user']['id'];
	


$sql="select * from users where id = $id";
$result=$crud->getdata($sql);

if(!empty($result)){
$user=$result[0];
}

$sql1="select * from bank_info where user_id = $id";
$result1=$crud->getdata($sql1);

if(!empty($result1)){
$user1=$result1[0];
}







if(isset($_POST['name']) && !empty($_POST)){
$data=array(
'name_online_store'=>$_POST['name_online_store'],
'store_logo'=> $_FILES['image']['name'],
'online_store_description'=>$_POST['online_store_description'],
'name'=>$_POST['name'],
'mobile'=>$_POST['mobile'],
'company_legal_name'=>$_POST['company_legal_name'],
'cst_number'=>$_POST['cst_number'],
'gstin'=>$_POST['gstin'],
'registered_address'=>$_POST['registered_address'],
'pincode'=>$_POST['pincode'],
'city'=>$_POST['city'],
'state'=>$_POST['state'],
'account_holder_name'=>$_POST['account_holder_name'],
'account_number'=>$_POST['account_number'],
'account_type'=>$_POST['account_type'],
'ifsc_code'=>$_POST['ifsc_code'],
'bank_name'=>$_POST['bank_name'],
'bank_state'=>$_POST['bank_state'],
'bank_city'=>$_POST['bank_city'],
'branch'=>$_POST['branch']

);
if (!empty($_FILES["image"]["name"])){
$fields = array('name_online_store','store_logo','online_store_description','name','mobile',
'company_legal_name','cst_number','gstin','registered_address','pincode','city','state','account_holder_name',
'account_number','account_type','ifsc_code','bank_name','bank_state','bank_city','branch');
}

else{
$fields = array('name_online_store','online_store_description','name','mobile',
'company_legal_name','cst_number','gstin','registered_address','pincode','city','state','account_holder_name',
'account_number','account_type','ifsc_code','bank_name','bank_state','bank_city','branch');
}
$validation = new Validation;

	$message = $validation->check_empty($data,$fields);
	if($message == null || $message == ''){
		if (!empty($_FILES["image"]["name"])){
		$target_dir = "uploads/";
$store_logo= time().'_'.basename($_FILES["image"]["name"]);
 $target_file = $target_dir . $store_logo;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if($imageFileType != "jpg" && $imageFileType != "png"  && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $error= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
	
}




if($uploadOk == 1){
          
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        $success ="The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
		
    } else {
        $error= "Sorry, there was an error uploading your file.";
    }


}
		
		
		
		
	$sql = "update users  set name_online_store = '".$_POST['name_online_store']."',store_logo = '$store_logo',online_store_description = '".$_POST['online_store_description']."',
	name = '".$_POST['name']."' , mobile='".$_POST['mobile']."' ,company_legal_name='".$_POST['company_legal_name']."',cst_number='".$_POST['cst_number']."',
    gstin='".$_POST['gstin']."',registered_address='".$_POST['registered_address']."',pincode='".$_POST['pincode']."',city='".$_POST['city']."',
	state='".$_POST['state']."' where id =$id";
		
}

else{
	
	$sql = "update users  set name_online_store = '".$_POST['name_online_store']."',online_store_description = '".$_POST['online_store_description']."',
	name = '".$_POST['name']."' , mobile='".$_POST['mobile']."' ,company_legal_name='".$_POST['company_legal_name']."',cst_number='".$_POST['cst_number']."',
    gstin='".$_POST['gstin']."',registered_address='".$_POST['registered_address']."',pincode='".$_POST['pincode']."',city='".$_POST['city']."',
	state='".$_POST['state']."' where id =$id";
		
	
	
}
   $crud->execute($sql);
		$success = 'Successfully Profile  Updated ';
	
	
	$sql1 = "update bank_info  set account_holder_name = '".$_POST['account_holder_name']."',account_number = '".$_POST['account_number']."',
	account_type = '".$_POST['account_type']."' , ifsc_code='".$_POST['ifsc_code']."' ,bank_name='".$_POST['bank_name']."',bank_city='".$_POST['bank_city']."',
	bank_state='".$_POST['bank_state']."',branch='".$_POST['branch']."' where user_id =$id";
	
	$crud->execute($sql1);
		$success = 'Successfully  Profile Updated ';
	
	
	
	
	
	
	
	
      
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
			
			<a href="<?php echo  SITE_URL ?>/change_password">Change Password</a>

	<form action="" method="post" enctype="multipart/form-data" >
   
 Store_logo: <input type="file" name="image">
   <img src ="uploads/<?php  echo $user['store_logo'];?>" alt=""/ >
  
<br><br>
 Name Online Store:<input type="text" name="name_online_store" value="<?php  echo $user['name_online_store'];?>">
 <br><br>
 Online Store Description:<input type="text" name="online_store_description" value="<?php  echo $user['online_store_description'];?>">
 <br><br>
  Name:<input type="text" name="name" value="<?php  echo $user['name'];?>">
 <br><br>
 Mobile:<input type="text" name="mobile" value="<?php  echo $user['mobile'];?>">
 <br><br>
 Company Legal Name:<input type="text" name="company_legal_name" value="<?php  echo $user['company_legal_name'];?>">
 <br><br>
 Cst Number:<input type="text" name="cst_number" value="<?php  echo $user['cst_number'];?>">
 <br><br>
 Gstin:<input type="text" name="gstin" value="<?php  echo $user['gstin'];?>">
 <br><br>
 Registered Address:<input type="text" name="registered_address" value="<?php  echo $user['registered_address'];?>">
 <br><br>
 Pincode:<input type="text" name="pincode" value="<?php  echo $user['pincode'];?>">
 <br><br>
 City:<input type="text" name="city" value="<?php  echo $user['city'];?>">
 <br><br>
 State:<input type="text" name="state" value="<?php  echo $user['state'];?>">
 <br><br>
Account Holder Name:<input type="text" name="account_holder_name" value="<?php  echo $user1['account_holder_name'];?>">
 <br><br>
Account Number:<input type="text" name="account_number" value="<?php  echo $user1['account_number'];?>">
 <br><br>
Account Type:
 <select name="account_type" >
										<option value="" >Select Account</option>
										<option value="current"<?php  echo $user1['account_type'] == 'current' ? "selected"  :""; ?> >Current</option>
										<option value="saving"<?php  echo $user1['account_type'] == 'saving' ? "selected"  :""; ?> >saving</option>
										
										
                                        </select>
 <br><br>
Bank State:<select name="bank_state">
									   <option value="">Select State</option>
									   <?php
                                        $crud = new crud;
									   $sql = "SELECT state_name from state_list";
										$result = $crud->getData($sql);
										if(!empty($result)){
											foreach($result as $res){
												?>
												
												
											
							
 <option value="<?php echo $res['state_name']; ?>"<?php echo $user1['bank_state'] == $res['state_name'] ? "selected" :""; ?>><?php echo $res['state_name']; ?></option>
                <?php
				}
										}
                ?>
                </select>
 <br><br>
Bank City:<input type="text" name="bank_city" value="<?php  echo $user1['bank_city'];?>">
 <br><br>
Branch:<input type="text" name="branch" value="<?php  echo $user1['branch'];?>">
 <br><br>
IFSC Code:<input type="text" name="ifsc_code" value="<?php  echo $user1['ifsc_code'];?>">
 <br><br>
Bank Name:<input type="text" name="bank_name" value="<?php  echo $user1['bank_name'];?>">
 <br><br>

 
<input type="submit" name="submit">
</form>

	
	
	











