<?php
include_once("config.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
		$Name = $_POST['Name'];
		$Address = $_POST['Address'];
		$CustomerNumber = $_POST['CustomerNumber'];
		$MeterSerialNumber = $_POST['MeterSerialNumber'];
		
		
	$result = mysqli_query($mysqli, "UPDATE customer SET Name='$Name',Address='$Address',CustomerNumber='$CustomerNumber', MeterSerialNumber='$MeterSerialNumber' WHERE id=$id");
	

	header("Location: index.php");
}
?>
<?php

$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM customer WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
	$Name = $user_data['Name'];
	$Address = $user_data['Address'];
	$CustomerNumber = $user_data['CustomerNumber'];
	$MeterSerialNumber = $user_data['MeterSerialNumber'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="Name" value=<?php echo $Name;?>></td>
			</tr>
			<tr> 
				<td>Address</td>
				<td><input type="text" name="Address" value=<?php echo $Address;?>></td>
			</tr>
			<tr> 
				<td>CustomerNumber</td>
				<td><input type="text" name="CustomerNumber" value=<?php echo $CustomerNumber;?>></td>
			</tr>
			<tr> 
				<td>MeterSerialNumber</td>
				<td><input type="text" name="MeterSerialNumber" value=<?php echo $MeterSerialNumber;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>

