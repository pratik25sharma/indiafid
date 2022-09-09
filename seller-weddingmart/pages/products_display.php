
<style>
table ,tr,th,td {border:1px solid black;padding:10px;}
</style>

<?php
$id =$_SESSION['user']['id'];
echo "<table>
<tr>
<th>ID</th>
<th>NAME</th>
<th>DESCRIPTION</th>
<th>PRICE</th>
<th>CATEGORY</th>
<th>EDIT</th>
<th>DELETE</th>

</tr>";

$crud = new crud;

$sql= "select id,name,description,price,category from products where user_id=$id";
$result=$crud->getdata($sql);

if(!empty($result)){
foreach ($result as $res){

echo "<tr>
<td>{$res['id']}</td>
<td>{$res['name']}</td>
<td>{$res['description']}</td>
<td>{$res['price']}</td>
<td>{$res['category']}</td>
<td><a href='products_edit?id={$res['id']}'>EDIT</a></td>
<td><a href='javascript:void(0)' data-id='{$res['id']}' class='log'>DELETE</a></td>


</tr>";

}
}

echo "</table>";








?>