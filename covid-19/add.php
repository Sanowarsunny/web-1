<?php
 include "db_conn.php";
 
?>


<!DOCTYPE html>
<html>
<head>
	
	<title>ADD CUSTOMER</title>
	<link rel="stylesheet"  href="view/live.css">
	
	
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

</head>

<body>
	<header>
        <div class="container">
            <nav class="nav_checkbox">
                <a href="#" class="logo"><h2>Quarantine Center Reservation</h2></a>
                <input type="checkbox" id="tab-nav" class="tab-nav">
                <label for="tab-nav" class="label">
                    <div class="burger"></div>
                    <div class="burger"></div>
                    <div class="burger"></div>
                </label>
                <ul class="content_nav">
					<li><a href="index.php">HOME</a></li>
                    <li><a href="add.php">ADD CUSTOMER</a></li>
                    <li><a href="update-delete.php">UPDATE/DELETE</a></li>
					<li><a href="view.php">VIEW RECORDS</a></li>
                </ul>
            </nav>
        </div>
	
	</header>
	
	<div class = "volunteer">
		<h1>ADD CUSTOMER</h1>
	</div>
	
	
	<div class="box">
		<h3>DATA SET</h3>
		<div class="box2">
			<table class="table_vol">
			<thead>
					<th>Serial No</th>
					<th>Name</th>
					<th>Address</th>
					<th>Phone</th>
					<th>Email</th>
				</thead>
		<?php
				$query = "select * from customer";
				$result = mysqli_query($conn, $query);
				while($res = mysqli_fetch_array($result)){
		?>
			<tbody>
				
				<tr>
				<td><?php echo $res['C_id']?></td>
				<td><?php echo $res['C_name']?></td>
				<td><?php echo $res['C_address']?></td>
				<td><?php echo $res['C_phone']?></td>
				<td><?php echo $res['C_email']?></td>
				</tr>
			</tbody>
				<?php }?>	
			</table>
		</div><br>
		<br>
		<div class="box3" style="">
			
			<form action="addval.php" method="POST" class="form">
		
				<br><label for="name">Name</label>
			
				<input type="text" name="name" id="name" placeholder="Enter your Name" required><br>
				<br><label for="email">Email</label>
				
				<input type="email" name="email" id="email" placeholder="sunny@gmail.com" required><br>
				
				<br><label for="phone">Phone</label>
				
				<input type="phone" name="phone" id="phone" placeholder="+8801990879856" required><br>
				
				<br><label for="address" >Address</label>
				<input id="address" name="address" placeholder=" Enter Address"  required></input>
			
				<br ><br><button name="submit" class="btn">ADD</button><br><br>
			
		</h5>
			</form>
						
	
		</div>
		
		
    </div><br><br>
	
	
	
</body>
</html>