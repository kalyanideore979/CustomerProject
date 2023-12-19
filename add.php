<html>
<head>
	<title>Add Customer</title>
</head>

<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>

	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="Name"></td>
			</tr>
			<tr> 
				<td>address</td>
				<td><input type="text" name="Address"></td>
			</tr>
			<tr> 
				<td>CustomerNumber</td>
				<td><input type="text" name="CustomerNumber"></td>
			<tr> 
				<td>MeterSerialNumber</td>
				<td><input type="text" name="MeterSerialNumber"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php

	if(isset($_POST['Submit'])) {
		$Name = $_POST['Name'];
		$Address = $_POST['Address'];
		$CustomerNumber = $_POST['CustomerNumber'];
		$MeterSerialNumber = $_POST['MeterSerialNumber'];
		
		include_once("config.php");
				
		$result = mysqli_query($mysqli, "INSERT INTO customer(Name,Address,CustomerNumber, MeterSerialNumber) VALUES('$Name','$Address','$CustomerNumber', '$MeterSerialNumber')");
		echo "Customer added successfully. <a href='index.php'>View Customers</a>";
	}
	?>
</body>
</html>
