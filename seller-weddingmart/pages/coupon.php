<?php
$error='';
$success='';

if (isset($_POST['submit'])&& !empty($_POST)){

$data= array(
'discount'=>$_POST['discount'],
'discount_type'=>isset($_POST['discount_type']),
'coupon_code'=>$_POST['coupon_code'],
'start_date'=>$_POST['start_date'],
'end_date'=>$_POST['end_date']
);

$fields=array('discount','discount_type','coupon_code','start_date','end_date');
$validation = new validation;
$message=$validation->check_empty($data,$fields);

if ($message== null || $message == ''){
$crud= new crud;
$id = $_SESSION['user']['id'];
$coupon=array(

'discount'=>$_POST['discount'],
'discount_type'=>$_POST['discount_type'],
'coupon_code'=>$_POST['coupon_code'],
'start_date'=>$_POST['start_date'],
'end_date'=>$_POST['end_date'],
'seller_id'=>$id


);    

   $crud->insertData('coupon',$coupon);	
	
}
else{
	$error= $message;
	
}

}
?>
<?php
		echo isset($success) && !empty($success) ? "<div class='alert alert-success'>".$success."</div>" : "";
			echo isset($error) && !empty($error) ? "<div class='alert alert-danger'>".$error."</div>" : "";
			?>

<form action="" method="post">
Discount:<input type="text" name="discount">
<br><br>
Discount Type:<input type="radio" name="discount_type" value="flat"> flat
<input type="radio" name="discount_type" value="%">%
<br><br>
Coupon Code:<input type="text" name="coupon_code">
<br><br>
Start Date:<input type="text" name="start_date" id="startDate">
<br><br>
End date:<input type="text" name="end_date" id="endDate">
<br><br>
<input type="submit" name="submit">
</form>




