<?php 
if(!session_id()){
	session_start();
}
/* function __autoload($className) {
	include '../classes/'.$className . '.php';
} */

if(!session_id()){
	session_start();
}
//$crud=new Crud;
$id= $_SESSION['user']['id'];
?>
<div class="popup_box select_categories">
	<h4>Select Categories</h4>
	<ul>
		<h6>Wedding Vendors</h6>		
		<?php
		$sql="select * from categories";
		$result=$crud->getData($sql);
		if(!empty($result)){
			foreach($result as $res){ ?>
                <li class="category_link"><a href="javascript:void(0);" title="" data-id=<?php echo $res['id'];?>>
				<?php echo $res['name'];?></a></li>
		<?php		  
			}
		}
		?>
	</ul>
	<div class="row save_categories submit_row">
		<input type="submit" value="Next" name="">
	</div>
</div>