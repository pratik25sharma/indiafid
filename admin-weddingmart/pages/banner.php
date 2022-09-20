



    <div class="wrapper mt-20 mb-20">

        <section class="blocks">

            <h2>Add More Pages</h2>



 <div class="row top_btn">

                <div class="btn_block">

                    <a href="banner_add" class="btn"> <i class="fas fa-plus"></i> Add Banner</a>

                </div>

            </div>



<?php

echo "<table class='table-1'>

<tr><th>id</th>";

echo"<th>Image</th>

<th>Text</th>

<th>Edit</th>

<th>Delete</th>

<tr>";

$crud=new crud;

$sql="select *from banner_image";

$result=$crud->getData($sql);

if(!empty($result)){

	foreach($result as $res){

	echo "<tr>

	<td>{$res['id']}</td>



	<td><img src='".IMAGE_SITE_URL."/{$res['image']}' style= 'max-height: 70px;' alt=''/></td>

	<td>{$res['text']}</td>

	<td><a href='banner_update?id={$res['id']}' class='btn'><i class='fas fa-edit'></i>Edit</td>

	<td><a href='javascript:void(0)'data-id='{$res['id']}'class='btn ban' ><i class='fas fa-edit'></i>Delete</td>

	</tr>";

	}

	}



	

echo "</table>";

?>

</section>

</div>



