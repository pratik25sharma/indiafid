<?php
require '../vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'name');
$sheet->setCellValue('B1', 'description');
$sheet->setCellValue('C1', 'price');
$sheet->setCellValue('D1', 'offer_price');
$sheet->setCellValue('E1', 'category');
$sheet->setCellValue('F1', 'services');
$sheet->setCellValue('G1', 'travel');
$sheet->setCellValue('H1', 'status');
$sheet->setCellValue('I1', 'stock');

include '../classes/Crud.php';
include '../common/constants.php';
$success = '';$error='';			
$crud=new Crud;
if(!session_id()){session_start();}
$id= $_SESSION['user']['id'];

$sql="select products.*,categories.name as categoryname from products LEFT JOIN categories ON categories.id = products.category_id where user_id = '$id' ";
if(isset($_GET['cat']) && !empty($_GET['cat']) && $_GET['cat'] >0){
	$sql .= " and products.category_id = '".$_GET['cat']."' ";
}
if(isset($_GET['stock']) && !empty($_GET['stock'])){
	$sql .= " and products.stock = '".$_GET['stock']."' ";
}
if(isset($_GET['price']) && !empty($_GET['price'])){
	$pricearr = explode("-",$_GET['price']);
	$minprice = $pricearr[0];
	$maxprice = $pricearr[1];
	$sql .= " and products.price BETWEEN '$minprice' and '$maxprice' ";
}
if(isset($_GET['search']) && !empty($_GET['search'])){
	$sql .= " and products.name like '%".$_GET['search']."%'";
}
if(isset($_GET['status']) && !empty($_GET['status'])){
	$sql .= " and products.status = ".$_GET['status']." ";
}
if(isset($_GET['sort']) && !empty($_GET['sort'])){
	$sql .= " order by ".$_GET['sort']." desc";
}else{
	$sql .= " order by created_at desc";
}
$result=$crud->getData($sql);
$i = 2;
foreach( $result as $row ) {
	$status = $row['status'] == '1' ? 'active' : 'inactive';
	$sheet->setCellValue( 'A' . $i, $row['name'] );
	$sheet->setCellValue( 'B' . $i, $row['description'] );
	$sheet->setCellValue( 'C' . $i, $row['price'] );
	$sheet->setCellValue( 'D' . $i, $row['offer_price'] );
	$sheet->setCellValue( 'E' . $i, $row['categoryname'] );
	$sheet->setCellValue( 'F' . $i, $row['services'] );
	$sheet->setCellValue( 'G' . $i, $row['travel'] );
	$sheet->setCellValue( 'H' . $i, $status);
	$sheet->setCellValue( 'I' . $i, $row['stock']);
	$i++;
}
$writer = new Xlsx($spreadsheet);
$writer->save('products.xlsx');
echo SITE_URL.'/ajax/products.xlsx';