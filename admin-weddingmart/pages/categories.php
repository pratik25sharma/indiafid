<div class="wrapper mt-20 mb-20">	<section class="blocks">		<h2>Category List</h2>		<div class="row top_btn">			<div class="btn_block">				<a href="categories_add" class="btn"> <i class="fas fa-plus"></i> Add Categories</a>			</div>		</div>		<br>		<table class='table-1'>			<thead>				<tr>					<th>id</th>					<th>Name</th>					<th>Description</th>					<th class='no-sort'>Image</th>					<th class='no-sort'>Edit</th>					<th class='no-sort'>Delete</th>				</tr>			</thead>			<tbody>
			<?php			$crud = new Crud; 			$sql="SELECT id,name,description,image from categories";			$result = $crud->getData($sql);                 			if(!empty($result)){				$i = 0;				foreach ($result as $res){					$i++;					$imgurl = IMAGE_SITE_URL.'/category_'.$res['id'].'/'.$res['image'];
					echo "<tr>						<td>{$i}</td>						<td>{$res['name']}</td>						<td>{$res['description']}</td>						<td><img src='{$imgurl}' style= 'max-height: 70px;'  alt''/></td>						<td><a href='edit_category?id={$res['id']}' class='btn'><i class='fas fa-edit'></i>edit</a></td>						<td><a href='javascript:void(0)' data-id='{$res['id']}' class='btn go'><i class='fas fa-edit'></i>delete</a></td>					</tr>";				}			}
			?>			</tbody>		</table>	</section> </div>

