<?php
if(!session_id()){
	session_start();
}
require_once '../common/constants.php';
function __autoload($className) {
    include '../classes/'.$className . '.php';
}
$id = isset($_SESSION['user']) && !empty($_SESSION['user']) ? $_SESSION['user']['id'] : "";

$draw = $_POST['draw'];
$row = $_POST['start'];
$rowperpage = $_POST['length']; // Rows display per page
$columnIndex = $_POST['order'][0]['column']; // Column index
$columnName = $_POST['columns'][$columnIndex]['data']; // Column name
$columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
$searchValue = $_POST['search']['value']; // Search value

$crud=new Crud;
$searchQuery = '';
if(isset($searchValue) && !empty($searchValue)){
	$searchQuery .= " and (customers.name LIKE '%".$searchValue."%' or products.name LIKE '%".$searchValue."%' ) ";
}
$sel = "select count(*) as allcount from user_enquiries INNER JOIN customers ON customers.id = user_enquiries.user_id INNER JOIN products ON products.id = user_enquiries.product_id where products.user_id = $id ".$searchQuery; 
	
$records =$crud->getData($sel);
$totalRecords = $records[0]['allcount'];

$sel = "select count(*) as allcount from user_enquiries INNER JOIN customers ON customers.id = user_enquiries.user_id INNER JOIN products ON products.id = user_enquiries.product_id where products.user_id = $id ".$searchQuery ;

$records = $crud->getData($sel);
$totalRecordwithFilter = $records[0]['allcount'];


$sql="SELECT user_enquiries.*,customers.name,customers.mobile,products.name as prod_name from user_enquiries INNER JOIN customers ON customers.id = user_enquiries.user_id INNER JOIN products ON products.id = user_enquiries.product_id where products.user_id = $id ".$searchQuery." order by ".$columnName." ".$columnSortOrder." limit ".$row.",".$rowperpage;

$result = $crud->getData($sql);   
$data = array();
if(isset($result) && !empty($result)){
	foreach($result as $res){
		$data[] = array(
			'id' => $res['id'],
			'name' => $res['name'],
			'prod_name' => $res['prod_name'],
			'mobile' => $res['mobile'],
			'function_date' => $res['function_date'],
			'function_time' => $res['function_time'],
			'number_of_guests' => $res['number_of_guests'],
			'number_of_rooms' => $res['number_of_rooms'],
			'email' => $res['email'],
			'details' => $res['details']
		);
	}
}
$response = array(
  "draw" => intval($draw),
  "iTotalRecords" => $totalRecordwithFilter,
  "iTotalDisplayRecords" => $totalRecords,
  "aaData" => $data
);

echo json_encode($response);