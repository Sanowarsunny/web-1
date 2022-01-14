<?php
 include "db_conn.php";
 
?>


<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="view/co_ordinator.css">

	<title>view</title>
</head>
<style>
	
	.box2{
	
	display: grid;
	max-width: 1000px;
	text-decoration: none;
	height:60vh;
	max-width:200vh;
	box-shadow: 0px 0px 20px #8A8C9D;
	border-radius: 20px;
	box-sizing: 20%;
	margin: auto;
	overflow:hidden;
	text-align: justify;
	background-color: white;
 

}
	
	.table_vol{
		
		border-collapse: collapse;
		margin:25px,0;
		font-size: 0.9em;
		min-width: 1000px;
		
		
	}
	.table_vol thead tr{
		
		background-color: #5D91C8 ;
		color: #ffffff;
		font-weight: bold;
		font-size: 1.3em;
		
	}
	.table_vol  th,
	.table_vol td{
		text-align: center;
		padding: 12px 15px;	
	}
	.table_vol tbody tr{
		
		border-bottom: 1px solid #5D91C8;
	}
.table-vol tr:hover{
	color: #ffffff;
	padding-left:4px;
}
</style>
<body>
	<header>
        <div class="container">
            <nav class="nav_checkbox">
                <h2 style="color: white;">Quarantine Center Reservation</h2>
                <ul class="content_nav"> 
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="add.php">ADD CUSTOMER</a></li>
                    <li><a href="update-delete.php">UPDATE/DELETE</a></li>
					<li><a href="view.php">VIEW RECORDS</a></li>
                </ul>
            </nav>
        </div>
	
	</header>
	
	
			
			<br><br><div>
				<input type = "text" id = "search" placeholder=" Customer  Search....." autocomplete="off">
			
			</div>
			<div id="livesearch"></div>
					
			<script src="jquery.js"></script>
				<script type="text/javascript">
					$(document).ready(function(){
						$("#search").keyup(function(){
							var input = $(this).val();
							//alert(input);
							
							if(input != ""){
							$.ajax({
								url:"search.php",
								type:"POST",
								data:{input:input},
								
								success:function(data){
									$("#livesearch").html(data);
									$("#livesearch").css("display","block");
								}
							});
					}else{
						$("#livesearch").css("display","none");
					}
						});
					});
				</script>
			
	<div class="wrapper">
		<div  class="form">
		
			<div id="main"></div>
			
			<div class="input-group" >
			
			<button id="customer"  class="btn"> <a href="customer.php" style="text-decoration:none; color:white;">Customer Information</a></button>
		
			<button id="quarantine" class="btn"> <a href="quarantine.php" style="text-decoration:none; color: white"> Quarantine Information</button>
				
			<button id="staff" class="btn"> <a href="staff.php" style="text-decoration:none; color: white"> Staff Information</button>
			
			<button id="booking" class="btn"> <a href="booking.php" style="text-decoration:none; color: white"> Booking Information</button>
			
			<button id="billing" class="btn"> <a href="billing.php" style="text-decoration:none; color: white"> Billing Information</button><br>
			
			
			
			<br>
			</div>
			
		</div>
		
	</div>
	
	
</body>
</html>