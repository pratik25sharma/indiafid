<?php
if(!session_id()){session_start();}
function __autoload($className) {
	include '../classes/'.$className . '.php';
}
include '../common/constants.php';
$success = '';$error='';			
$crud=new Crud;
$id= $_SESSION['user']['id'];
if(!empty($_POST)){
	$data = array(
		'name'=>$_POST['name'],
		'description'=> $_POST['description'],
		'meta_keyword'=> isset($_POST['meta_keyword']) ? $_POST['meta_keyword'] : "",
		'meta_description'=> isset($_POST['meta_description']) ? $_POST['meta_description'] : "",
		'category'=> $_POST['category'],
		'regular_price'=> isset($_POST['regular_price']) ? $_POST['regular_price'] : "",
		'offer_price'=> isset($_POST['offer_price']) ? $_POST['offer_price'] : "",
		'services'=> isset($_POST['services']) ? $_POST['services'] : "",
		'travel'=> isset($_POST['travel']) ? $_POST['travel'] : "",
		'no_of_guest'=> isset($_POST['no_of_guest']) ? $_POST['no_of_guest'] : "",
		'venue_type'=> isset($_POST['venue_type']) ? $_POST['venue_type'] : "",
		'space_preference'=> isset($_POST['space_preference']) ? $_POST['space_preference'] : "",
		'no_of_days'=> isset($_POST['no_of_days']) ? $_POST['no_of_days'] : "",
		'no_of_functions'=> isset($_POST['no_of_functions']) ? $_POST['no_of_functions'] : "",
		'airbrush'=> isset($_POST['airbrush']) ? $_POST['airbrush'] : "",
		'outfit_type'=> isset($_POST['outfit_type']) ? $_POST['outfit_type'] : "",
		'store_type'=> isset($_POST['store_type']) ? $_POST['store_type'] : "",
		'speciality'=> isset($_POST['speciality']) ? $_POST['speciality'] : "",
		'jewellery_type'=> isset($_POST['jewellery_type']) ? $_POST['jewellery_type'] : "",
		'special_requirements'=> isset($_POST['special_requirements']) ? $_POST['special_requirements'] : "",
		'accessory_type'=> isset($_POST['accessory_type']) ? $_POST['accessory_type'] : "",
		'favor_type'=> isset($_POST['favor_type']) ? $_POST['favor_type'] : "",
		'product_files' => $_POST['product_files'],
		'product_video_files' => $_POST['product_video_files'],
		'status'=> $_POST['status']
		//'stock'=> $_POST['stock']
	);
	$fields = array('name','description','category','status');
	$validation = new Validation;
	$message = $validation->check_empty($data,$fields);
	if($message == null || $message == ''){
		if(isset($data['product_files']) && !empty($data['product_files'])){
			$product_files = json_decode($data['product_files'],true);
		}
		$product_id= $_POST['id'];
		$modifiedtime = date('Y-m-d h:i:s');
		$sql = "update products set name = '".$data['name']."',description = '".$data['description']."',meta_keyword = '".$data['meta_keyword']."',meta_description = '".$data['meta_description']."',price = '".$data['regular_price']."',category_id = '".$data['category']."',offer_price = '".$data['offer_price']."',services = '".$data['services']."',travel = '".$data['travel']."',no_of_guest = '".$data['no_of_guest']."',venue_type = '".$data['venue_type']."',space_preference = '".$data['space_preference']."',no_of_days = '".$data['no_of_days']."',no_of_functions = '".$data['no_of_functions']."',airbrush = '".$data['airbrush']."',outfit_type = '".$data['outfit_type']."',store_type = '".$data['store_type']."',speciality = '".$data['speciality']."',jewellery_type = '".$data['jewellery_type']."',special_requirements = '".$data['special_requirements']."',accessory_type = '".$data['accessory_type']."',favor_type = '".$data['favor_type']."',status = '".$data['status']."',modified_at = '".$modifiedtime."' where id = $product_id";
		$crud->execute($sql);
		if(!empty($product_files)){
			$target_dir = DIR_IMAGE_SYSTEM.'product_' .$product_id;
			if(!is_dir($target_dir)){
				mkdir($target_dir);
			}
			foreach($product_files as $product_file){
				if(copy('../uploads/tmpproducts/'.$product_file, $target_dir.'/'.$product_file)){
					$img=array(
						'product_id'=>$product_id,
						'image'=>$product_file
					);
					$crud->insertData('products_images',$img);
					unlink('../uploads/tmpproducts/'.$product_file);
					$crud->makeThumbnails($target_dir.'/',$product_file,130,130);
					$crud->makeThumbnails($target_dir.'/',$product_file,400,400);
					$crud->makeThumbnails($target_dir.'/',$product_file,1000,1000);
				}
			}
			if(isset($data['product_video_files']) && !empty($data['product_video_files'])){
				$product_video_files = json_decode($data['product_video_files'],true);
			}
			if(!empty($product_video_files)){
				foreach($product_video_files as $product_video_file){
					if(copy('../uploads/tmpproducts/'.$product_video_file, $target_dir.'/'.$product_video_file)){
						$vid=array(
							'product_id'=>$product_id,
							'video'=>$product_video_file
						);
						$crud->insertData('products_videos',$vid);
						unlink('../uploads/tmpproducts/'.$product_video_file);
					}
				}
			}
			$src  = '../uploads/tmpproducts/';
			$dir = opendir($src);
			while(false !== ( $file = readdir($dir)) ) {
				if (( $file != '.' ) && ( $file != '..' )) {
					$full = $src . '/' . $file;
					if ( !is_dir($full) ) {
						unlink($full);
					}
				}
			}
			closedir($dir);
		}
		$success = 'Successfully updated a product';
	}else{
		$error = $message;
	}

	if(empty($error)){
		echo json_encode(array('status'=>true,'message'=>$success));
	}else{
		echo json_encode(array('status'=>false,'message'=>$error));
	}
}
?>