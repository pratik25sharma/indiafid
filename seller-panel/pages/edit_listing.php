<?php  
$id = $user['id'];
$product_id = $_GET['id'];
$crud = new Crud;
$sql = "select * from products where id = $product_id";
$products = $crud->getData($sql);
$product = isset($products) && !empty($products) ? $products[0] : '';
if(empty($product)){
	$url = SITE_URL.'/listings';
	echo '<script type="text/javascript">
	location.replace("'.$url.'");
	</script>';
	die;
}

$venueTypes = $crud->getVenueTypes();
$spacePreferences = $crud->getSpacePreferences();
$photographyServices = $crud->getPhotographyServices();
$airbrushOptions = $crud->getAirbrushOptions();
$bridalOutfitType = $crud->getBridalOutfitType();
$storeType = $crud->getStoreType();
$groomOutfitType = $crud->getGroomOutfitType();
$specialityOptions = $crud->getSpecialityOptions();
$jewelleryOptions = $crud->getJewelleryOptions();
$cateringSpecialRequirementOptions = $crud->getCateringSpecialRequirementOptions();
$accessoryTypeOptions = $crud->getAccessoryTypeOptions();
$favorTypeOptions = $crud->getFavorTypeOptions();

$sql="select * from users_categories where user_id = $id";
$categoriesArr=$crud->getData($sql);
if(empty($categoriesArr)){
	?>
	<script type="text/javascript">
		var catArr = [];
	</script>
<?php }else{
	$productCategories = $crud->getData("select GROUP_CONCAT(category_id) as productCategory from products where user_id = '$id' and id != $product_id");
	$categories = $categoriesArr[0]['categories']; 
	$cats = json_decode($categories,true);
	$cats = implode(',',$cats);
	$sqlAppend = '';
	/* if(isset($productCategories) && !empty($productCategories) && isset($productCategories[0]['productCategory']) and !empty($productCategories[0]['productCategory'])){
		$sqlAppend = " and id NOT IN (".$productCategories[0]['productCategory'].")";
	} */
	$categoriesList = $crud->getData('Select * from categories where id IN ('.$cats.')'.$sqlAppend);
	?>
	<script type="text/javascript">
		var catArr = <?php echo !empty($categories) ? str_replace('"','',$categories) : '[]' ?>
	</script>
<?php }
?>
<script type="text/javascript">
	var venueTypes = '<?php echo json_encode($venueTypes) ?>';
	var spacePreferences = '<?php echo json_encode($spacePreferences) ?>';
	var photographyServices = '<?php echo json_encode($photographyServices) ?>';
	var airbrushOptions = '<?php echo json_encode($airbrushOptions) ?>';
	var bridalOutfitType = '<?php echo json_encode($bridalOutfitType) ?>';
	var storeType = '<?php echo json_encode($storeType) ?>';
	var groomOutfitType = '<?php echo json_encode($groomOutfitType) ?>';
	var specialityOptions = '<?php echo json_encode($specialityOptions) ?>';
	var jewelleryOptions = '<?php echo json_encode($jewelleryOptions) ?>';
	var cateringSpecialRequirementOptions = '<?php echo json_encode($cateringSpecialRequirementOptions) ?>';
	var accessoryTypeOptions = '<?php echo json_encode($accessoryTypeOptions) ?>';
	var favorTypeOptions = '<?php echo json_encode($favorTypeOptions) ?>';
</script>
<div class="popup_overlay" style="display:none">
	<a class="close"></a>
	<div class="popup_box seller_details select_categories"></div>
