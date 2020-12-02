<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HomePage</title>
	<link rel="stylesheet" type="text/css" href="home.css?v=<?php echo time(); ?>">

	<script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>
<body>

<header>
	

			<nav style="background:		#202020;">

			  
					  <a href="HistoryDetails.php" style="margin-left: 240px;">History Details</a>
					  <a href="View All.php">View All</a>
					  <a href="Add.php">Add Customer</a>
					  <a href="home.php" style="border:solid; height: 5px; border-top: hidden;border-right: hidden;border-left:hidden; ">Home</a>

					  <img class="logo" src="logo.png" id="logo1">

			  		  <div class="met" style="margin-left: 50%;">MET DROPPING STATION</div>

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

			<p style="margin-top: 130px; color: #eb8d00; margin-left: 23%; font-size: 40px;">MET PRETTY U</p>

			<h1 style="margin-top: 10px; color: #eb8d00; margin-left: 17%; font-size: 50px;">DROPPING STATION</h1>

			<p style="color: white; margin-left: 17%; font-size: 20px;">Preloved, Clothes, Appliances, Food, Brand new etc.....</p>

			<p style="width: 40%; height: 100px; border:solid 5px; border-color: #eb8d00; border-left: hidden; margin-top: 6.9%;"></p>

			<p style="width: 9%; height: 290px; border:solid 5px; border-color: #eb8d00;margin-top: -70px;
			margin-left: 25%;"></p>

			<img style="float: right; margin-top: -38%; width:38%; height:35%; border-radius: 20px;" src="image1.png">

</body>
</html>

<?php 
}else{
     header("Location: loginpage.php");
     exit();
}
 ?>

