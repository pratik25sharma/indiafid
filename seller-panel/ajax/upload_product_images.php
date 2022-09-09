<?php
include '../common/constants.php';
function __autoload($className) {
	include '../classes/'.$className . '.php';
}
	
$error='';
$success='';
$target_dir = '../uploads/tmpproducts/';
if( ! is_dir($target_dir) ){
	mkdir($target_dir, 0755, true);
}
$html = '';
$filenames = array();
if(!empty($_FILES["file"]["name"]) && !empty($_FILES["file"]["tmp_name"])){
	//for($i=0; $i<$total; $i++){
		$filename = preg_replace('/\s+/', '_', $_FILES["file"]["name"]);
		$filename = str_replace("(","",$filename);
		$filename = str_replace(")","",$filename);
		$target_file = $target_dir .$filename;
		if(file_exists($target_file)){
			$filename = time().'_'.$filename; 
		}
		$target_file = $target_dir .$filename;
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		if( $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "jpg") {
			$error = "Sorry, this file type is not permitted.";
			$uploadOk = 0;
		}
		if($uploadOk==1){
			if($_FILES["file"]["size"] > 5242880){
				$error = "Sorry, maximum file size allowed is 5mb";
				$uploadOk = 0;
			}
		}
		/* if($uploadOk==1){
			list($width, $height) = getimagesize($_FILES["file"]["tmp_name"]);
			if($width < 500 || $height < 500){
				$error = "Sorry, image size should be minimum 500x500";
				$uploadOk = 0;
			}else if($width > 1000 || $height > 1000){
				$error = "Sorry, image size should be maximum 1000x1000";
				$uploadOk = 0;
			}
		} */
		if($uploadOk==1){
			if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
				$filenames[] = $filename;
			}
			else {
				$error= "Sorry, there was an error uploading your file.";
				$uploadOk = 0;
			}	
		}
		if($uploadOk == 1){
			$html .= '<span class="save_files">'.$_FILES["file"]["name"].' <a class="remove_icon" data-file-name="'.$filename.'" href="javascript:void(0);" title="Remove file"><i class="fa fa-times"></i></a></span>';
		}else{
			$html .= '<span class="save_files">'.$_FILES["file"]["name"].' <a class="remove_icon" href="javascript:void(0);" title="Remove file"><i class="fa fa-times"></i></a></span>';
		}
	   
	//}	
	echo json_encode(array('status'=>true,'message'=>$html,'file_names'=>$filenames));
}else{
	$html .= '<span class="save_files">'.$_FILES["file"]["name"].' <a class="remove_icon" href="javascript:void(0);" title="Remove file"><i class="fa fa-times"></i></a></span>';
	echo json_encode(array('status'=>true,'message'=>$html,'file_names'=>$filenames));
}
?>