</div> 
<section class="list_type">
	<div class="page_info">
		<div class="breadcrumbs">
			<a href="<?php echo SITE_URL.'/dashboard' ?>" title="">Home</a>
			<span></span>
			<a href="javascript:void(0);" title="">Add Listing</a>
		</div>
		<h2>Add Listing</h2>
	</div>
	<div class="listing_section">
		<form action="" id="listing_add" method="post" novalidate class="default_form">
			<?php echo isset($success) && !empty($success) ? '<div class="alert alert-success">'.$success.'</div>' : ''; ?>
			<?php echo isset($error) && !empty($error) ? '<div class="alert alert-danger">'.$error.'</div>' : ''; ?>
			<input type="hidden" name="product_files" value="" id="product_files"/>
			<input type="hidden" name="product_video_files" value="" id="product_video_files"/>
			<input type="hidden" name="id" value="<?php echo $product['id']; ?>" id="product_files"/>
			<div class="details_form">
				<div class="row">
					<div class="inpt_group">
						<input type="text" class="label_jump required" name="name" value="<?php echo $product['name']; ?>">
						<label for="">
						   Name*
						</label>
					</div>
				</div>
				<div class="row">
					<div class="inpt_group description">
						<label for="description">
						  Description*
						</label>
						<textarea name="description" id="description" class="required description"><?php echo $product['description']; ?></textarea>
					</div>
				</div>
				<div class="row">
					<div class="inpt_group">
						<input type="text" class="label_jump" name="meta_keyword" value="<?php echo $product['meta_keyword']; ?>">
						<label for="meta_keywords">
						   Meta keywords
						</label>
					</div>
				</div>
				<div class="row">
					<div class="inpt_group description">
						<label for="meta_description">
						  Meta Description
						</label>
						<textarea name="meta_description" id="meta_description" class="description"><?php echo $product['meta_description']; ?></textarea>
					</div>
				</div>
				<div class="row">
					<div class="inpt_group select">
						<select name="category" class="required lavel_jump">
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
						<label for="category" class="label-valid">
						   Category*
						</label>
					</div>
						<a href="javascript:void(0);" class="add_category btn">Add Categories</a>
				</div>
				
				<!-- wedding venues section -->
				<div class="wedding_venues_section">
					<div class="row">
						<div class="inpt_group">
							<input type="number" class="label_jump" name="no_of_guest" value="<?php echo $product['no_of_guest']; ?>">
							<label for="no_of_guest">
							  Number of Guests
							</label>
						</div>
					</div>
					<div class="row">
						<div class="inpt_group">
							<input type="text" class="label_jump" name="regular_price" value="<?php echo $product['price']; ?>">
							<label for="regular_price">
							  Price Per Plate
							</label>
						</div>
					</div>
					<div class="row">
						<div class="inpt_group">
							<input type="text" class="label_jump" name="offer_price" value="<?php echo $product['offer_price']; ?>">
							<label for="offer_price">
							  Offer Price Per Plate
							</label>
						</div>
					</div>
					<div class="row">
						<div class="inpt_group select">
							<select name="venue_type" class="required label_jump">
								<option value="">Select</option>
								<?php
								if(isset($venueTypes) && !empty($venueTypes)){
									foreach($venueTypes as $key=>$venueType){
										$selected = ($product['venue_type'] == $key) ? 'selected' : '';
										echo '<option value="'.$key.'" '.$selected.'>'.$venueType.'</option>';
									}
								}
								
								?>
							</select>
							<label for="venue_type" class="label-valid">
							  Venue Type
							</label>
						</div>
					</div>
					<div class="row">
						<div class="inpt_group select">
							<select name="space_preference" class="required label_jump">
								<option value="">Select</option>
								<?php
								if(isset($spacePreferences) && !empty($spacePreferences)){
									foreach($spacePreferences as $key=>$spacePreference){
										$selected = ($product['space_preference'] == $key) ? 'selected' : '';
										echo '<option value="'.$key.'" '.$selected.'>'.$spacePreference.'</option>';
									}
								}
								
								?>
							</select>
							<label for="space_preference" class="label-valid">
							  Space Preference
							</label>
						</div>
					</div>
				</div>
				<!-- wedding photographers section -->
				<div class="wedding_photographers_section">
					<div class="row">
						<div class="inpt_group">
							<input type="number" class="label_jump"> name="no_of_days" value="<?php echo $product['no_of_days']; ?>">
							<label for="no_of_days">
							  Number of Days
							</label>
						</div>
					</div>
					<div class="row">
						<div class="inpt_group">
							<input type="text" class="label_jump" name="regular_price" value="<?php echo $product['price']; ?>">
							<label for="regular_price">
							  Budget(Photo + Video)
							</label>
						</div>
					</div>
					<div class="row">
						<div class="inpt_group">
							<input type="text" class="label_jump" name="offer_price" value="<?php echo $product['offer_price']; ?>">
							<label for="offer_price">
							  Offer Budget
							</label>
						</div>
					</div>
					<div class="row">
						<div class="inpt_group select">
							<select name="services" class="label_jump">
								<option value="">Select</option>
								<?php
								if(isset($photographyServices) && !empty($photographyServices)){
									foreach($photographyServices as $key=>$photographyService){
										$selected = ($product['services'] == $key) ? 'selected' : '';
										echo '<option value="'.$key.'" '.$selected.'>'.$photographyService.'</option>';
									}
								}
								
								?>
							</select>
							<label for="services"  class="label-valid">
							  Services
							</label>
						</div>
					</div>
				</div>
				<!-- bridal makeup section -->
				<div class="bridal_makeup_section">
					<div class="row">
						<div class="inpt_group">
							<input type="number" class="label_jump" name="no_of_functions" value="<?php echo $product['no_of_functions']; ?>">
							<label for="no_of_functions">
							  Number of Functions
							</label>
						</div>
					</div>
					<div class="row">
						<div class="inpt_group">
							<input type="text" class="label_jump" name="regular_price" value="<?php echo $product['price']; ?>">
							<label for="regular_price">
							  Budget Per Function
							</label>
						</div>
					</div>
					<div class="row">
						<div class="inpt_group">
							<input type="text" class="label_jump" name="offer_price" value="<?php echo $product['offer_price']; ?>">
							<label for="offer_price">
							  Offer Budget
							</label>
						</div>
					</div>
					<div class="row">
						<div class="inpt_group">
							<span>
							  Travel to Venue
							</span>
							<input type="radio" name="travel" value="yes" <?php echo $product['travel'] == 'yes' ? 'checked' : ''; ?>/> <label>Yes</label>
							<input type="radio" name="travel" value="no" <?php echo $product['travel'] == 'no' ? 'checked' : ''; ?>/> <label>No</label>
						</div>
					</div>
					<div class="row">
						<div class="inpt_group select">
							<select name="airbrush" class="label_jump">
								<option value="">Select</option>
								<?php
								if(isset($airbrushOptions) && !empty($airbrushOptions)){
									foreach($airbrushOptions as $key=>$airbrushOption){
										$selected = ($product['airbrush'] == $key) ? 'selected' : '';
										echo '<option value="'.$key.'" '.$selected.'>'.$airbrushOption.'</option>';
									}
								}
								
								?>
							</select>
							<label for="airbrush" class="label-valid">
							  Airbrush
							</label>
						</div>
					</div>
				</div>
				<!-- bridal wear section -->
				<div class="bridal_wear_section">
					<div class="row">
						<div class="inpt_group">
							<input type="text" class="label_jump" name="regular_price" value="<?php echo $product['price']; ?>">
							<label for="regular_price">
							  Budget
							</label>
						</div>
					</div>
					<div class="row">
						<div class="inpt_group">
							<input type="text" class="label_jump" name="offer_price" value="<?php echo $product['offer_price']; ?>">
							<label for="offer_price">
							  Offer Budget
							</label>
						</div>
					</div>
					<div class="row">
						<div class="inpt_group select">
							<select name="outfit_type" class="label_jump">
								<option value="">Select</option>
								<?php
								if(isset($bridalOutfitType) && !empty($bridalOutfitType)){
									foreach($bridalOutfitType as $key=>$bridalOutfitTyp){
										$selected = ($product['outfit_type'] == $key) ? 'selected' : '';
										echo '<option value="'.$key.'" '.$selected.'>'.$bridalOutfitTyp.'</option>';
									}
								}
								
								?>
							</select>
							<label for="outfit_type" class="label-valid">
							  Outfit Type
							</label>
						</div>
					</div>
					<div class="row">
						<div class="inpt_group select">
							<select name="store_type" class="label_jump">
								<option value="">Select</option>
								<?php
								if(isset($storeType) && !empty($storeType)){
									foreach($storeType as $key=>$storeTyp){
										$selected = ($product['store_type'] == $key) ? 'selected' : '';
										echo '<option value="'.$key.'" '.$selected.'>'.$storeTyp.'</option>';
									}
								}
								
								?>
							</select>
							<label for="store_type" class="label-valid">
							  Store Type
							</label>
						</div>
					</div>
				</div>
				<!-- groom wear section -->
				<div class="groom_wear_section">
					<div class="row">
						<div class="inpt_group select">
							<select name="outfit_type" class="label_jump">
								<option value="">Select</option>
								<?php
								if(isset($groomOutfitType) && !empty($groomOutfitType)){
									foreach($groomOutfitType as $key=>$groomOutfitTyp){
										$selected = ($product['outfit_type'] == $key) ? 'selected' : '';
										echo '<option value="'.$key.'" '.$selected.'>'.$groomOutfitTyp.'</option>';
									}
								}
								
								?>
							</select>
							<label for="outfit_type" class="label-valid">
							  Outfit Type
							</label>
						</div>
					</div>
				</div>
				<!-- wedding decorators or wedding planner section -->
				<div class="wedding_decorators_section">
					<div class="row">
						<div class="inpt_group">
							<input type="text" class="label_jump" name="regular_price" value="<?php echo $product['price']; ?>">
							<label for="regular_price">
							  Budget
							</label>
						</div>
					</div>
					<div class="row">
						<div class="inpt_group">
							<input type="text" class="label_jump" name="offer_price" value="<?php echo $product['offer_price']; ?>">
							<label for="offer_price">
							  Offer Budget
							</label>
						</div>
					</div>
				</div>
				<!-- wedding cards section -->
				<div class="wedding_cards_section">
					<div class="row">
						<div class="inpt_group">
							<input type="text" class="label_jump" name="regular_price" value="<?php echo $product['price']; ?>">
							<label for="regular_price">
							  Starting Price
							</label>
						</div>
					</div>
					<div class="row">
						<div class="inpt_group">
							<input type="text" class="label_jump" name="offer_price" value="<?php echo $product['offer_price']; ?>">
							<label for="offer_price">
							  Offer Price
							</label>
						</div>
					</div>
					<div class="row">
						<div class="inpt_group select">
							<select name="speciality" class="label_jump">
								<option value="">Select</option>
								<?php
								if(isset($specialityOptions) && !empty($specialityOptions)){
									foreach($specialityOptions as $key=>$specialityOption){
										$selected = ($product['speciality'] == $key) ? 'selected' : '';
										echo '<option value="'.$key.'" '.$selected.'>'.$specialityOption.'</option>';
									}
								}
								
								?>
							</select>
							<label for="speciality" class="label-valid">
							  Speciality
							</label>
						</div>
					</div>
				</div>
				<!-- wedding Videography section -->
				<div class="wedding_videography_section">
					<div class="row">
						<div class="inpt_group">
							<input type="text" class="label_jump" name="regular_price" value="<?php echo $product['price']; ?>">
							<label for="regular_price">
							  Starting Price Per Day
							</label>
						</div>
					</div>
					<div class="row">
						<div class="inpt_group">
							<input type="text" class="label_jump" name="offer_price" value="<?php echo $product['offer_price']; ?>">
							<label for="offer_price">
							  Offer Price
							</label>
						</div>
					</div>
				</div>
				<!-- Bridal mehandi or DJ or Sangeet Choreographers section -->
				<div class="bridal_mehendi_section">
					<div class="row">
						<div class="inpt_group">
							<input type="text" class="label_jump" name="regular_price" value="<?php echo $product['price']; ?>">
							<label for="regular_price">
							  Starting Price
							</label>
						</div>
					</div>
					<div class="row">
						<div class="inpt_group">
							<input type="text" class="label_jump" name="offer_price" value="<?php echo $product['offer_price']; ?>">
							<label for="offer_price">
							  Offer Price
							</label>
						</div>
					</div>
				</div>
				<!-- Wedding cakes section -->
				<div class="wedding_cakes_section">
					<div class="row">
						<div class="inpt_group">
							<input type="text" class="label_jump" name="regular_price" value="<?php echo $product['price']; ?>">
							<label for="regular_price">
							  Price per kg
							</label>
						</div>
					</div>
					<div class="row">
						<div class="inpt_group">
							<input type="text" class="label_jump" name="offer_price" value="<?php echo $product['offer_price']; ?>">
							<label for="offer_price">
							  Offer Price
							</label>
						</div>
					</div>
				</div>
				<!-- Wedding jewellery section -->
				<div class="wedding_jewellery_section">
					<div class="row">
						<div class="inpt_group select">
							<select name="jewellery_type" class="label_jump">
								<option value="">Select</option>
								<?php
								if(isset($groomOutfitType) && !empty($groomOutfitType)){
									foreach($groomOutfitType as $key=>$groomOutfitTyp){
										$selected = ($product['jewellery_type'] == $key) ? 'selected' : '';
										echo '<option value="'.$key.'" '.$selected.'>'.$groomOutfitTyp.'</option>';
									}
								}
								
								?>
							</select>
							<label for="jewellery_type" class="label-valid">
							  Jewellery Type
							</label>
						</div>
					</div>
				</div>
				<!-- Wedding Catering section -->
				<div class="wedding_catering_section">
					<div class="row">
						<div class="inpt_group">
							<input type="text" class="label_jump" name="regular_price" value="<?php echo $product['price']; ?>">
							<label for="regular_price">
							  Starting price per plate
							</label>
						</div>
					</div>
					<div class="row">
						<div class="inpt_group">
							<input type="text" class="label_jump" name="offer_price" value="<?php echo $product['offer_price']; ?>">
							<label for="offer_price">
							  Offer Price
							</label>
						</div>
					</div>
					<div class="row">
						<div class="inpt_group select">
							<select name="special_requirements" class="label_jump">
								<option value="">Select</option>
								<?php
								if(isset($cateringSpecialRequirementOptions) && !empty($cateringSpecialRequirementOptions)){
									foreach($cateringSpecialRequirementOptions as $key=>$cateringSpecialRequirementOption){
										$selected = ($product['special_requirements'] == $key) ? 'selected' : '';
										echo '<option value="'.$key.'" '.$selected.'>'.$cateringSpecialRequirementOption.'</option>';
									}
								}
								
								?>
							</select>
							<label for="special_requirements" class="label-valid">
							  Special Requirements
							</label>
						</div>
					</div>
				</div>
				<!-- Wedding Accessories section -->
				<div class="wedding_accessories_section">
					<div class="row">
						<div class="inpt_group">
							<input type="text" class="label_jump" name="regular_price" value="<?php echo $product['price']; ?>">
							<label for="regular_price">
							  Starting price per piece
							</label>
						</div>
					</div>
					<div class="row">
						<div class="inpt_group">
							<input type="text" class="label_jump" name="offer_price" value="<?php echo $product['offer_price']; ?>">
							<label for="offer_price">
							  Offer Price
							</label>
						</div>
					</div>
					<div class="row">
						<div class="inpt_group select">
							<select name="accessory_type" class="label_jump">
								<option value="">Select</option>
								<?php
								if(isset($accessoryTypeOptions) && !empty($accessoryTypeOptions)){
									foreach($accessoryTypeOptions as $key=>$accessoryTypeOption){
										$selected = ($product['accessory_type'] == $key) ? 'selected' : '';
										echo '<option value="'.$key.'" '.$selected.'>'.$accessoryTypeOption.'</option>';
									}
								}
								
								?>
							</select>
							<label for="accessory_type" class="label-valid">
							  Accessory Type
							</label>
						</div>
					</div>
				</div>
				<!-- Wedding favor section -->
				<div class="wedding_favor_section">
					<div class="row">
						<div class="inpt_group select">
							<select name="favor_type" class="label_jump">
								<option value="">Select</option>
								<?php
								if(isset($favorTypeOptions) && !empty($favorTypeOptions)){
									foreach($favorTypeOptions as $key=>$favorTypeOption){
										$selected = ($product['favor_type'] == $key) ? 'selected' : '';
										echo '<option value="'.$key.'" '.$selected.'>'.$favorTypeOption.'</option>';
									}
								}
								
								?>
							</select>
							<label for="favor_type" class="label-valid">
							  Favor Type
							</label>
						</div>
					</div>
				</div>
				<!-- Other categories section -->
				<div class="other_categories_section">
					<div class="row">
						<div class="inpt_group">
							<input type="text" class="label_jump" name="regular_price"  value="<?php echo $product['price']; ?>">
							<label for="regular_price">
							  Price
							</label>
						</div>
					</div>
					<div class="row">
						<div class="inpt_group">
							<input type="text" class="label_jump" name="offer_price" value="<?php echo $product['offer_price']; ?>">
							<label for="offer_price">
							  Offer Price
							</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="inpt_group select">
						<select name="status" class="required label_jump">
							<option value="">Select</option>
							<option value="1" <?php echo $product['status'] == 1 ? 'selected' : ''; ?>>Active</option>
							<option value="2" <?php echo $product['status'] == 2 ? 'selected' : ''; ?>>In Active</option>
						</select>
						<label for="status" class="label-valid">
						   Status*
						</label>
					</div>
				</div>
			</div>
			
		</form>
		<form method="post" enctype="multipart/form-data" class="save_files default_form">
			<div class="row">
				<div class="inpt_group">
					<input type="file" class="label_jump" name="image[]" id="product_images" multiple>
					<label for="">
					   Listing Image*
					</label>
				</div>
			</div>
			<div class="row preview_box"></div>
		</form>
		<?php 
		$sql = "select * from products_images where product_id = ". $product['id'];
		$products_images = $crud->getData($sql);
		if(isset($products_images) && !empty($products_images)){
			echo '<div class="row">';
			foreach($products_images as $products_image){
				echo '<span>
					<img src="'.IMAGE_SITE_URL.'/'.'product_'.$product['id'].'/'.$products_image['image'].'" style="    max-width: 100px;"/>
					<a href="javascript:void(0);" class="delete_image" data-id="'.$products_image['id'].'"><i class="fas fa-trash-alt"></i></a>
				</span>';
			}
			echo '</div>';
		}
		?>
		<form method="post" enctype="multipart/form-data" class="save_videos default_form">
			<div class="row">
				<div class="inpt_group">
					<input type="file" class="label_jump" name="video[]" id="product_videos" multiple>
					<label for="">
					   Listing Videos
					</label>
				</div>
			</div>
			<div class="row preview_box"></div>
		</form>
		<?php 
		$sql = "select * from products_videos where product_id = ". $product['id'];
		$products_videos = $crud->getData($sql);
		if(isset($products_videos) && !empty($products_videos)){
			echo '<div class="row">';
			foreach($products_videos as $products_video){
				echo '<span>
					<video style="max-width: 500px;width: 100%;" controls>
					<source src="'.IMAGE_SITE_URL.'/'.'product_'.$product['id'].'/'.$products_video['video'].'" type="video/mp4">
					</video>
					<a href="javascript:void(0);" class="delete_image" data-id="'.$products_video['id'].'"><i class="fas fa-trash-alt"></i></a>
				</span>';
			}
			echo '</div>';
		}
		?>
		<div class="row submit_row">
			<a href="javascript:void(0);" class="cancel_popup btn_p" title="">Cancel</a>
			<input type="button" class="save_product btn" value ="Save" name="submit">
		</div>
	</div>
</section>