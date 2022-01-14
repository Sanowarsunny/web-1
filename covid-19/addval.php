
<?php
 include "db_conn.php";
 
	if (isset($_POST['submit'])) { // Check press or not Post Comment Button
	$name = $_POST['name']; // Get Name from form
	$email = $_POST['email']; // Get Email from form
	$phone = $_POST['phone'];
	$address = $_POST['address']; // Get Comment from form

	$sql = "INSERT INTO customer (C_name, C_address, C_phone, C_email)
			VALUES ('$name', '$address','$phone','$email')";
	$result = mysqli_query($conn, $sql);
	
	if ($result==True) {
		echo "Record inserted successfully.";
		header("Location: add.php");
	} 
	else {
		echo "<script>alert('customer does not add.')</script>";
			
	}
}



?>