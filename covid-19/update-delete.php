<?php
 include "db_conn.php";
 
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>update/delete</title>
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
		<h1>Update & Delete</h1>
	</div>
	
	
	<div class="box">
		<h3>Quarantine Location Data</h3>
		
		
		<div class="box2">
			<table class="table_vol">
			<thead>
					<th>ID</th>
					<th>Name</th>
					<th>Location</th>
					<th>Phone</th>
					<th>Email</th>
					<th colspan="2">Action</th>
				</thead>
		<?php
				$query = "select * from quarantine_center";
				$result = mysqli_query($conn, $query);
				while($res = mysqli_fetch_array($result)){
		?>
			
				
				<tr>
				<td><?php echo $res['Q_id']?></td>
				<td><?php echo $res['Q_name']?></td>
				<td><?php echo $res['Q_location']?></td>
				<td><?php echo $res['Q_phone']?></td>
				<td><?php echo $res['Q_email']?></td>
				<form>
				<td><a class="btn btn-info" href="Q-val.php?id=<?php echo $res['Q_id']; ?>">Edit</a>
				</form>
				<form action="Qdelete.php" method="post">
					<input type="hidden" name="id" value="<?php echo $res['Q_id']?>">
					<th><input type="submit" name="delete" class="btn btn-danger"value="Delete"></th>
				</form>
				</tr>
			
				<?php }?>	
			</table>
		</div>
		
		<div class="box">
		<h3>Customer Data</h3>
		
		
		<div class="box2">
			<table class="table_vol">
			<thead>
					<th>C_id</th>
					<th>Name</th>
					<th>Address</th>
					<th>Phone</th>
					<th>Email</th>
					<th colspan="2">Action</th>
				</thead>
		<?php
				$query = "select * from customer";
				$result = mysqli_query($conn, $query);
				while($res = mysqli_fetch_array($result)){
		?>
			
				
				<tr>
				<td><?php echo $res['C_id']?></td>
				<td><?php echo $res['C_name']?></td>
				<td><?php echo $res['C_address']?></td>
				<td><?php echo $res['C_phone']?></td>
				<td><?php echo $res['C_email']?></td>
				<form>
				<td><a class="btn btn-info" href="updateval.php?id=<?php echo $res['C_id']; ?>">Edit</a>
				</form>
				<form action="delete.php" method="post">
					<input type="hidden" name="id" value="<?php echo $res['C_id']?>">
					<th><input type="submit" name="delete" class="btn btn-danger"value="Delete"></th>
				</form>
				</tr>
			
				<?php }?>	
			</table>
		</div><br>
		
		
    </div><br><br>
	
	
	
</body>
</html>