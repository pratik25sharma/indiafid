<?php  $id=$user['id'];

$crud=new Crud;
$sql="select status AS x from users where id = '$id'";
$result1=$crud->getData($sql);
$status = isset($result1[0]) ? $result1[0]['x'] : 0;

$sql="select products.*,categories.name as categoryname from products LEFT JOIN categories ON categories.id = products.category_id where user_id = '$id' ";
if(isset($_GET['cat']) && !empty($_GET['cat']) && $_GET['cat'] >0){
	$sql .= " and products.category_id = '".$_GET['cat']."' ";
}
if(isset($_GET['stock']) && !empty($_GET['stock'])){
	$sql .= " and products.stock = '".$_GET['stock']."' ";
}
if(isset($_GET['price']) && !empty($_GET['price'])){
	$pricearr = explode("-",$_GET['price']);
	$minprice = $pricearr[0];
	$maxprice = $pricearr[1];
	$sql .= " and products.price BETWEEN '$minprice' and '$maxprice' ";
}
if(isset($_GET['search']) && !empty($_GET['search'])){
	$sql .= " and products.name like '%".$_GET['search']."%'";
}
if(isset($_GET['status']) && !empty($_GET['status'])){
	$sql .= " and products.status = ".$_GET['status']." ";
}
if(isset($_GET['sort']) && !empty($_GET['sort'])){
	$sql .= " order by ".$_GET['sort']." desc";
}else{
	$sql .= " order by created_at desc";
}
$result=$crud->getData($sql);

$sql="select * from users_categories where user_id = $id";
$categoriesArr=$crud->getData($sql);
if(empty($categoriesArr)){
	?>
	<script type="text/javascript">
		var catArr = [];
		var status = <?php echo $status; ?>;
	</script>
<?php }else{
	$categories = $categoriesArr[0]['categories']; 
	?>
	<script type="text/javascript">
		var status = <?php echo $status; ?>;
		var catArr = <?php echo !empty($categories) ? str_replace('"','',$categories) : '[]' ?>
	</script>
<?php }
?>
 <div class="popup_overlay" style="display:none">
	<a class="close"></a>
	<div class="popup_box seller_details listing_popup"></div>
