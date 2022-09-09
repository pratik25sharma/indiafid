
    <div class="wrapper mt-20 mb-20">
        <section class="blocks">
            <h2>Customer List</h2>

 <div class="row top_btn">
                <div class="btn_block">
<a href="<?php echo SITE_URL ;?>/add_customer" class="btn">Customer add</a>

                </div>
            </div><br>
<table class='table-1'>	<thead>	<tr>		<th>id</th>		<th>Name</th>		<th>Email</th>		<th>Mobile</th>		<th>Status</th>		<th class='no-sort'>Edit</th>		<th class='no-sort'>Delete</th>	</tr>	</thead>	<tbody>
<?php
    $crud = new Crud; 
$sql="SELECT * from customers";
          $result = $crud->getData($sql);                 

							
if(!empty($result)){
	
foreach($result as $res){
		
if($res['status']==0){
	$txt = "disapprove";
}
else{ $txt = "approved";
	
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
?></tbody></table>
</section>
</div>
