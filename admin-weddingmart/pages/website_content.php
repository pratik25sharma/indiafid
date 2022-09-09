

    <div class="wrapper mt-20 mb-20">
        <section class="blocks">
            <h2>Add More Pages</h2>

 <div class="row top_btn">
                <div class="btn_block">
                    <a href="add_pages" class="btn"> <i class="fas fa-plus"></i> Add More</a>
                </div>
            </div>

<?php
echo "<table class='table-1'>
<tr><th>id</th>";
echo "<th>Title</th>
<th>Description</th>
<th>Slug</th>
<th>Created Date</th>
<th>Edit</th>
<th>delete</th>
</tr>";
$crud=new crud;
$sql="select *from website_content";
$result=$crud->getData($sql);
if(!empty ($result)){
	foreach($result as $res){
		echo"<tr>
		<td>{$res['id']}</td>
		<td>{$res['title']}</td>
		<td>{$res['description']}</td>
		<td>{$res['slug']}</td>
		<td>{$res['created_date']}</td>
		
	<td><a href='update_page?id={$res['id']}' class='btn'><i class='fas fa-edit'></i>edit</a></td>
	  
	<td><a href='javascript:void(0)' data-id='{$res['id']}' class='btn pg'><i class='fas fa-edit'></i>delete</a></td>

		</tr>";
	}
}
	
	echo "</table>";
?>
</section>
</div>