<?php
$error='';
$success='';
$id=$_GET['id'];
$crud= new crud;
$sql="select * from coupon where id= $id ";
$result=$crud->getdata($sql);

if(!empty($result)){
$user=$result[0];
}

if(isset($_POST['submit']) && !empty($_POST)){

$data= array(
'discount'=>$_POST['discount'],
'discount_type'=>$_POST['discount_type'],
'coupon_code'=>$_POST['coupon_code'],
'start_date'=>$_POST['start_date'],
'end_date'=>$_POST['end_date']

);

$fields=array('discount','discount_type','coupon_code','start_date','end_date');
$validation = new validation;
$message= $validation->check_empty($data,$fields);
if ($message== null || $message == ''){

$sql="update coupon set discount ='".$_POST['discount']."',discount_type = '".$_POST['discount_type']."',
coupon_code ='".$_POST['coupon_code']."',start_date='".$_POST['start_date']."' ,end_date='".$_POST['end_date']."'
	where id =$id ";
	
$crud->execute($sql);
		$success = 'Successfully Updated coupon';












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
<form action="" method="post">
Discount:<input type="text" name="discount"value="<?php  echo $user['discount'];?>">
<br><br>
Discount Type:<input type="radio" name="discount_type" value="flat" <?php echo ($user['discount_type'] == 'flat') ? "checked" : ""; ?>> flat
<input type="radio" name="discount_type" value="%"<?php echo ($user['discount_type'] == '%') ? "checked" : "";?> >%


<br><br>
Coupon Code:<input type="text" name="coupon_code" value="<?php  echo $user['coupon_code'];?>">
<br><br>
Start_date:<input type="text" name="start_date" id="startDate" value="<?php  echo $user['start_date'];?>">
<br><br>
End_date:<input type="text" name="end_date" id="endDate" value="<?php  echo $user['end_date'];?>">
<br><br>
<input type="submit" name="submit">




</form>




