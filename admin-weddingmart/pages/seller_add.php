<?php
$success='';
$error='';
if(isset($_POST['submit'])&& !empty($_POST)){
	$data=array(
	'name'=>$_POST['name'],
	'email'=>$_POST['email'],
	'password'=>$_POST['password'],
	'mobile'=>$_POST['mobile'],
	'gstin'=>$_POST['gstin'],
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
	$fields=array('name','email','password','mobile','gstin',
	'name_online_store','store_logo','online_store_description','company_legal_name',
	'cst_number','registered_address','pincode','city','state',
	'account_holder_name','account_number','account_type','ifsc_code','bank_name',
	'bank_city','bank_state','branch');
	
	$validation=new Validation;
	$message=$validation->check_empty($data,$fields);
	if($message==null || $message==''){
		$crud=new crud;
		$validemail=$validation->is_email_valid($data['email']);
		if(!$validemail){
		$message="enter valid email";
		}
		else
		{
			$email=$data['email'];
			$sql="select email from users where email='$email'";
			$result=$crud->getData($sql);
		}
		if(isset($result)&& !empty($result)){
			$message="email already exists";
}
}

if($message==null || $message==''){
	
	
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

	
	  			$password=md5($_POST['password']);

	$seller=array(
		'name'=>$_POST['name'],
		'email'=>$_POST['email'],
		'password'=>$password,
		'mobile'=>$_POST['mobile'],

	       					'user_type'=>2	,	
							'status'=>0,
		'gstin'=>$_POST['gstin'],
		'name_online_store'=>$_POST['name_online_store'],
		'store_logo'=>$store_logo,	
		'online_store_description'=>$_POST['online_store_description'],
		'company_legal_name'=>$_POST['company_legal_name'],
		'cst_number'=>$_POST['cst_number'],
		'registered_address'=>$_POST['registered_address'],
		'pincode'=>$_POST['pincode'],
		'city'=>$_POST['city'],
		'state'=>$_POST['state']

	
	);
	


	$response=$crud->insertData('users',$seller);
		
		


	$response=json_decode($response);
$user_id=isset($response)&& !empty($response)&& $response-> status ? $response->message:"";	

if(isset($user_id)&& $user_id>0){	
	
	
	
	$bank=array(
	'user_id'=>$user_id,
		'account_holder_name'=>$_POST['account_holder_name'],
		'account_number'=>$_POST['account_number'] ,
		'account_type'=>$_POST['account_type'] ,
		'ifsc_code'=>$_POST['ifsc_code'] ,
		'bank_name'=>$_POST['bank_name'] ,
		'bank_city'=>$_POST['bank_city'] ,
		'bank_state'=>$_POST['bank_state'] ,
		'branch'=>$_POST['branch'] 
		
		
		);
	
	
	
	$crud->insertData('bank_info',$bank);
			$success = 'Successfully insert bank_info';
			
		
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
            <h2>Add Seller</h2>
          
		
											

<form action="" method="post" enctype="multipart/form-data">
            <table class="table-2 mt-20">

 <tr>
                    <td>Name</td>
              <td><input type ="text" name="name"></td>
                </tr>
 <tr>
                    <td>Email</td>
              <td><input type ="text" name="email"></td>
                </tr>

 <tr>
                    <td>Password</td>
              <td><input type ="password" name="password"></td>
                </tr>
 <tr>
                    <td>Confirm Password</td>
              <td><input type ="password" name="confirm_password"></td>
                </tr>
<tr>
                    <td>Mobile Number</td>
              <td><input type ="text" name="mobile"></td>
                </tr>
				<tr>
				
                    <td>GST Number</td>
              <td><input type ="text" name="gstin"></td>
                </tr>
<tr><td>Online Name Store</td><td><input type ="text" name="name_online_store"></td></tr>
<tr><td>Online Store Description</td><td><input type ="text" name="online_store_description"></td></tr>
<tr><td>Company Legal Name</td><td><input type ="text" name="company_legal_name"></td></tr>
<tr><td>CST NUMBER</td><td><input type ="text" name="cst_number"></td></tr>
<tr><td>Registerd Address</td><td><input type ="text" name="registered_address"></td></tr>
<tr><td>Pincode</td><td><input type ="text" name="pincode"></td></tr>
<tr><td>City</td><td><input type ="text" name="city"></td></tr>



<tr>
<td>
State:</td><td><select name="state">


<option value="">select state</option>
<?php 
$crud=new crud;
$sql="select state_name from state_list";
$result= $crud->getData($sql);
if(!empty($result)){
	foreach($result as $res){
		
?>

<option value="<?php echo $res['state_name']; ?>"><?php echo $res['state_name'];?></option>
<?php
}
}
?>
</select>
</td>

</tr>


<tr><td>Account Holder Name</td><td><input type ="text" name="account_holder_name"></td></tr>
<tr><td>Account Number</td><td><input type ="text" name="account_number"></td></tr>
<tr><td>Account_Type</td><td><input type ="text" name="account_type"></td></tr>
<tr><td>IFSC CODE</td><td><input type ="text" name="ifsc_code"></td></tr>
<tr><td>Bank_Name</td><td><input type ="text" name="bank_name"></td></tr>
<tr><td>Bank City</td><td><input type ="text" name="bank_city"></td></tr>

<tr>
<td>State</td><td><select name="bank_state">
<option>select state</option>
<?php
$crud=new crud;
$sql="select state_name from state_list";
$result=$crud->getData($sql);
if(!empty($result)){
	foreach($result as $res){
?>
<option value="<?php echo $res['state_name'];?>"><?php echo $res['state_name'];?></option>
<?php
}}
?>
</select>
</td>
</tr>
<tr><td>Branch</td><td><input type ="text" name="branch"></td></tr>
   
 <tr>
          <td>STORE LOGO</td>
<td ><input type="file" name="image" id=""><span class="choose_img"><img src="" alt="" ></span></td>
                   </tr>

 <td><input type="submit" name="submit" class="btn"></td>
</table>

</form>
</section>
</div>