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

                         <form action="dbcon.php" method="POST" onsubmit=" return formValidation()">
                            <table class="allInputBox">
                                <thead></thead>
                                <tbody class="element">
                                    <tr>
                                        <th><span>UserName</span></th>
                                        <th><input type="text" name="uname" class="username" value="" ></th>
                                        <th><span id="uname"></span></th>
                                    </tr>
                                    <tr>
                                        <th><span>Password</span></th>
                                        <th><input type="password" name="password" class="password" value="" ></th>
                                        <th><span id="pass"></span></th>
                                    </tr>
                                    <tr>
                                        <th><span>First Name</span></th>
                                        <th><input type="text" name="fname" class="firstname" value="" ></th>
                                        <th><span id="fname"></span></th>
                                    </tr>
                                    <tr>
                                        <th><span>Last Name</span></th>
                                        <th><input type="text" name="lname" class="lastname" value="" ></th>
                                        <th><span id="lname"></span></th>
                                    </tr>
                                    <tr>
                                        <th><span>Gender</span></th>
                                        <th><input type="radio" name="gender" class="gender" value="Male"> Male
                                            <input type="radio" name="gender"  class="gender" value="Female"> Female</th>
                                            <th><span id="gender"></span></th>
                                    </tr>
                                    <tr>
                                        <th><span>Mobile Number</span></th>
                                        <th><input type="number" name="mobile" class="mobile" value="" ></th>
                                        <th><span id="mobile"></span></th>
                                    </tr>
                                    <tr>
                                        <th><span>Email Addresss</span></th>
                                        <th><input type="email" name="email" class="email" value="" ></th>
                                        <th><span id="email"></span></th>
                                    </tr>
                                    <tr>
                                        <th><span>Addresss</span></th>
                                        <th><input type="text" name="address" class="address" value="" ></th>
                                        <th><span id="address"></span></th>
                                    </tr>



                                </tbody>
                            </table>


                            <div class="submitBtn"><input type="submit" name="set" value="Submit"></div>
                            
                        </form>

                        <form method="POST">
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
   <script src="script.js"></script>
</body>
<?php
 	if(isset($_POST["bac"]))
        {   
             
            echo "<script>location.href='login.php'</script>";
        }

?>
</html>
