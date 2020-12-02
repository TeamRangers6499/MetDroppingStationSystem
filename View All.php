<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>View All</title>
	<link rel="stylesheet" type="text/css" href="viewall.css?v=<?php echo time();?>">

	<script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>
<body>
 
<header>
	

			<nav style="background:#202020; ">
			  
					  <a href="HistoryDetails.php" style="margin-left: 240px;">History Details</a>
					  <a href="View All.php" style="border:solid; height: 5px; border-top: hidden;border-right: hidden;border-left:hidden;">View All</a>
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

			<h1 style="text-align: left; margin-top: 7%;color: white; font-size: 40px; margin-left: 8%;" >Sellers</h3>




		<div class="container" align="center">

			<table width="90%"  style="background: transparent; border:hidden; border-bottom: solid;">

				<tr>
					<td> <h2 style="background: transparent; color: #eb8d00; margin-top: 3%; margin-left: 5%;">Profile</h2></td>
					<td> <h2 style="background: transparent; color: #eb8d00; margin-top: 3%; margin-left: -70%;">Name</h2></td>
				</tr>

			</table>


			<table width="90%"  style="background: 	#505050; margin-top: 3%; border-radius: 10px; height: 60px;">

				<tr>
					<td style="width: 22.5%; padding: 0;"> <img src="profile.png" style="width: 16%; height: 45px; border-radius: 50% 50%; margin-left: 13%;"></td>	
					<td style="width: 22.5%; padding: 0;"> <h3 style="margin-left: -20%; color: #eb8d00;">Seller1Name</h3></td>

					<td style="width: 22.5%; padding: 0; margin: 0;">

					    
		      				<input type="checkbox" id="c1">
		      						<BUTTON style="background:#282828; color: #eb8d00; border:hidden; width: 65%; height: 40px; border-radius: 10px;"><label for="c1" class="show-btn" style="text-decoration: none; color: #eb8d00; font-size: 17px;">Check Profile</label></BUTTON>
		      							<div class="container1">
		        							<label for="c1" class="close-btn fas fa-times" title="close"></label>

		        									<h1 style="text-align: center; color: white; margin-top: 1%;">Profile</h1> 
		        									  									
													      <table width="90%"  style="background: transparent; border:hidden; border-bottom: solid; margin-top: 4%;">

																
															<tr>
																<td style="width: 45%;"><img src="profile.png" style="width: 30%; height: 50px; border-radius: 50% 50%;"></td>
																<td style="width: 45%;"> <h2 style="background: transparent; color: #eb8d00; margin-top: 3%; margin-left: -50%;">Seller1Name</h2></td>
															</tr>

														</table>

													<table width="100%"  style="background: transparent; border:hidden; border-bottom: solid; margin-top: 10%;">

																
															<tr>
																<td style="width: 33.3%;"><p style="color: white;">Name</p></td>
																<td style="width: 33.3%;"><p style="color: white;">:</p></td>
																<td style="width: 33.3%;"><p style="color: white;">Jimwell Chavez</p></td>
															</tr>

															<tr>
																<td style="width: 30%;"><p style="color: white;margin-top: 10%;">Address</p></td>
																<td style="width: 10%;"><p style="color: white;margin-top: 10%;">:</p></td>
																<td style="width: 60%;"><p style="color: white;margin-top: 10%;">Urdaneta City Pangasinan</p></td>
															</tr>


															<tr>
																<td style="width: 33.3%;"><p style="color: white; margin-top: 10%;">Gender</p></td>
																<td style="width: 33.3%;"><p style="color: white;margin-top: 10%;">:</p></td>
																<td style="width: 33.3%;"><p style="color: white;margin-top: 10%;">Male</p></td>
															</tr>

															<tr>
																<td style="width: 33.3%;"><p style="color: white;margin-top: 10%;">Contact Number</p></td>
																<td style="width: 33.3%;"><p style="color: white;margin-top: 10%;">:</p></td>
																<td style="width: 33.3%;"><p style="color: white;margin-top: 10%;">09123456789</p></td>
															</tr>

														</table>


																<div align="center">
																		<BUTTON style="width: 40%; height: 30px; margin-top: 10%; border-radius: 5px; background:#eb8d00; color: white; border:hidden; font-size: 18px;">Edit Details</BUTTON>
																	</div>



										</div>
								
					</td>

					<td style="width: 22.5%; padding: 0; margin: 0;"> <BUTTON style="background:#282828; color: #eb8d00; border:hidden; width: 80%; height: 40px; border-radius: 10px;"><a class="btn1" href="ViewBuyers1.php" style="text-decoration: none; color: #eb8d00; font-size: 17px; ">View Buyers</a></BUTTON></td>
				</tr>

			</table>

						<table width="90%"  style="background: 	#505050; margin-top: 3%; border-radius: 10px; height: 60px;">

				<tr>
					<td style="width: 22.5%; padding: 0;"> <img src="profile.png" style="width: 16%; height: 45px; border-radius: 50% 50%; margin-left: 13%;"></td>	
					<td style="width: 22.5%; padding: 0;"> <h3 style="margin-left: -20%; color: #eb8d00;">Seller2Name</h3></td>

					<td style="width: 22.5%; padding: 0; margin: 0;">

						<input type="checkbox" id="c2">
		      						<BUTTON style="background:#282828; color: #eb8d00; border:hidden; width: 65%; height: 40px; border-radius: 10px;"><label for="c2" class="show-btn" style="text-decoration: none; color: #eb8d00; font-size: 17px;">Check Profile</label></BUTTON>
		      							<div class="container1">
		        							<label for="c2" class="close-btn fas fa-times" title="close"></label>

		        									<h1 style="text-align: center; color: white; margin-top: 1%;">Profile</h1> 
		        									  									
													      <table width="90%"  style="background: transparent; border:hidden; border-bottom: solid; margin-top: 4%;">

																
															<tr>
																<td style="width: 45%;"><img src="profile.png" style="width: 30%; height: 50px; border-radius: 50% 50%;"></td>
																<td style="width: 45%;"> <h2 style="background: transparent; color: #eb8d00; margin-top: 3%; margin-left: -50%;">Seller2Name</h2></td>
															</tr>

														</table>

													<table width="100%"  style="background: transparent; border:hidden; border-bottom: solid; margin-top: 10%;">

																
															<tr>
																<td style="width: 33.3%;"><p style="color: white;">Name</p></td>
																<td style="width: 33.3%;"><p style="color: white;">:</p></td>
																<td style="width: 33.3%;"><p style="color: white;">John Chavez</p></td>
															</tr>

															<tr>
																<td style="width: 30%;"><p style="color: white;margin-top: 10%;">Address</p></td>
																<td style="width: 10%;"><p style="color: white;margin-top: 10%;">:</p></td>
																<td style="width: 60%;"><p style="color: white;margin-top: 10%;">Urdaneta City Pangasinan</p></td>
															</tr>


															<tr>
																<td style="width: 33.3%;"><p style="color: white; margin-top: 10%;">Gender</p></td>
																<td style="width: 33.3%;"><p style="color: white;margin-top: 10%;">:</p></td>
																<td style="width: 33.3%;"><p style="color: white;margin-top: 10%;">Male</p></td>
															</tr>

															<tr>
																<td style="width: 33.3%;"><p style="color: white;margin-top: 10%;">Contact Number</p></td>
																<td style="width: 33.3%;"><p style="color: white;margin-top: 10%;">:</p></td>
																<td style="width: 33.3%;"><p style="color: white;margin-top: 10%;">09123456789</p></td>
															</tr>


														</table>


																<div align="center">
																		<BUTTON style="width: 40%; height: 30px; margin-top: 10%; border-radius: 5px; background:#eb8d00; color: white; border:hidden; font-size: 18px;">Edit Details</BUTTON>
																	</div>


										</div>

					</td>

					<td style="width: 22.5%; padding: 0; margin: 0;"> <BUTTON style="background:#282828; color: #eb8d00; border:hidden; width: 80%; height: 40px; border-radius: 10px;"><a class="btn1" href="" style="text-decoration: none; color: #eb8d00; font-size: 17px; ">View Buyers</a></BUTTON></td>
				</tr>

			</table>



			<table width="90%"  style="background: 	#505050; margin-top: 3%; border-radius: 10px; height: 60px;">

				<tr>
					<td style="width: 22.5%; padding: 0;"> <img src="profile.png" style="width: 16%; height: 45px; border-radius: 50% 50%; margin-left: 13%;"></td>	
					<td style="width: 22.5%; padding: 0;"> <h3 style="margin-left: -20%; color: #eb8d00;">Seller3Name</h3></td>

					<td style="width: 22.5%; padding: 0; margin: 0;">

							<input type="checkbox" id="c3">
		      						<BUTTON style="background:#282828; color: #eb8d00; border:hidden; width: 65%; height: 40px; border-radius: 10px;"><label for="c3" class="show-btn" style="text-decoration: none; color: #eb8d00; font-size: 17px;">Check Profile</label></BUTTON>
		      							<div class="container1">
		        							<label for="c3" class="close-btn fas fa-times" title="close"></label>

		        									<h1 style="text-align: center; color: white; margin-top: 1%;">Profile</h1> 
		        									  									
													      <table width="90%"  style="background: transparent; border:hidden; border-bottom: solid; margin-top: 4%;">

																
															<tr>
																<td style="width: 45%;"><img src="profile.png" style="width: 30%; height: 50px; border-radius: 50% 50%;"></td>
																<td style="width: 45%;"> <h2 style="background: transparent; color: #eb8d00; margin-top: 3%; margin-left: -50%;">Seller3Name</h2></td>
															</tr>

														</table>

													<table width="100%"  style="background: transparent; border:hidden; border-bottom: solid; margin-top: 10%;">

																
															<tr>
																<td style="width: 33.3%;"><p style="color: white;">Name</p></td>
																<td style="width: 33.3%;"><p style="color: white;">:</p></td>
																<td style="width: 33.3%;"><p style="color: white;">Jimwell Chavez</p></td>
															</tr>

															<tr>
																<td style="width: 30%;"><p style="color: white;margin-top: 10%;">Address</p></td>
																<td style="width: 10%;"><p style="color: white;margin-top: 10%;">:</p></td>
																<td style="width: 60%;"><p style="color: white;margin-top: 10%;">Urdaneta City Pangasinan</p></td>
															</tr>


															<tr>
																<td style="width: 33.3%;"><p style="color: white; margin-top: 10%;">Gender</p></td>
																<td style="width: 33.3%;"><p style="color: white;margin-top: 10%;">:</p></td>
																<td style="width: 33.3%;"><p style="color: white;margin-top: 10%;">Male</p></td>
															</tr>

															<tr>
																<td style="width: 33.3%;"><p style="color: white;margin-top: 10%;">Contact Number</p></td>
																<td style="width: 33.3%;"><p style="color: white;margin-top: 10%;">:</p></td>
																<td style="width: 33.3%;"><p style="color: white;margin-top: 10%;">09123456789</p></td>
															</tr>


														</table>


																<div align="center">
																		<BUTTON style="width: 40%; height: 30px; margin-top: 10%; border-radius: 5px; background:#eb8d00; color: white; border:hidden; font-size: 18px;">Edit Details</BUTTON>
																	</div>


										</div>



					</td>

					<td style="width: 22.5%; padding: 0; margin: 0;"> <BUTTON style="background:#282828; color: #eb8d00; border:hidden; width: 80%; height: 40px; border-radius: 10px;"><a class="btn1" href="" style="text-decoration: none; color: #eb8d00; font-size: 17px; ">View Buyers</a></BUTTON></td>
				</tr>

			</table>



			<table width="90%"  style="background: 	#505050; margin-top: 3%; border-radius: 10px; height: 60px;">

				<tr>
					<td style="width: 22.5%; padding: 0;"> <img src="profile.png" style="width: 16%; height: 45px; border-radius: 50% 50%; margin-left: 13%;"></td>	
					<td style="width: 22.5%; padding: 0;"> <h3 style="margin-left: -20%; color: #eb8d00;">Seller4Name</h3></td>

					<td style="width: 22.5%; padding: 0; margin: 0;">


						<input type="checkbox" id="c4">
		      						<BUTTON style="background:#282828; color: #eb8d00; border:hidden; width: 65%; height: 40px; border-radius: 10px;"><label for="c4" class="show-btn" style="text-decoration: none; color: #eb8d00; font-size: 17px;">Check Profile</label></BUTTON>
		      							<div class="container1">
		        							<label for="c4" class="close-btn fas fa-times" title="close"></label>

		        									<h1 style="text-align: center; color: white; margin-top: 1%;">Profile</h1> 
		        									  									
													      <table width="90%"  style="background: transparent; border:hidden; border-bottom: solid; margin-top: 4%;">

																
															<tr>
																<td style="width: 45%;"><img src="profile.png" style="width: 30%; height: 50px; border-radius: 50% 50%;"></td>
																<td style="width: 45%;"> <h2 style="background: transparent; color: #eb8d00; margin-top: 3%; margin-left: -50%;">Seller4Name</h2></td>
															</tr>

														</table>

													<table width="100%"  style="background: transparent; border:hidden; border-bottom: solid; margin-top: 10%;">

																
															<tr>
																<td style="width: 33.3%;"><p style="color: white;">Name</p></td>
																<td style="width: 33.3%;"><p style="color: white;">:</p></td>
																<td style="width: 33.3%;"><p style="color: white;">Jimwell Chavez</p></td>
															</tr>

															<tr>
																<td style="width: 30%;"><p style="color: white;margin-top: 10%;">Address</p></td>
																<td style="width: 10%;"><p style="color: white;margin-top: 10%;">:</p></td>
																<td style="width: 60%;"><p style="color: white;margin-top: 10%;">Urdaneta City Pangasinan</p></td>
															</tr>


															<tr>
																<td style="width: 33.3%;"><p style="color: white; margin-top: 10%;">Gender</p></td>
																<td style="width: 33.3%;"><p style="color: white;margin-top: 10%;">:</p></td>
																<td style="width: 33.3%;"><p style="color: white;margin-top: 10%;">Male</p></td>
															</tr>

															<tr>
																<td style="width: 33.3%;"><p style="color: white;margin-top: 10%;">Contact Number</p></td>
																<td style="width: 33.3%;"><p style="color: white;margin-top: 10%;">:</p></td>
																<td style="width: 33.3%;"><p style="color: white;margin-top: 10%;">09123456789</p></td>
															</tr>


														</table>

														
																<div align="center">
																		<BUTTON style="width: 40%; height: 30px; margin-top: 10%; border-radius: 5px; background:#eb8d00; color: white; border:hidden; font-size: 18px;">Edit Details</BUTTON>
																	</div>


										</div>


					</td>

					<td style="width: 22.5%; padding: 0; margin: 0;"> <BUTTON style="background:#282828; color: #eb8d00; border:hidden; width: 80%; height: 40px; border-radius: 10px;"><a class="btn1" href="" style="text-decoration: none; color: #eb8d00; font-size: 17px; ">View Buyers</a></BUTTON></td>
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