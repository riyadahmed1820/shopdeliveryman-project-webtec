<?php
 if($_SERVER["REQUEST_METHOD"] == "GET") {

	$searchKey = $_GET['searchKey'];
	$sql = "SELECT *FROM orderlist WHERE oid = " . $searchKey;

	if(empty($searchKey)) {
		echo "Empty";
	}
	
	$conn = new mysqli("localhost","root", "123", "demo");

	if($conn -> connect_error) {
		echo "Failed to connect database!";
	}
	else {
		$result = $conn -> query($sql);

		if($result -> num_rows > 0) {

			echo "<ol>";

			while($row = $result -> fetch_assoc()) {

				
				 echo "Customer Id: " . $row["cid"]. " - Order Id : " . $row["oid"]. " - Order Date : " . $row["orderdate"]. " - Address : " . $row["location"]."<br>";
				
			}

		} 
		else {
			echo "No record found!";
		}
	}
		
	$conn -> close();
}
?>