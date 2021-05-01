<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcom</title>
    <link rel="stylesheet" href="indexStyle/style.css">
</head>
<?php
session_start();
if(!isset($_SESSION['username']))
{
    header('location:login.php');
}
?>

    
<body>
    <section>
        <div class="container">
        <form method="POST">
            <div class="header">
                <!-- header line -->
                <div class="userName">
                    <h1>Welcome <?php echo $_SESSION['firstname'] ;?> </h1>
                </div>
         <!-- nav bar -->
                <div class="allButton">

                   <div class="btn"> <input type="radio" name="availability" value="Online"> Online </div>
                   <div class="btn"> <input type="radio" name="availability" value="Offline"> Offline </div>
                   <div class="btn"> <input type="radio" name="availability" value="On Delivery"> On Delivery </div>

                </div>


            </div>

            <!-- vitorer body -->

            <div class="body">
                <div class="navigation">

                    
                    <div class="singleNavigationBar">
                        
                        <button type="submit" name="profile" onclick="displayprofile()" >Profile</button>
                    </div>
                    <div class="singleNavigationBar">
                        <button type="submit" name="orderlist">Order list</button>
                    </div>
                    <div class="singleNavigationBar">
                        <button type="submit" name="salary">Salary</button>
                    </div>
                    <div class="singleNavigationBar">
                        <button type="submit" name="back">Logout</button>
                    </div>
                    

                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <div id="showProduct"> </div>

            </div>
            <br>
            <br>
            <br>


            
        </form>
        </div>
    </section>

   
</body>

 <?php
 if(isset($_POST["back"]))
{
    echo "<script>location.href='login.php'</script>";
}
if(isset($_POST["profile"]))
{
    echo "<script>location.href='profile.php'</script>";
}
if(isset($_POST["orderlist"]))
{
    echo "<script>location.href='orderlist.php'</script>";
}
if(isset($_POST["salary"]))
{
    echo "<script>location.href='Salary.php'</script>";
}

?>
<script type="text/javascript">
        function displayprofile() {
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if(this.readyState == 4 && this.status == 200) {
					document.getElementById("table").innerHTML = xhttp.responseText;
				}
			}

			xhttp.open("GET", "profile.php", true);
			xhttp.send();
		}
</script>

</html>