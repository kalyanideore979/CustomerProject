<?php

include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM customer ORDER BY id DESC");
?>

<html>
<head>    
    <title>Homepage</title>
</head>

<body>
<a href="add.php">Create Customer</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>Name</th> <th>Address</th> <th>CustomerNumber</th> <th>MeterSerialNumber</th><th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['Name']."</td>";
        echo "<td>".$user_data['Address']."</td>";  
        echo "<td>".$user_data['CustomerNumber']."</td>";
        echo "<td>".$user_data['MeterSerialNumber']."</td>";  
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>
