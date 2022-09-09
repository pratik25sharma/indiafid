<?php
$crud = new Crud; 

if(isset($_GET['id'])){
	$id=$_GET['id'];
	$sql1 = "Select *from products where id = $id";
	$result1 = $crud->getData($sql1);
	if(!empty($result1)){
		$user = $result1[0];
	}

$sql2="select *from products_images where product_id='$id'";
$result2 = $crud->getData($sql2);
?>
<div class="wrapper mt-20 mb-20">
	<section class="blocks add_category">
		<h2>View Product</h2>
		<table class="table-2 mt-20">
			<tr>
				<td>Name</td>
				<td><?php echo $user['name'];?></td>
			</tr>
			<tr>
				<td>Description</td>
				<td><?php echo $user['description'];?>
			</tr>
			<tr>
				<td>Price</td>
				<td><?php echo $user['price'];?></td>
			</tr>
			<tr>
				<td>category</td>
				<td>
				<?php
				$sql="select * from categories where id = '".$user['category_id']."'";
				$result=$crud->getData($sql);
				if(!empty($result)){
					echo $result[0]['name'];
				}
				?>
				</td>
			</tr>
			<tr>
				<td>Image</td>
			</tr>
			<?php	
			if(!empty($result2)){
				$i=0;
				foreach($result2 as $res){
					$i++;
					if	($i==0){
						echo "<tr>";
					}
					echo "<td>";
					?>
					<img src="<?php echo IMAGE_SITE_URL ?>/product_<?php echo $id.'/'.$res['image']; ?>" alt="" style="max-width:100px;"/>
					<?php
					echo "</td>";
					if($i==5){
						echo "</tr>";
						$i=0;
					}
				}
				if ($i != 5) {
					echo "</tr>";
				}
			}
		?>
		</table>
	</section>
</div>
<?php } ?>