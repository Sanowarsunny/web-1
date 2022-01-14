<?php
 include "db_conn.php";
 
?>


<div class="box">
		
	<div class="box2">
			<table style=" border-collapse: separate; border-spacing: 25px;">
				<thead>
					<th>BILL ID</th>
				<th>BOOK ID</th>
				<th>Total Bill</th>
					<!--<th>Action</th>-->
				</thead>
			
		<?php
				
				$query = "select * from billing";
				$result = mysqli_query($conn, $query);
				while($res = mysqli_fetch_array($result)){
		?>
			
				<tr>
				<td ><?php echo $res['Bill_id']?></td>
				<td><?php echo $res['B_id']?></td>
				<td><?php echo $res['Total_bill']?></td>

				</tr>   
		
				<?php }?>
			</table>
		</div>
		</div><br>
		<br>