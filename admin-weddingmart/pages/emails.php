<div class="wrapper mt-20 mb-20">
<?php
$i = 0;
$sql="SELECT DISTINCT (email) from notification_email";
          $result = $crud->getData($sql);           
		  if(!empty($result)){
	foreach ($result as $res){
		$i++;
		

	echo "<tr>
	<td>{$i}</td>
	<td>{$res['email']}</td>
	</tr>";


    }
    }
?> 
</section>
</div>