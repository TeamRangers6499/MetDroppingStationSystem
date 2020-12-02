<!DOCTYPE html>
<html>
<head>
	<title>Seller1Buyers</title>
	<link rel="stylesheet" type="text/css" href="viewall.css?v=<?php echo time();?>">

	<script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>

<style type="text/css">
	

	.buyertable {
			border-collapse: collapse;
			width: 90%;
			color: #588c7e;
			font-family: monospace;
			font-size:15px;
			text-align: left;

}



	.buyertable	tr{
			color:#eb8d00;
			font-size: 20px;

		}

		.trdesign{
			background: blue;
			padding: 100px;

		}

		.buyertable	td{
			margin-top: 10%;
			padding: 5px;
			width: 18%;
			text-align: center;
			background: 	#505050;

		}

</style>
<body>
 
<header>
	

			<nav style="background:#202020; ">
			  
					  <a href="HistoryDetails.php" style="margin-left: 240px;">History Details</a>
					  <a href="View All.php">View All</a>
					  <a href="Add.php"  >Add Customer</a>
					  <a href="home.php" style="margin-left: 5px">Home</a>



					  <div class="search-box">

					  	<input class="search-txt" type="search" name="" placeholder="Search...">
					  </div>

					  

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
				<li><a href="#"><i class="fas fa-qrcode"></i> Dashboard</a></li>

				<li><a href="#"><i class="fas fa-link"></i>Customers</a></li>

				<li><a href="#"><i class="fas fa-bars"></i> Settings</a></li>

				<li><a href="#"><i class="fas fa-calendar"></i> Events</a></li>
				
				</ul>
			</div>

			<p>.</p>

	

		<table width="50%"  style="background: transparent; border:hidden; margin-top: 5%; margin-left: 10%;">

				<tr>
						<td style="width: 25%;"><img src="profile.png" style="width: 30%; margin-top: 7%;"></td>
						<td style="width: 25%;"><h1 style="margin-left: -50%; color: #eb8d00;">Seller1Name</h1></td>

				</tr>


			</table>
			

			<h1 style="text-align: left; margin-top: 4%;color: white; font-size: 40px; margin-left: 8%;" >Buyers</h3>



		<div class="container" align="center">

			<table width="90%"  style="background: transparent; border:hidden; border-bottom: solid;">

				<tr align="center">
					<td style="width: 18%;"> <h2 style="background: transparent; color: #eb8d00; margin-top: 5%;">Name</h2></td>
					<td style="width: 18%;"> <h2 style="background: transparent; color: #eb8d00; margin-top: 5%;">Items</h2></td>
					<td style="width: 18%;"> <h2 style="background: transparent; color: #eb8d00; margin-top: 5%;">Contact No.</h2></td>
					<td style="width: 18%;"> <h2 style="background: transparent; color: #eb8d00; margin-top: 5%;">Amount</h2></td>
					<td style="width: 18%;"> <h2 style="background: transparent; color: #eb8d00; margin-top: 5%;">Fee</h2></td>

				</tr>

			</table>
<table class="buyertable" style="margin-top: 2%;">


		  	<?php

		$conn = mysqli_connect("localhost", "root", "", "projectsystem");
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}
		$sql = "SELECT Items,Seller_name,Buyer_name,Buyer_cnumber,Amount,Drop_fee,Choose_seller FROM seller1tbl";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {


		while($row = $result->fetch_assoc()) {

						if ($row["Choose_seller"]=='seller6') {


						echo "<tr class='trdesign' ><td class='column'>" . $row["Buyer_name"] . "</td><td>". $row["Items"]. "</td><td>" . $row["Buyer_cnumber"]. "</td><td>". $row["Amount"]. "</td><td>". $row["Drop_fee"]. "</td></tr>";
			}

		}
		echo "</table>";
		} else { echo "0 results"; }
		$conn->close();

	?>


</table>

</body>
</html>