</div> 
  <section class="list_type">
        <div class="page_info">
            <div class="breadcrumbs">
                <a href="<?php echo SITE_URL.'/dashboard' ?>" title="">Home</a>
                <span></span>
                <a href="javascript:void(0);" title="">Product Management</a>
            </div>
            <h2>Product Management</h2>
            <div class="add_details">
                <div class="search_list">
					<form>
                    <input type="text" name="search" placeholder="Search title or PID" value="<?php echo isset($_GET['search']) && !empty($_GET['search']) ? $_GET['search'] : ""; ?>">
                    <button type="submit"><i class="fas fa-search"></i></button>
					</form>
                </div>
                <a class="add_listing listings_details" href="<?php echo SITE_URL.'/add_listing' ?>"><i class="fas fa-plus"></i> Add New Listing</a>
            </div>
        </div>
        <div class="listing_section">
            <div class="prod_info">
                <ul>
                    <li class="<?php echo isset($_GET['status']) && $_GET['status'] == 1 ? 'active' : ''; ?>">
                        <a href="<?php echo SITE_URL.'/listings?status=1'; ?>" title="">
                            <span>
							<?php 
							$activelisting = $crud->getData("SELECT count(*) as active_listing FROM products where status = 1 and user_id = '$id'");
							echo (isset($activelisting) && !empty($activelisting) ? $activelisting[0]['active_listing'] : 0);
							?></span>
                            Active Listing
                        </a>
                    </li>
                    <li class="<?php echo isset($_GET['status']) && $_GET['status'] == 2 ? 'active' : ''; ?>">
                        <a href="<?php echo SITE_URL.'/listings?status=2'; ?>" title="">
                            <span><?php 
							$inactivelisting = $crud->getData("SELECT count(*) as inactive_listing FROM products where status = 2 and user_id = '$id'");
							echo (isset($inactivelisting) && !empty($inactivelisting) ? $inactivelisting[0]['inactive_listing'] : 0);
							?></span>
                            Inactive Listing
                        </a>
                    </li>
                </ul>
            </div>
            <div class="sorting">
                <div class="left">
					<form id="filter_form">
                    <span>
                        <i class="fas fa-filter"></i>
                    </span>
                    <select name="cat">
                        <option value="">Category</option>
						<?php 
							if(isset($categoriesArr) && !empty($categoriesArr)){
								$categories = json_decode($categoriesArr[0]['categories']); 
								if(!empty($categories)){
									$selectedCategories = implode(",",$categories);
									$sql="select * from categories where id IN ($selectedCategories)";
									$allcategories=$crud->getData($sql);
									if(!empty($allcategories)){
										foreach($allcategories as $category){
											$selected = isset($_GET['cat']) && ($_GET['cat'] == $category['id']) ? 'selected' : '';
											echo '<option value="'.$category['id'].'" '.$selected.'>'.$category['name'].'</option>';
										}
									}
								}
							}
						?>
                    </select>
                    <select name="sort">
                        <option value="">Sort</option>
                        <option value="name" <?php echo isset($_GET['sort']) && $_GET['sort'] == 'name' ? 'selected' : ''; ?>>Product Title</option>
                        <option value="created_at" <?php echo isset($_GET['sort']) && $_GET['sort'] == 'created_at' ? 'selected' : ''; ?>>Creation Time</option>
                        <option value="modified_at" <?php echo isset($_GET['sort']) && $_GET['sort'] == 'modified_at' ? 'selected' : ''; ?>>Update Time</option>
                    </select>
                   
                    <select name="price">
                        <option value="">List Price</option>
						<?php 
							$sql = "SELECT MAX(price) as max FROM products";
							$max_price = $crud->getData($sql);
							$min = 0;
							$max = isset($max_price) && !empty($max_price) ? $max_price[0]['max'] : 1000;
							$splitValue = ceil($max/5);
							for($i=1;$i<=5;$i++){
								$range = $min.'-'.($splitValue+$min);
								$selected = isset($_GET['price']) && ($_GET['price'] == $range) ? 'selected' : '';
								echo '<option value="'.$range.'" '.$selected.'>'.$range.'</option>';
								$min = $splitValue+$min;
							}
						?>
                    </select>
                    <!--<select name="stock">
                        <option value="">Stock</option>
                        <option value="Available" <?php //echo isset($_GET['stock']) && $_GET['stock'] == 'Available' ? 'selected' : ''; ?>>Available</option>
                        <option value="Unavailable" <?php //echo isset($_GET['stock']) && $_GET['stock'] == 'Unavailable' ? 'selected' : ''; ?>>Unavailable</option>
                        <option value="In Progress" <?php //echo isset($_GET['stock']) && $_GET['stock'] == 'In Progress' ? 'selected' : ''; ?>>In Progress</option>
                    </select>-->
                    <a href="javascript:void(0)" title="" class="apply_filter">Apply</a>
					</form>
                </div>
                <div class="bulk_action">
                    <select name="bulk_action_apply">
                        <option value="">Bulk Action</option>
                        <option value="active">Active Listing</option>
                        <option value="deactive">Deactive Listing</option>
                        <option value="delete">Delete Listing</option>
                    </select>
                    <a href="javascript:void(0);" class="download_excel" title="">XLS Download</a>
                    <a href="javascript:void(0);" title="Bulk upload" class="bulk_upload">XLS Upload</a>
                </div>
            </div>
            <div class="list_table">
                <table width="100%" id="listing_table">
                    <thead>
                        <tr>
                            <th class="no-sort" align="center" valign="middle" height="40" width="10%"> 
								<input type="checkbox" name="main_checkbox" id="all_check">
								<label for="all_check"></label>
							</th>
                            <th align="left" valign="middle" height="40" width="30%">Name</th>
                            <!--<th align="right" valign="middle" height="40" width="10%">Description</th>-->
                            <th align="left" valign="middle" height="40" width="10%">Category</th>
                            <th align="left" valign="middle" height="40" width="10%">Price</th>
                            <th align="left" valign="middle" height="40" width="10%">Offer Price</th>
                            <th align="left" valign="middle" height="40" width="10%">Status</th>
                            <th class="no-sort" align="right" valign="middle" height="40" width="10%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
						<?php
						if(isset($result) && !empty($result)){
							foreach($result as $res){
								$status = $res['status'] == 1 ? 'Active' : 'Inactive';
								echo '<tr>
									<td align="center" valign="middle" height="40" width="10%"> 
										<input type="checkbox" name="product_checkbox" value="'.$res['id'].'"  id="check-'.$res['id'].'">
										<label for="check-'.$res['id'].'"></label>
									</td>
									<td align="left" valign="middle" height="40" width="30%">'.$res['name'].'</td>
									<!--<td align="right" valign="middle" height="40" width="10%">'.$res['description'].'</td>-->
									<td align="left" valign="middle" height="40" width="10%">'.$res['categoryname'].'</td>
									 <td align="right" valign="middle" height="40" width="10%">'.number_format($res['price'],2).' INR</td>
									 <td align="right" valign="middle" height="40" width="10%">'.number_format($res['offer_price'],2).' INR</td>
									 <td align="right" valign="middle" height="40" width="10%">'.$status.'</td>
									<td align="right" valign="middle" height="40" width="10%">
										<a href="'.SITE_URL.'/edit_listing?id='.$res['id'].'" title="" class="edit_product"><i class="fas fa-pencil-alt"></i> Edit</a>
										<a href="javascript:void(0);" title="" class="delete_product" data-id="'.$res['id'].'"><i class="fas fa-trash-alt"></i> Delete</a>
									</td>
								</tr>';
							}
							
						}
						
						?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>