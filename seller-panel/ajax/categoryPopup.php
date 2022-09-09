<?php 
if(!session_id()){
	session_start();
}
function __autoload($className) {
	include '../classes/'.$className . '.php';
}

$crud=new Crud;
$id= $_SESSION['user']['id'];
$sql = "Select * from users LEFT JOIN users_categories ON users_categories.user_id = users.id where users.id = '$id'";
$result = $crud->getData($sql);
$cats = array();
if(!empty($result)){
	$user1 = $result[0];
	$categories = $user1['categories'];
	if(!empty($categories)){
		$cats = json_decode($categories,true);
	}
	
}
?>
<div class="popup_box select_categories">
	<h4>Select Categories</h4>
	<ul>
		<h6>Wedding Vendors</h6>		
		<?php
		$sql="select * from categories";
		$result=$crud->getData($sql);
		if(!empty($result)){
			foreach($result as $res){
				$class = !empty($cats) && in_array($res['id'],$cats) ? 'active' : '';
			?>
                <li class="category_link <?php echo $class; ?>"><a href="javascript:void(0);" title="" data-id=<?php echo $res['id'];?>>
				<?php echo $res['name'];?></a></li>
		<?php		  
			}
		}
		?>
	</ul>
	<div class="row save_categories_listing submit_row">
		<input type="submit" value="Next" name="">
	</div>
</div>