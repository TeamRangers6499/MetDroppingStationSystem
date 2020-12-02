<!DOCTYPE html>
<html>
<head>
	<title>
		Funtion
	</title>
</head>
<body>


	<form action="page2.php" method="POST"  style="width: 30%; height: 590px; background:#ffbb34; border-radius: 10px; box-shadow: -1px -1px 20px -1px rgba(0,0,0,0.52);
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