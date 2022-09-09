<?php
if(!session_id()){session_start();}
function __autoload($className) {
	include '../classes/'.$className . '.php';
}
include '../common/constants.php';

$crud = new Crud;
$id = $_SESSION['user']['id'];
$sql = "Select * from users LEFT JOIN users_categories ON users_categories.user_id = users.id where users.id = '$id'";
$result = $crud->getData($sql);
if(!empty($result)){
	$productCategories = $crud->getData("select GROUP_CONCAT(category_id) as productCategory from products where user_id = '$id'");
	
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
?>

<div class="popup_box seller_details listing_popup">
	<h4>Add Listing</h4>
	<form action="" id="listing_add" method="post">
		<div class="details_form">
			<div class="row">
				<div class="colums">
					<label for="">
					   Name*
					</label>
				   </div>
				<div class="colums">
					<input type="text" name="name" value="" required>
				</div>
			</div>
			<div class="row">
				<div class="colums">
					<label for="">
					   Listing Image*
					</label>
				   </div>
				<div class="colums">
					<input type="file" name="image[]" multiple required>
				</div>
			</div>
			<div class="row">
				<div class="colums">
					<label for="description">
					  Description*
					</label>
				   </div>
				<div class="colums">
					<textarea name="description" required></textarea>
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
								echo '<option value="'.$category['id'].'">'.$category['name'].'</option>';
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
					<input type="text" name="regular_price" value="" required>
				</div>
			</div>
			
			<div class="row">
				<div class="colums">
					<label for="offer_price">
					  Offer Price
					</label>
				   </div>
				<div class="colums">
					<input type="text" name="offer_price" value="">
				</div>
			</div>
			<!--<div class="row">
				<div class="colums">
					<label for="services">
					  Services
					</label>
				   </div>
				<div class="colums">
					<input type="text" name="services" class="service_tag" data-role="tagsinput" value="">
				</div>
			</div>-->
			<div class="row">
				<div class="colums">
					<label for="">
					  Travel
					</label>
				   </div>
				<div class="colums">
					<input type="radio" name="travel" value="yes"/> Yes
					<input type="radio" name="travel" value="no" checked/> No
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
						<option value="1">Active</option>
						<option value="2">In Active</option>
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
						<option value="Available">Available</option>
						<option value="Unavailable">Unavailable</option>
						<option value="In Progress">In Progress</option>
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
  