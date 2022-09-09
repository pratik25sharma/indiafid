<?php
if(!session_id()){session_start();}
function __autoload($className) {
	include '../classes/'.$className . '.php';
}
include '../common/constants.php';

$crud = new Crud;
$id = $_SESSION['user']['id'];
$product_id = $_POST['id'];
$sql = "Select * from users LEFT JOIN users_categories ON users_categories.user_id = users.id where users.id = '$id'";
$result = $crud->getData($sql);
if(!empty($result)){
	$productCategories = $crud->getData("select GROUP_CONCAT(category_id) as productCategory from products where user_id = '$id' and id != $product_id");
	$user1 = $result[0];
	$categories = $user1['categories'];
	if(!empty($categories)){
		$cats = json_decode($categories,true);
		$cats = implode(',',$cats);
		$sqlAppend = '';
		if(isset($productCategories) && !empty($productCategories) && isset($productCategories[0]['productCategory']) and !empty($productCategories[0]['productCategory'])){
			$sqlAppend = " and id NOT IN (".$productCategories[0]['productCategory'].")";
		}
		$categoriesList = $crud->getData('Select * from categories where id IN ('.$cats.')'.$sqlAppend);
	}
}

$sql = "select * from products where id = $product_id";
$products = $crud->getData($sql);
$product = isset($products) && !empty($products) ? $products[0] : '';
?>

<div class="popup_box seller_details listing_popup">
	<h4>Add Listing</h4>
	<form action="" id="listing_update" method="post">
		<div class="details_form">
			<div class="row">
				<div class="colums">
					<label for="">
					   Name*
					</label>
				   </div>
				<div class="colums">
					<input type="hidden" name="id" value="<?php echo isset($product) && !empty($product) ? $product['id'] : ""; ?>">
					<input type="text" name="name" value="<?php echo isset($product) && !empty($product) ? $product['name'] : ""; ?>" required>
				</div>
			</div>
			<div class="row">
				<div class="colums">
					<label for="">
					   Listing Image*
					</label>
				   </div>
				<div class="colums">
					<input type="file" name="image[]" multiple />
				</div>
			</div>
			<?php 
			$sql = "select * from products_images where product_id = ". $product['id'];
			$products_images = $crud->getData($sql);
			if(isset($products_images) && !empty($products_images)){
				echo '<div class="row">';
				foreach($products_images as $products_image){
					echo '<div class="colums">
						<img src="'.IMAGE_SITE_URL.'/'.'product_'.$product['id'].'/'.$products_image['image'].'" style="    max-width: 100px;"/>
						<a href="javascript:void(0);" class="delete_image" data-id="'.$products_image['id'].'"><i class="fas fa-trash-alt"></i></a>
					</div>';
				}
				echo '</div>';
			}
			?>
			<div class="row">
				<div class="colums">
					<label for="description">
					  Description*
					</label>
				   </div>
				<div class="colums">
					<textarea name="description" required><?php echo isset($product) && !empty($product) ? $product['description'] : ""; ?></textarea>
				</div>
			</div>
			<div class="row">
				<div class="colums">
					<label for="category">
					   Category*
					</label>
				   </div>
				<div class="colums">
					<select name="category" required>
						<option value="">Select</option>
						<?php
						if(isset($categoriesList) && !empty($categoriesList)){
							foreach($categoriesList as $category){
								$selected = ($product['category_id'] == $category['id']) ? 'selected' : '';
								echo '<option value="'.$category['id'].'" '.$selected.'>'.$category['name'].'</option>';
							}
						}
						
						?>
					</select>
					<a href="javascript:void(0);" class="add_category">Add Categories</a>
				</div>
			</div>
			<div class="row">
				<div class="colums">
					<label for="regular_price">
					   Price*
					</label>
				   </div>
				<div class="colums">
					<input type="text" name="regular_price" value="<?php echo isset($product) && !empty($product) ? $product['price'] : ""; ?>" required>
				</div>
			</div>
			
			<div class="row">
				<div class="colums">
					<label for="offer_price">
					  Offer Price
					</label>
				   </div>
				<div class="colums">
					<input type="text" name="offer_price" value="<?php echo isset($product) && !empty($product) ? $product['offer_price'] : ""; ?>">
				</div>
			</div>
			<!--<div class="row">
				<div class="colums">
					<label for="services">
					  Services
					</label>
				   </div>
				<div class="colums">
					<input type="text" name="services" class="service_tag" data-role="tagsinput" value="<?php //echo isset($product) && !empty($product) ? $product['services'] : ""; ?>">
				</div>
			</div>-->
			<div class="row">
				<div class="colums">
					<label for="">
					  Travel
					</label>
				   </div>
				<div class="colums">
					<input type="radio" name="travel" value="yes" <?php echo isset($product) && !empty($product) && $product['travel'] == 'yes' ? 'checked' : ''; ?>/> Yes
					<input type="radio" name="travel" value="no" <?php echo isset($product) && !empty($product) && $product['travel'] == 'no' ? 'checked' : ''; ?>/> No
				</div>
			</div>
			<div class="row">
				<div class="colums">
					<label for="status">
					   Status*
					</label>
				   </div>
				<div class="colums">
					<select name="status" required>
						<option value="">Select</option>
						<option value="1" <?php echo isset($product) && !empty($product) && $product['status'] == '1' ? 'selected' : ''; ?>>Active</option>
						<option value="2" <?php echo isset($product) && !empty($product) && $product['status'] == '2' ? 'selected' : ''; ?>>In Active</option>
					</select>
				</div>
			</div>
			<!--<div class="row">
				<div class="colums">
					<label for="stock">
					   Stock*
					</label>
				   </div>
				<div class="colums">
					<select name="stock" required>
						<option value="">Select</option>
						<option value="Available" <?php //echo isset($product) && !empty($product) && $product['stock'] == 'Available' ? 'selected' : ''; ?>>Available</option>
						<option value="Unavailable" <?php //echo isset($product) && !empty($product) && $product['stock'] == 'Unavailable' ? 'selected' : ''; ?>>Unavailable</option>
						<option value="In Progress" <?php //echo isset($product) && !empty($product) && $product['stock'] == 'In Progress' ? 'selected' : ''; ?>>In Progress</option>
					</select>
				</div>
			</div>-->
		</div>
		<div class="row submit_row">
			<a href="javascript:void(0);" class="cancel_popup" title="">Cancel</a>
			<input type="submit" value ="Save" name="submit">
		</div>
	</form>
</div>         
  