<?php
 include "db_conn.php";
 
?>


<div class="box">
		
	<div class="box2">
			<table style=" border-collapse: separate; border-spacing: 25px;">
				<thead>
					<th>ID</th>
				<th>Name</th>
				<th>Address</th>
				<th>Phone Number</th>
				<th>Email</th>
					<!--<th>Action</th>-->
				</thead>
			
		<?php
				
				$query = "select * from customer";
				$result = mysqli_query($conn, $query);
				while($res = mysqli_fetch_array($result)){
		?>
			
				<tr>
				<td ><?php echo $res['C_id']?></td>
				<td><?php echo $res['C_name']?></td>
				<td><?php echo $res['C_address']?></td>
				<td><?php echo $res['C_phone']?></td>
				<td><?php echo $res['C_email']?></td>
			
				
			<!--	<form action="com_delete.php" method="POST">
					<input type="hidden" name="id" value="<?php// echo $res['ID']?>">
					<th><input type="submit" name="delete" class="btn btn-danger"value="Delete"></th>
				</form>-->
				</tr>   
		
				<?php }?>
			</table>
		</div>
		</div><br>
		<br>