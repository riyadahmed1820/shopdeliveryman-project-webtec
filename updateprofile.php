<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile</title>
</head>

<?php 
	session_start();
	/*$password=$_POST['password'];*/
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
    else{
       if(isset($_POST['up']))
    {   $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $password=$_POST['pass'];
        $address=$_POST['address'];
         $mobile=$_POST['mobile'];

       $sql = "UPDATE user SET fname='$fname' where uname =".$_SESSION['username']."";
       $sq2 = "UPDATE user SET lname='$lname' where uname =".$_SESSION['username']."";
       $sq3 = "UPDATE user SET pass='$pass' where uname =".$_SESSION['username']."";
       $sq4 = "UPDATE user SET address='$address' where uname =".$_SESSION['username']."";
       $sq5 = "UPDATE user SET mobile='$mobile' where uname =".$_SESSION['username']."";
      
        if ($conn1->query($sql) === TRUE && $conn1->query($sq2) === TRUE && $conn1->query($sq3) === TRUE && $conn1->query($sq4) === TRUE && $conn1->query($sq5) === TRUE) {
         echo "Logout to see new profile";
        } else {
         echo "Error updating record: " . $conn1->error;
         }
     }
     if(isset($_POST['delete']))
     {
         $sql7=" DELETE FROM salary where uname =".$_SESSION['username']."";
         $sq6 = "DELETE FROM user where uname =".$_SESSION['username']."";
         if ($conn1->query($sq6) === TRUE && $conn1->query($sql7) === TRUE ) {
         echo "Deleted";
        } else {
         echo "Error updating record: " . $conn1->error;
         }
     }
    }

	?>
<body>
<form action="#" method="POST" onsubmit=" return formValidation()">

    <center>
    <h1>Change your Profile</h1>
    <table>                      
           <tr>
                <tr>
                    <td>
                        First Name
                    </td>
                    <td>
                        <input type="text" name="fname" class="firstname" value="<?php echo $_SESSION['firstname'] ;?>" >
                        <th><span id="fname"></span></th>
                    </td>
                </tr>
                   

                <tr>
                    <td>
                        Last Name
                    </td>
                    <td>
                        <input type="text" name="lname" class="lastname" value="<?php echo $_SESSION['lastname'] ;?>" >
                        <th><span id="lname"></span></th>
                    </td>
                </tr>

                <tr>
                    <td>
                        Gender
                    </td>
                    <td>
                        <input type="text" name="gender" class="gender" value="<?php echo $_SESSION['gender'] ;?>">
                        <th><span id="gender"></span></th>
                    </td>
                </tr>

                    <td>
                        UserName 
                    </td>
                    <td>
                        <input type="text" name="uname" class="username" value="<?php echo $_SESSION['username'] ;?>">
                        <th><span id="uname"></span></th>
                    </td>
                    </tr>
                     <td>
                        Password
                    </td>
                    <td>
                        <input type="text" name="pass" class="password" value="<?php echo $_SESSION['password'] ;?>">
                        <th><span id="pass"></span></th>
                    </td>
                    </tr>

                     <td>
                        Mobile Number  
                    </td>
                    <td>
                        <input type="text" name="mobile" class="mobile" value="<?php echo $_SESSION['mobile'] ;?>">
                        <th><span id="mobile"></span></th>
                    </td>
                    </tr>

                    <tr>
                    <td>
                         Email
                    </td>
                    <td>
                        <input type="email" name="email" id="" class="email" value="<?php echo $_SESSION['email'] ;?>">
                        <th><span id="email"></span></th>
                    </td>
                    </tr>

                    <tr>
                    <td>
                         Address
                    </td>
                    <td>
                        <input type="text" name="address" class="address" value="<?php echo $_SESSION['address'] ;?>">
                        <th><span id="address"></span></th>
                    </td>
                    </tr>

                    
    </table>
    <br><br>
    <input  type="submit" name="up" value="Update Profile">
    <input  type="submit" name="delete" value="Delete account">
    <input  type="submit" name="back" value="Back">
    <form >
    <?php
    if(isset($_POST["back"]))
    {
    echo "<script>location.href='index.php'</script>";
    }
?>
</from>
<script src="script.js"></script>
</body>
    