<?php 


    session_start();  
    // database connection
	$host = "localhost";
	$user = "root";
	$pass = "123";
	$db = "demo";

	// Mysqli object-oriented
	$conn1 = new mysqli($host, $user, $pass, $db);
    if($conn1->connect_error) {
		echo "Database Connection Failed!";
		echo "<br>";
		echo $conn1->connect_error;
	}
    //insertion
	else {
		echo "Database Connection Successful!";
		$stmt1 = $conn1->prepare("insert into user (uname, pass, fname, lname, gender, mobile, email, address) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt1->bind_param("ssssssss", $p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8);
		$p1= $_POST['uname'];
        $p2= $_POST['pass'];
        $p3= $_POST['fname'];
        $p4 = $_POST['lname'];
        $p5  = $_POST['gender'];
        $p6 = $_POST['mobile'];
        $p7  = $_POST['email'];
        $p8 = $_POST['address'];
		}
        
        
        $status = $stmt1->execute();
		if($status) {
			echo "Data Insertion Successful.";
		}
		else {
			echo "Failed to Insert Data.";
			echo "<br>";
			echo $conn1->error;
		}
	

	$conn1->close();
	
    ?>

<form method ="POST">
 <h1 style="text-align: center;">Welcome-form</h1>
 <input  type="submit" name="back" value="Back">
 </form>
 <?php
 if(isset($_POST["back"]))
{
    echo "<script>location.href='login.php'</script>";
}
?>