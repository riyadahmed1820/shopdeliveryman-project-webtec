<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile</title>
</head>

<?php 
	session_start();
	/*$username=$_POST['uname'];
	$password=$_POST['password'];*/
    

	?>


<body>
<form method ="POST">

    <center>
    <h2>Profile</h2>
    <table>                      
           <tr>
                <tr>
                    <td>
                        First Name
                    </td>
                    <td>
                        <input type="text" name="fname" value="<?php echo $_SESSION['firstname'] ;?>" >
                    </td>
                </tr>
                   

                <tr>
                    <td>
                        Last Name
                    </td>
                    <td>
                        <input type="text" name="lname" value="<?php echo $_SESSION['lastname'] ;?>" >
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

                    <td>
                        UserName 
                    </td>
                    <td>
                        <input type="text" name="uname" value="<?php echo $_SESSION['username'] ;?>">
                    </td>
                    </tr>
                     <td>
                        Password
                    </td>
                    <td>
                        <input type="text" name="pass" value="<?php echo $_SESSION['password'] ;?>">
                    </td>
                    </tr>

                     <td>
                        Mobile Number  
                    </td>
                    <td>
                        <input type="text" name="uname" value="<?php echo $_SESSION['mobile'] ;?>">
                    </td>
                    </tr>

                    <tr>
                    <td>
                         Email
                    </td>
                    <td>
                        <input type="email" name="email" id="" value="<?php echo $_SESSION['email'] ;?>">
                    </td>
                    </tr>

                    <tr>
                    <td>
                         Address
                    </td>
                    <td>
                        <input type="text" name="address" value="<?php echo $_SESSION['address'] ;?>">
                    </td>
                    </tr>

                    
    </table>
    <br><br>
    <input  type="submit" name="uppro" value="Update Profile">
    <input  type="submit" name="back" value="Back">
    <?php
    if(isset($_POST["back"]))
{
    echo "<script>location.href='index.php'</script>";
}
?>
    
    
    
                    

</form>
    
</body>
</html>