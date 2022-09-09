
    <div class="wrapper mt-20 mb-20">
        <section class="blocks">
            <h2>Customer List</h2>

 <div class="row top_btn">
                <div class="btn_block">
<a href="<?php echo SITE_URL ;?>/user_add" class="btn">Customer add</a>

                </div>
            </div>

<?php

	echo "<table class='table-1'>

	<tr><th>id</th>";
	echo "
<th>Name</th>
<th>Email</th>
<th>Mobile</th>
<th>Status</th>
<th>Edit</th>
<th>Delete</th>
	
	<tr>";
	
    $crud = new Crud; 
$sql="SELECT id ,name,email,mobile,gstin,status,user_type from users where user_type =3";
          $result = $crud->getData($sql);                 

							
if(!empty($result)){
	
foreach($result as $res){
		
if($res['status']==0){
	$txt = "disapprove";
}
else{ $txt = "approved";
	
}								
	if($res['user_type']==2){
	$var="seller";
	}
	else{
	$var="customer";
	}
	
	
	
	
echo "<tr>
	<td>{$res['id']}</td>
	<td>{$res['name']}</td>
	<td>{$res['email']}</td>
	<td>{$res['mobile']}</td>
			

	<td>$txt</td>
		<td><a href='user_update?id={$res['id']}'class='btn'><i class='fas fa-edit'></i>edit</td></td>

		<td><a href='javascript:void(0)' data-id='{$res['id']}'class='btn ok'><i class='fas fa-edit'></i>delete</a></td>

	</tr>";
}
}
	

echo "</table>";


?>
</section>
</div>
