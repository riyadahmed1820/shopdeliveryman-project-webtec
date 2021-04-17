<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcom</title>
</head>
<?php
session_start();
if(!isset($_SESSION['username']))
{
    header('location:login.php');
}
?>

<body>
 <form method ="POST">
<h1>Welcome <?php echo $_SESSION['firstname'] ;?> </h1>

<input type="radio" name="availability" value="Online" >  Online
<input type="radio" name="availability" value="Offline" > Offline
<input type="radio" name="availability" value="On Delivery" > On Delivery

<br><br>
 <input  type="submit" name="back" value="Log Out">
 <input  type="submit" name="profile" value="Profile">
 <input  type="submit" name="orderlist" value="Order List">
 <input  type="submit" name="salary" value="Salary Statment">
 </form>
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

</html>