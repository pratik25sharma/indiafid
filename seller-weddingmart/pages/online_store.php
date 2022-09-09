
<?php
$error='';$success = '';
if (isset($_POST['name_online_store'])  && !empty($_POST) ){
$data=array(
'name_online_store'=>$_POST['name_online_store'],
'store_logo'=> $_FILES['image']['name'],

'online_store_description'=>$_POST['online_store_description']
);

 
$fields=array('name_online_store','store_logo','online_store_description');
$validation = new validation;
$message=$validation->check_empty($data,$fields);
if ($message == null || $message == ''){
	
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
		$array =array(
							'name_online_store'=> $_POST['name_online_store'],
					
							'online_store_description'=> $_POST['online_store_description'],
							
							'store_logo'=>$store_logo
							
					);
					
				

	if(!session_id()){
	session_start();
	}
	$_SESSION['tmp_user']=$array;
	$url = SITE_URL.'/contact';
	echo '<script type="text/javascript">
								location.replace("'.$url.'");
						  </script>';

    } else {
        $error= "Sorry, there was an error uploading your file.";
    }

}
  

}else{
	$error= $message;
}
}

?>
    	<div class="mydetails_panel online_store">
            <div class="new_container">
              <div class="my_account">
                <span>My Account<i></i><em></em></span>
              </div>
              <div class="left_panel">
                  <div class="merchant_info">
                      <h1>MICRO MARKETING<span>Chennai , Tamil Nadu</span></h1>
                  </div>
                  <ul class="merchant_tags">
                      <li><a href="javascript:void(0);" class="online_store active">Online Store Info</a></li>
                      <li><a href="javascript:void(0);" class="contact">Contact Details</a></li>
                      <li><a href="javascript:void(0);" class="business">Business Details</a></li>
                      <li><a href="javascript:void(0);" class="bank">Bank Info</a></li>
                      
                  </ul>
                  <a href="javascript:void(0);" class="logout">LogOut</a>
              </div>
              <div class="spacing"></div>
              <div class="right_panel">
                  <h1>Online Store Details</h1>
				  <?php  
				    echo isset($success) && !empty($success) ? "<div class='alert alert-success'>".$success."</div>" : "";
                echo isset($error) && !empty($error) ? "<div class='alert alert-danger'>".$error."</div>" : "";
                ?>
            
                  <form action="" method="post"  enctype="multipart/form-data" id="testform">
                      <ul>
                          <li class="input-row">
                               <span>
                                   <label>Name of the Online Store</label>
                               </span> 
                               <span>
                                   <input type="text" name="name_online_store" id="name_online_store">
                               </span>
                          </li>
                           <li class="input-row">
                               <span>
                                   <label>Store Logo</label>
                               </span> 
                               <span class="logo">


  <img id="logo" src="<?php echo ASSET_URL; ?>image/download.png" alt="" />


							   
                                   <input type="file" name="image"  id="image"  required accept="image"  multiple="false">
                                   <p id="upload_file">Browse store logo</p>
                               </span>
                          </li>
                           
                           <li class="input-row">
                               <span>
                                   <label>Online Store Description</label>
                               </span> 
                               <span>
                                  <textarea name="online_store_description" id="online_store_description" rows="3"></textarea>
                               </span>
                          </li>
                      </ul>
                      <a href="javascript:void(0);" class="n_btn orange_fill submit_btn ">Save Store Details</a>
					  
                  </form>
              </div>
            </div>
        </div>
        