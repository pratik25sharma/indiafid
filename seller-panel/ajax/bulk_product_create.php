<?php
if(!session_id()){session_start();}
require '../vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\IOFactory;
include '../classes/Crud.php';
include '../common/constants.php';
$success = '';$error='';			
$crud = new Crud;
$id= $_SESSION['user']['id'];
if(!empty($_FILES["xls_file"])){
	$uploadOk = 1;
	$productFileType = strtolower(pathinfo($_FILES["xls_file"]["name"],PATHINFO_EXTENSION));
	if($productFileType != "xlsx") {
		$error="Sorry, only xlsx files are allowed.";
		$uploadOk = 0;
	}		
	if($uploadOk==1){
		$inputFileName = $_FILES["xls_file"]["tmp_name"];
		$spreadsheet = IOFactory::load($inputFileName);
		$sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
		$arrayIndex = array();
		$columnsArray = array('name','description','price','offer_price','category','services','travel','status','stock');
		if(!empty($sheetData)){
			$first_row = true;
			foreach($sheetData as $rowKey=>$row){
				if ( !$first_row ){ 
					$index = 1;
					$name = $description = $price = $offer_price = $category = $services = $travel = $status = $stock = '';
					foreach( $row as $k=>$cell ){ 
						if($arrayIndex[$index] == 'name'){
							$name = trim($cell);
						}else if($arrayIndex[$index] == 'description'){
							$description = trim($cell);
						}else if($arrayIndex[$index] == 'price'){
							$price = trim($cell);
						}else if($arrayIndex[$index] == 'offer_price'){
							$offer_price = trim($cell);
						}else if($arrayIndex[$index] == 'category'){
							$category = trim($cell);
						}else if($arrayIndex[$index] == 'services'){
							$services = trim($cell);
						}else if($arrayIndex[$index] == 'travel'){
							$travel = trim($cell);
						}else if($arrayIndex[$index] == 'status'){
							$status = trim($cell);
						}else if($arrayIndex[$index] == 'stock'){
							$stock = trim($cell);
						}
						$index += 1;
					}
					$createdtime = date('Y-m-d h:i:s');
					if(!empty($name) && !empty($description) && !empty($price) && !empty($status) && !empty($stock)){
						$sql = "SELECT * FROM categories where name = '$category'";
						$result = $crud->getData($sql);
						if(!empty($result)){
							$category_id = $result[0]['id'];
							$statusVal = ($status == 'active') ? '1' : '0';
							$products = array(
								'name'=>$name,	
								'description'=>$description,
								'price'=>$price,
								'category_id'=>$category_id,
								'offer_price'=>$offer_price,
								'services'=>$services,
								'travel'=>$travel,
								'status'=>$statusVal,
								'stock'=>$stock,
								'created_at'=>$createdtime,
								'modified_at'=>$createdtime,
								'user_id'=>$id,
							);
							$response = $crud->insertData('products',$products);
							$response = json_decode($response);
							$product_id=isset($response)&& !empty($response)&& $response-> status ? $response->message:"";	
							$target_dir = DIR_IMAGE_SYSTEM.'product_' .$product_id;
							if(!is_dir($target_dir)){
								mkdir($target_dir);
							}
							$success .=  'Row '.$rowKey.': product created <br>';
						}else{
							$error .= 'Row '.$rowKey.': have incorrect category name <br>';
						}
					}else{
						$error .= 'Row '.$rowKey.': empty fields <br>';
					}
				}else{
					$index = 1;
					foreach( $row as $k=>$cell ){ 
						if(in_array(trim($cell),$columnsArray)){
							$arrayIndex[$index] = trim($cell);
						}
						$index += 1;
					}
					$first_row = false;
				}
			}
		}
	}
	if(empty($error)){
		echo json_encode(array('status'=>true,'message'=>'Successfully uploaded xlsx file'));
	}else{
		$message = $success.$error;
		echo json_encode(array('status'=>false,'message'=>$message));
	}
}
?>