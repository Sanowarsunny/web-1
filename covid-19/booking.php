<?php
 include "db_conn.php";
 
?>


<div class="box">
		
	<div class="box2">
			<table style=" border-collapse: separate; border-spacing: 25px;">
				<thead>
					<th>B_ID</th>
				<th>C_ID</th>
				<th>S_ID</th>
				<th>Q_ID</th>
				<th>Day_No</th>
					<!--<th>Action</th>-->
				</thead>
			
		<?php
				
				$query = "select * from booking";
				$result = mysqli_query($conn, $query);
				while($res = mysqli_fetch_array($result)){
		?>
			
				<tr>
				<td ><?php echo $res['B_id']?></td>
				<td ><?php echo $res['C_id']?></td>
				<td ><?php echo $res['S_id']?></td>
				<td ><?php echo $res['Q_id']?></td>
				<td><?php echo $res['Day_no']?></td>
			
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