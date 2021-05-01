<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile</title>
    <link rel="stylesheet" href="profileStyle/rowProfileStyle.css">
</head>

<?php 
	session_start();
	/*$username=$_POST['uname'];
	$password=$_POST['password'];*/
    

	?>


<body>

<div class="container">


<form method ="POST">

    <center>
    <h2>Profile</h2>

    <div class="profilePhoto">
    <img src="fp/<?=$propic['propic']?>"
    <input type="text" name="fname" value="<?php echo $_SESSION['ppic'] ;?>" >
    </div>



    <div class="formTable">

    
    <table>                      
           <tr>
                <tr>
                    <td>
                         <span>First Name</span>
                    </td>
                    <td>
                        <input type="text" name="fname" value="<?php echo $_SESSION['firstname'] ;?>" >
                    </td>
                </tr>
                   

                <tr>
                    <td>
                       <span>last name</span> 
                       
                    </td>
                    <td>
                        <input type="text" name="lname" value="<?php echo $_SESSION['lastname'] ;?>" >
                    </td>
                </tr>

                <tr>
                    <td>
                       <span>Gender</span> 
                    </td>
                    <td>
                        <input type="text" name="gender" value="<?php echo $_SESSION['gender'] ;?>">
                    </td>
                </tr>

                    <td>
                       <span>UserName</span>  
                    </td>
                    <td>
                        <input type="text" name="uname" value="<?php echo $_SESSION['username'] ;?>">
                    </td>
                    </tr>
                     <td>
                        <span>Password</span> 
                    </td>
                    <td>
                        <input type="text" name="pass" value="<?php echo $_SESSION['password'] ;?>">
                    </td>
                    </tr>

                     <td>
                       <span>Mobile Number </span>   
                    </td>
                    <td>
                        <input type="text" name="uname" value="<?php echo $_SESSION['mobile'] ;?>">
                    </td>
                    </tr>

                    <tr>
                    <td>
                        <span>Email</span>  
                    </td>
                    <td>
                        <input type="email" name="email" id="" value="<?php echo $_SESSION['email'] ;?>">
                    </td>
                    </tr>

                    <tr>
                    <td>
                         <span>Address</span> 
                    </td>
                    <td>
                        <input type="text" name="address" value="<?php echo $_SESSION['address'] ;?>">
                    </td>
                    </tr>

                    
    </table>
 


    </div>

       <div class="btnBox">

         <div class="upDateBtn"><a href="../fp/updateprofile.php" target="_blank"  name="updatebtn">Uptade Profile</a></div>
        <div class="back"><a href="../fp/index.php" target="_blank" name="backbtn">back</a></div>

       </div>
       <br>
   
    <form >
    <?php

?>
</from>
    
    
    
                    

</form>

</div>
    
</body>
</html>