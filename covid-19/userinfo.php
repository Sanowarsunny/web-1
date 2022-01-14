<?php
 include "../db_conn.php";
 
?>


<div class="box">
		
	<div class="box2">
			<table style=" border-collapse: separate; border-spacing: 25px;">
				<thead>
					
					<th>Name</th>
					<th>Email</th>
					<th>Phone Number</th>
					
				</thead>
			
		<?php
				
				$query = "select * from sign";
				$result = mysqli_query($conn, $query);
				while($res = mysqli_fetch_array($result)){
		?>
			
				<tr>
			
				<td><?php echo $res['full_name']?></td>
				<td><?php echo $res['email']?></td>
				<td><?php echo $res['phone_number']?></td>
				</tr>
			<?php }?>
			</table>
		</div>
		</div><br>
		