<?php 

include "db_conn.php";

    if (isset($_POST['update'])) {

        $id = $_POST['id'];

        $name = $_POST['name'];

        $address = $_POST['address'];

        $phone = $_POST['phone'];

        $email = $_POST['email'];

        

        $sql = "UPDATE `customer` SET `C_id`='$id',`C_name`='$name',`C_address`='$address',`C_phone`='$phone',`C_email`='$email' WHERE `C_id`='$id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['id'])) {

    $id = $_GET['id']; 

    $sql = "SELECT * FROM `customer` WHERE `C_id`='$id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $name = $row['C_name'];

            $address = $row['C_address'];
			
			$phone  = $row['C_phone'];

            $email = $row['C_email'];

            $id = $row['C_id'];

        } 

    ?>

        <h2>User Update Form</h2>

        <form action="" method="post">

          <fieldset>

            <legend>Personal information:</legend>

            Name:<br>

            <input type="text" name="name" value="<?php echo $name; ?>">
			
            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <br>

            Address:<br>

            <input type="text" name="address" value="<?php echo $address; ?>">

            <br>

            Email:<br>

            <input type="email" name="email" value="<?php echo $email; ?>">

            <br>

            Phone:<br>

            <input type="phone" name="phone" value="<?php echo $phone; ?>">
            <br><br>

            <input type="submit" value="Update" name="update">
			
			<a href="update-delete.php" style="text-decoration:none; color:black; box-radius:3px;">
            Back
			</a>
          </fieldset>

        </form> 

        </body>

        </html> 

    <?php

    } else{ 

        header('Location: update-delete.php');

    } 

}

?> 