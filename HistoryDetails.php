<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>History Of Customers</title>
	<link rel="stylesheet" type="text/css" href="HistoryDetails.css?v=<?php echo time();?>">

	<script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>
<body>
 
<header>


			<nav style="background:#202020; ">
			  
					  <a href="HistoryDetails.php" style="margin-left: 240px; border:solid; height: 5px; border-top: hidden;border-right: hidden;border-left:hidden;">History Details</a>
					  <a href="View All.php" >View All</a>
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
				<li><a href="#"><i class="fas fa-list"></i>Dashboard</a></li>

				<li><a href="View All.php"><i class="fas fa-users"></i> Customers</a></li>

				<li><a href="#"><i class="fas fa-cog "></i> Settings</a></li>

				<li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
				
				</ul>
			</div>

			<p>.</p>

			<h1 style="text-align: left; margin-top: 7%;color: white; font-size: 40px; margin-left: 8%;" >History</h3>




		<div class="container" align="center">

			<table width="90%"  style="background: transparent; border:hidden; border-bottom: solid;">

				<tr align="center">

					<td  style="width: 30%;"> <h2 style="background: transparent; color: #eb8d00; margin-top: 3%; ">Profile</h2></td>
					<td  style="width: 30%;"> <h2 style="background: transparent; color: #eb8d00; margin-top: 3%; margin-left: -20%;">Name</h2></td>
					<td  style="width: 30%;"> <h2 style="background: transparent; color: #eb8d00; margin-top: 3%; ">Buyer History</h2></td>
				</tr>

			</table>

			<table width="90%"  style="background: 	#505050; margin-top: 3%; border-radius: 10px; height: 60px;">

				<tr align="center">
					<td style="width: 30%; "> <img src="profile.png" style="width: 16%; height: 45px; border-radius: 50% 50%; margin-left: 13%;"></td>	
					<td style="width: 30%; "> <h3 style="margin-left: -20%; color: #eb8d00; ">Seller1Name</h3></td>

					<td style="width: 30%; "><BUTTON style="background:#eb8d00;  border:hidden; width: 65%; height: 40px; border-radius: 10px;"><a class="btn1" href="" style="text-decoration: none; color:#282828; font-size: 17px; color: white;">View Buyers</a></BUTTON></td>

				</tr>

			</table>

						<table width="90%"  style="background: 	#505050; margin-top: 3%; border-radius: 10px; height: 60px;">

				<tr align="center">
					<td style="width: 30%; "> <img src="profile.png" style="width: 16%; height: 45px; border-radius: 50% 50%; margin-left: 13%;"></td>	
					<td style="width: 30%; "> <h3 style="margin-left: -20%; color: #eb8d00; ">Seller2Name</h3></td>

					<td style="width: 30%; "><BUTTON style="background:#eb8d00;  border:hidden; width: 65%; height: 40px; border-radius: 10px;"><a class="btn1" href="" style="text-decoration: none; color:#282828; font-size: 17px; color: white;">View Buyers</a></BUTTON></td>

				</tr>

			</table>


						<table width="90%"  style="background: 	#505050; margin-top: 3%; border-radius: 10px; height: 60px;">

				<tr align="center">
					<td style="width: 30%; "> <img src="profile.png" style="width: 16%; height: 45px; border-radius: 50% 50%; margin-left: 13%;"></td>	
					<td style="width: 30%; "> <h3 style="margin-left: -20%; color: #eb8d00; ">Seller3Name</h3></td>

					<td style="width: 30%; "><BUTTON style="background:#eb8d00;  border:hidden; width: 65%; height: 40px; border-radius: 10px;"><a class="btn1" href="" style="text-decoration: none; color:#282828; font-size: 17px; color: white;">View Buyers</a></BUTTON></td>

				</tr>

			</table>

						<table width="90%"  style="background: 	#505050; margin-top: 3%; border-radius: 10px; height: 60px;">

				<tr align="center">
					<td style="width: 30%; "> <img src="profile.png" style="width: 16%; height: 45px; border-radius: 50% 50%; margin-left: 13%;"></td>	
					<td style="width: 30%; "> <h3 style="margin-left: -20%; color: #eb8d00; ">Seller4Name</h3></td>

					<td style="width: 30%; "><BUTTON style="background:#eb8d00;  border:hidden; width: 65%; height: 40px; border-radius: 10px;"><a class="btn1" href="" style="text-decoration: none; color:#282828; font-size: 17px; color: white;">View Buyers</a></BUTTON></td>

				</tr>

			</table>


		</div>


</body>
</html>

<?php 
}else{
     header("Location: loginpage.php");
     exit();
}
 ?>