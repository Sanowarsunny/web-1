<?php
 include "db_conn.php";
 
?>


<div class="box">
		
	<div class="box2">
			<table style=" border-collapse: separate; border-spacing: 25px;">
				<thead>
					<th>Staff ID</th>
				<th>Staff Name</th>
				<th>Staff Phone Number</th>
				<th>Staff Charge</th>
					<!--<th>Action</th>-->
				</thead>
			
		<?php
				
				$query = "select * from staff";
				$result = mysqli_query($conn, $query);
				while($res = mysqli_fetch_array($result)){
		?>
			
				<tr>
				<td ><?php echo $res['S_id']?></td>
				<td><?php echo $res['S_name']?></td>
				<td><?php echo $res['S_phone']?></td>
				<td><?php echo $res['S_charge']?></td>
			
				</tr>   
		
				<?php }?>
			</table>
		</div>
		</div><br>
		<br>