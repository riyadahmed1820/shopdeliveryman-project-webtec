<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Lost</title>
</head>
<?php 
	session_start();
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
		$sql = "SELECT * FROM orderlist";
		$result = $conn1->query($sql);
	if ($result->num_rows > 0) {
 
 	 while($row = $result->fetch_assoc()) {

       $cid=$row['cid'];
        $oid=$row['oid'];
        $odate=$row['orderdate'];
        $olocation=$row['location'];
         echo "Customer Id: " . $row["cid"]. " - Order Id : " . $row["oid"].  "<br>";

}
	}
 } 

	$conn1->close();

	?>
<body>
    <table>                      
            <tr>
               <tr>
                    <td>
                        Order Details
                    
                        <input type="text" name="oid" value="">
                    </td>
                    </tr>
                    <br>
               <th><div ><a href="../fp/orderdetails.php" target="_blank" name="od">details</a></div></th>
            </tr>
            
</table>
<?php
    if(isset($_POST['od']))
     {
         $oid=$_POST['oid'];
         $sq9 = "SELECT * FROM orderlist where oid ='$oid' ";
         if ($conn1->query($sq9) === TRUE ) {
         echo "Customer Id: " . $row["cid"]. " - Order Id : " . $row["oid"].  "<br>";
        } else {
         echo "Error updating record: " . $conn1->error;
         }
     }

?>

</body>
</html>