<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>

    <link rel="stylesheet" href="design.css">
</head>

<body>
    <header id="primeHeader">
        <div class="loginPage">

            <div class="container">

                <!-- this is for title line ............-->

                <div class="wrapper">
                    <div class="header">
                        <h1>Registertion-form</h1>
                        <div class="sLine"><b>Sign Up</b></div>
                    </div>

                    <!-- main form .......... -->


                    <div class="formElement">

                        <form action="dbcon.php" method="POST">


                            <table class="allInputBox">
                                <thead></thead>
                                <tbody class="element">
                                    <tr>
                                        <th><span>UserName</span></th>
                                        <th><input type="text" name="uname" value="" required></th>
                                    </tr>
                                    <tr>
                                        <th><span>Password</span></th>
                                        <th><input type="password" name="pass" value="" required></th>
                                    </tr>
                                    <tr>
                                        <th><span>First Name</span></th>
                                        <th><input type="text" name="fname" value="" required></th>
                                    </tr>
                                    <tr>
                                        <th><span>Last Name</span></th>
                                        <th><input type="text" name="lname" value="" required></th>
                                    </tr>
                                    <tr>
                                        <th><span>Gender</span></th>
                                        <th><input type="radio" name="gender" value="Male"required> Male
                                            <input type="radio" name="gender" value="Female"required> Female</th>
                                    </tr>
                                    <tr>
                                        <th><span>Mobile Number</span></th>
                                        <th><input type="number" name="mobile" value="" required></th>
                                    </tr>
                                    <tr>
                                        <th><span>Email Addresss</span></th>
                                        <th><input type="email" name="email" value="" required></th>
                                    </tr>
                                    <tr>
                                        <th><span>Addresss</span></th>
                                        <th><input type="text" name="address" value="" required></th>
                                    </tr>



                                </tbody>
                            </table>


                            <div class="submitBtn"><input type="submit" name="set" value="Submit"></div>
                            <div class="submitBtn"><input type="submit" name="bac" value="Back"></div>
                        </form>
                        
                            
                            

                        <!-- this is footer -->


                        <div class="footer" >
                            <span>this is footer</span>
                        </div>

                

                    </div>
                </div>

            </div>
		</div>
    </header>
   
</body>
<?php
 	if(isset($_POST["bac"]))
        {   
             
            echo "<script>location.href='login.php'</script>";
        }

?>
</html>
