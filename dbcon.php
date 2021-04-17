<?php 
    session_start();  
    // database connection
	$host = "localhost";
	$user = "root";
	$pass = "123";
	$db = "demo";

   	$uname=$_POST['uname'];
    $password=$_POST['password'];
    $mnumber=$_POST['mobile'];
    $email=$_POST['email'];
	$fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $address=$_POST['address'];
	$gender=$_POST['gender'];

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
		$stmt1 = $conn1->prepare("insert into user (uname,pass,fname,lname,address,email,gender,mobile) VALUES ('$uname','$password','$fname','$lname','$address','$email','$gender','$mnumber')");
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