


    <div class="wrapper mt-20 mb-20">
        <section class="blocks">
            <h2>Product List</h2>

 <div class="row top_btn">
                <div class="btn_block">
                    <!--a href="products_add" class="btn"> <i class="fas fa-plus"></i> Add Product</a-->
                    <a href="upload_excel" class="btn"> <i class="fas fa-plus"></i>Upload Csv File</a>
                </div>
            </div>
<?php
	echo "<table class='table-1'>
	<tr><th>id</th>";
echo "<th>Name</th>
<th>Description</th>
<th>Price</th>
<!--<th>Edit</th>--><th>View</th>
<!--<th>Delete</th>-->
</tr>";
    $crud = new Crud; 

$sql="SELECT id,name,description,price from products";
          $result = $crud->getData($sql);           
		  if(!empty($result)){
	foreach ($result as $res){
		
		

	echo "<tr>
	<td>{$res['id']}</td>
	<td>{$res['name']}</td>
	<td>{$res['description']}</td>
	<td>{$res['price']}</td>
	<!--<td><a href='product_edit?id={$res['id']}' class='btn'><i class='fas fa-edit'></i>edit</a></td>-->	<td><a href='product_view?id={$res['id']}' class='btn'><i class='fas fa-edit'></i>View</a></td>

   <!--<td ><a href='javascript:void(0)' data-id='{$res['id']}' class='dlt btn'><i class='fas fa-edit'></i>delete</a></td>-->
        	
	</tr>";


    }
    }
    echo "</table>";
 
?> 
</section>
</div>
