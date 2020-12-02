<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Add New</title>
	<link rel="stylesheet" type="text/css" href="Add.css?v=<?php echo time(); ?>">

	<script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>
<body>
 
<header>
	

			<nav style="background:	#202020;">
			  
					  <a href="HistoryDetails.php" style="margin-left: 240px;">History Details</a>
					  <a href="View All.php">View All</a>
					  <a href="Add.php"  style="border:solid; height: 5px; border-top: hidden;border-right: hidden;border-left:hidden;">Add Customer</a>
					  <a href="home.php" style="margin-left: 5px">Home</a>

					  <img class="logo" src="logo.png">

			  		  <div class="met" style="margin-left: 51%;">MET DROPPING STATION</div>

					  <div class="a">|</div>

			  </nav> 

			  </header>


	<input type="checkbox" name="" id="check">

	<label for="check">

		<i class="fas fa-bars" id="btn"></i>
		<i class="fas fa-times" id="cancel"></i>

	</label>

	<div class="sidebar">
		<header>Dropping Station</header>
			<ul>
				<li><a href="#"><i class="fas fa-list"></i>Dashboard</a></li>
				
				<li><a href="View All.php"><i class="fas fa-users"></i> Customers</a></li>

				<li><a href="#"><i class="fas fa-cog "></i> Settings</a></li>

				<li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
				
				</ul>
			</div>

			<p>.</p>

	<form action="Add.php" method="POST"  style="width: 30%; height: 590px; background:#ffbb34; border-radius: 10px; box-shadow: -1px -1px 20px -1px rgba(0,0,0,0.52);
	-webkit-box-shadow: -1px -1px 20px -1px rgba(0,0,0,0.52);-moz-box-shadow: -1px -1px 20px -1px rgba(0,0,0,0.52); margin-left: 35%; margin-right: 35%; margin-top: 6%;">

	<table width="100%">



		<tr>
			<td>
				<div align="center">
				
					<img src="logo1.jpg" style="border-radius: 10px; width: 27%; height: 15vh; margin-top: 1%;">

				</div>
			</td>
		</tr>

		<tr>
			<td>
				<div align="center">
					<h3>
						Insert A New Customer
					</h3>
				</div>
			</td>
		</tr>

	<tr>
		<td colspan="1">
				
				<input required type="text" name="items" placeholder="Items: __ __ __ __ __" style="height: 35px; width: 90%; font-size: 17px; border-radius: 5px; border:solid; border-width: 1px;
		 		border-color: #A9A9A9;margin-bottom: 5px; margin-left: 3%; margin-top: 20px; border:hidden;"></td>
		</td>

	</tr>

	<tr>
		<td colspan="1">
				
				<input required  type="text" name="sellername" placeholder="Seller Name: __ __ __ __ __" style="height: 35px; width: 90%; font-size: 17px; border-radius: 5px; border:solid; border-width: 1px;
		 		border-color: #A9A9A9;margin-bottom: 5px; margin-left: 3%;border:hidden;"></td>
		</td>

	</tr>

		<tr>
		<td colspan="1">
				
				<input required  type="text" name="buyername" placeholder="Buyer Name: __ __ __ __ __" style="height: 35px; width: 90%; font-size: 17px; border-radius: 5px; border:solid; border-width: 1px;
		 		border-color: #A9A9A9;margin-bottom: 5px; margin-left: 3%;border:hidden;"></td>
		</td>

	</tr>

	<tr>
		<td colspan="1">
				
				<input required  type="number" maxlength="11" name="buyercnum" placeholder="Buyer Contact Number: __ __ __ __ __" style="height: 35px; width: 90%; font-size: 17px; border-radius: 5px; border:solid; border-width: 1px;border-color: #A9A9A9;margin-bottom: 5px; margin-left: 3%;border:hidden;"></td>
		</td>

	</tr>
		<tr>
		<td colspan="1">
				
				<input required  type="text" name="amount" placeholder="Amount: __ __ __ __ __" style="height: 35px; width: 90%; font-size: 17px; border-radius: 5px; border:solid; border-width: 1px;
		 		border-color: #A9A9A9;margin-bottom: 5px; margin-left: 3%;border:hidden;"></td>
		</td>

	</tr>


			<tr>
		<td colspan="1">
				
				<input required   type="text" name="dropfee" placeholder="Dropping Fee: __ __ __ __ __" style="height: 35px; width: 90%; font-size: 17px; border-radius: 5px; border:solid; border-width: 1px;
		 		border-color: #A9A9A9;margin-bottom: 5px; margin-left: 3%;border:hidden;"></td>
		</td>

	</tr>

		<tr>
		<td rowspan="1" width="30%" style="margin-left: 3%;">
		<select   name="sellers" style="width: 60%;height: 35px;border-radius: 5px; border:solid; border-width: 1px;
		 		border-color: #A9A9A9; margin-left: 3%; border:hidden;">

			<option value="seller1">Name Of Seller1</option>
			<option value="seller2">Name Of Seller2</option>
			<option value="seller3">Name Of Seller3</option>
			<option value="seller4">Name Of Seller4</option>
			<option value="seller5">Name Of Seller5</option>
			<option value="seller6">Name Of Seller6</option>
			<option value="seller7">Name Of Seller7</option>
			<option value="seller8">Name Of Seller8</option>
			<option value="seller9">Name Of Seller9</option>
			<option value="seller10">Name Of Seller10</option>
			<option value="seller11">Name Of Seller11</option>
			<option value="seller12">Name Of Seller12</option>

			
		</select></td>
	</tr>
	
		
		<tr>
		
		<td>
		<div align="center" style="margin-top: 10px;">
			<input type="submit" name="insert" value="Insert" style="background: #414143; width: 60%; height: 45px; border:hidden; border-radius: 15px; color: white; font-size: 25px;">

		</td>

	</tr>

	</table>
</form>
</body>
</html>

<?php

if (isset($_POST['insert'])) {
	
	$Item = $_POST['items'];
	$Sellername = $_POST['sellername'];
	$Buyername = $_POST['buyername'];
	$Buyercnum = $_POST['buyercnum']; 
	$Amount = $_POST['amount']; 
	$Dropfee = $_POST['dropfee'];
	$Choosesellers = $_POST['sellers'];  
 

		$host = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "projectsystem";

		$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

		if (mysqli_connect_error()) {

    		die("Database connection failed: " . mysqli_connect_error());
			}

		else{
			$sql = "INSERT INTO seller1tbl (Items,Seller_name,Buyer_name,Buyer_cnumber, Amount, Drop_fee, Choose_seller)
			values ('$Item','$Sellername','$Buyername','$Buyercnum','$Amount','$Dropfee','$Choosesellers')";

			if($conn->query($sql)) {
				echo "New Record Inserted";
			}
			else{
				echo "Error : ".sql ."<br>". $conn->error;
			}
			$conn->close();
		}

	}
  ?>

<?php 
}else{
     header("Location: loginpage.php");
     exit();
}
 ?>

 <?php

