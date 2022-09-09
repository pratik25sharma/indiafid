<style>
table ,tr,th,td {border:1px solid black;padding:10px;}
</style>

<?php
$id=$_SESSION['user']['id'];

echo "<table>
<tr>
<th>ID</th>
<th>DISCOUNT</th>
<th>DISCOUNT TYPE</th>
<th>COUPON CODE</th>
<th>START DATE</th>
<th>END DATE</th>
<th>EDIT</th>
<th>DELETE</th>
</tr>";

$crud= new crud;

$sql="select id,discount,discount_type,coupon_code,start_date,end_date from coupon where seller_id = $id ";
$result = $crud->getdata($sql);

if(!empty($result)){
foreach ($result as $res){

echo "<tr>
<td>{$res['id']}</td>
<td>{$res['discount']}</td>
<td>{$res['discount_type']}</td>
<td>{$res['coupon_code']}</td>
<td>{$res['start_date']}</td>
<td>{$res['end_date']}</td>
<td><a href='coupon_edit?id={$res['id']}'>EDIT</a></td>
<td><a href='javascript:void(0)' data-id='{$res['id']}' class='move'>DELETE</a></td>

</tr>";



}
}

echo "</table>";


?>