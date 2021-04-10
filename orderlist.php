<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Lost</title>
</head>
<?php 
	session_start();
	$host = "localhost";
	$user = "root";
	$pass = "123";
	$db = "demo";

	$conn1 = new mysqli($host, $user, $pass, $db);
	if($conn1->connect_error) {
		echo "Database Connection Failed!";
		echo "<br>";
		echo $conn1->connect_error;
	}
	else {
		$sql = "SELECT * FROM orderlist";
		$result = $conn1->query($sql);
	if ($result->num_rows > 0) {
 
 	 while($row = $result->fetch_assoc()) {
	

}
	}
 } 

	$conn1->close();


	?>
<body>
    <table>                      
           <tr>
                <tr>
                    <td>
                        First Name
                    </td>
                    <td>
                        <input type="text" name="fname" value="<?php echo $_SESSION['firstname'] ;?>" >
                        <input type="text" name="lname" value="<?php echo $_SESSION['lastname'] ;?>" >
                    </td>
                </tr>
                   

                <tr>
                    <td>
                        Last Name
                    </td>
                    <td>
                        
                    </td>
                </tr>

                <tr>
                    <td>
                        Gender
                    </td>
                    <td>
                        <input type="text" name="gender" value="<?php echo $_SESSION['gender'] ;?>">
                    </td>
                </tr>

</body>
</html>