<?php
 include "db_conn.php";
 
?>


<div class="box">
		
	<div class="box2">
			<table style=" border-collapse: separate; border-spacing: 25px;">
				<thead>
					<th>Quarantine ID</th>
				<th>Quarantine Name</th>
				<th>Quarantine Location</th>
				<th>Phone Number</th>
				<th>Email</th>
					<!--<th>Action</th>-->
				</thead>
			
		<?php
				
				$query = "select * from quarantine_center";
				$result = mysqli_query($conn, $query);
				while($res = mysqli_fetch_array($result)){
		?>
			
				<tr>
				<td ><?php echo $res['Q_id']?></td>
				<td><?php echo $res['Q_name']?></td>
				<td><?php echo $res['Q_location']?></td>
				<td><?php echo $res['Q_phone']?></td>
				<td><?php echo $res['Q_email']?></td>
				</tr>   
		
				<?php }?>
			</table>
		</div>
		</div><br>
		<br>