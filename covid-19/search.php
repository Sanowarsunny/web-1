<?php 

include("db_conn.php");

  if(isset($_POST['input']))//this will tell us what to do if some data has been post through form with button.  
{  
    $input=$_POST['input'];
	
	$query = "SELECT * FROM customer WHERE C_name LIKE '{$input}%'";
	
	$res = mysqli_query($conn, $query);
	
	if(mysqli_num_rows($res) >0){?>
		 
		 <table>
			<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Address</th>
				<th>Phone Number</th>
				<th>Email</th>
			</tr>
			</thead>
			
			<tbody>
				<?php
				while($row = mysqli_fetch_assoc($res)){
					
						$ID = $row['C_id'];
						$name = $row['C_name'];
						$address= $row['C_address'];
						$phone = $row['C_phone'];
						$email = $row['C_email'];
						
						
				?>
				<tr>
					<td><?php echo $ID;?></td>
					<td><?php echo $name;?></td>
					<td><?php echo $address;?></td>
					<td><?php echo $phone;?></td>
					<td><?php echo $email;?></td>
				</tr>
				<?php
				}
				 
				?>
				
			</tbody>
		 </table>
		 
		 <?php
		
		
	}else{
		
		
		
	}
	
}
?> 