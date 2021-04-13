<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary Statement</title>
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
		$sql = "SELECT * FROM salary where uname =".$_SESSION['username']."";
		$result = $conn1->query($sql);
	if ($result->num_rows > 0) {
 
 	 while($row = $result->fetch_assoc()) {

        echo "Salary of : "; 
          echo $_SESSION['firstname']."<br> <br>";
        
         echo "User Id: " . $row["uname"]. " - Salary of Month : " . $row["month"].  " - Amount of Salary : " . $row["amount"]. " - Salary Pay At: " . $row["paying date"].  "<br>";

}
	}
 } 

	$conn1->close();


	?>
<body>

    
</body>
</html>