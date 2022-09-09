<div class="wrapper mt-20 mb-20">	<section class="blocks">		<h2>Emails List</h2>		<table class='table-1'>			<thead>				<tr>					<th>S. No.</th>					<th>Email</th>				</tr>			</thead>			<tbody>
<?php $crud = new Crud; 
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
?> </tbody></table>
</section>
</div>
