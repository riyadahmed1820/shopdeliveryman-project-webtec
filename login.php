<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>

    <link rel="stylesheet" href="login style.css">
</head>
<?php 
	session_start();
	/*$username=$_POST['uname'];
	$password=$_POST['password'];*/
	$_SESSION['username']=$_POST['uname'];
	$_SESSION['password']=$_POST['password'];
	
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
		$sql = "SELECT * FROM user";
		$result = $conn1->query($sql);
	if ($result->num_rows > 0) {
 
 	 while($row = $result->fetch_assoc()) {
    //echo "User name: " . $row["uname"]. " - Password: " . $row["pass"].  "<br>";
 	 
	if($row['uname']==$_SESSION['username'] && $row['pass']== $_SESSION['password'])
	{
		$_SESSION['firstname']=$row['fname'];
		$_SESSION['lastname']=$row['lname'];
	 	$_SESSION['gender']=$row['gender'];
		 $_SESSION['mobile']=$row['mobile'];
		 $_SESSION['email']=$row['email'];
		 $_SESSION['address']=$row['address'];

		//echo $_SESSION['gender']; ;
		echo "<script>location.href='index.php'</script>";
		
	}
		else
		{
			echo "fail";
		}

}
	} else {
  	echo "0 results";
	}
		
	}

	$conn1->close();


	?>
<body>

<section class="main"  method="POST">
    <div class="container">
        <div class="mainWrapper">
<!-- this secton is for notice bord only  -->
		
            <div class="signUpSection">
                <div class="swrapper">
                    
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="stitle"><h1>Shop Management System</h1></div>
                    <br>
                   
                    <p>This is the login form for delivery man!!! <br> For Registration as Delivery man <br> click </p>
                    
                    <br>
                    <br>
                   

                    <!-- redirect page -->
                     <div class="lnk"><a href="../fp/sign up.php" target="_blank" class="redirectButton" name="rBtn">Sign Up</a></div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>
            </div>
<!-- this secton is for log in form  -->


            <div class="formSectoin">
                <div class="formWrapper">
				<body >
    				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
        			<h1 style="text-align: center;">Login</h1>
        			<fieldset>
				<div class="logInfo">
                <tr>
                    <td>
                        UserName 
                    
                        <input type="text" name="uname" value="">
                    </td>
                    </tr>
<br>
                    <tr>
                    <td>
                        Password
                    </td>
                    <td>
                        <input type="password" name="password" value="">
                    </td>
                    </tr>

					<br>
                <tr >
                <td>
                    <input class="logBtn" type="submit" name="set" value="Login">
					<br>
					 <br>
				</div>

<br>
            </table>
        </fieldset>
                <
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            
                            <br>
                            <br>
                            <div class="last"><span>stay with us</span></div>
                        
                
                    </form>
                </div>
               
                
            </div>
           
        </div>
    </div>
</section>
<?php
 if(isset($_POST["rBtn"]))
{
    echo "<script>location.href='login.php'</script>";
}
?>
</body>
</html>