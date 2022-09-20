<div class="wrapper mt-20 mb-20">
	<section class="blocks">
		<h2>Newsletter Subscribers</h2>
		<div class="row top_btn">
			<!-- <div class="btn_block">
				<a href="categories_add" class="btn"> <i class="fas fa-plus"></i> Add Categories</a>
			</div> -->
		</div>
		<br>
		<table class='table-1'>
			<thead>
				<tr>
					<th>id</th>
					<th>Email</th>
					<th>Time subscribed</th>
				</tr>
			</thead>
			<tbody>
			<?php
			$crud = new Crud; 
			$sql="SELECT * from newsletter";
			$result = $crud->getData($sql);                 
			if(!empty($result)){
				$i = 0;
				foreach ($result as $res){
					echo "<tr>
						<td>{$res['id']}</td>
						<td>{$res['email']}</td>
						<td>{$res['created_at']}</td>
						
					</tr>";
				}
			}
			?>
			</tbody>
		</table>
	</section> 
</div>



