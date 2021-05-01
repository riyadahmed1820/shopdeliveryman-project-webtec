<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Lost</title>
</head>

<body>
<center>
<form>
         <h1>Delivery List </h1>  
<button style="center" type="button" onclick="displaydata()">Load Delivery List</button>  
    <table id ="table">  
    <tbody id="response">
    
    </tbody>            
    </table>
</form>
    <h1>Order Details </h1>

	<label for="searchKey">Id:</label>
	<input type="text" name="searchKey" id="searchKey">

	<button id="search" onclick="search()">Details</button>
	<p id="p2"></p>

	<br>
	<hr>
	<br>
</center>

<script type="text/javascript">
        function displaydata() {
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if(this.readyState == 4 && this.status == 200) {
					document.getElementById("table").innerHTML = xhttp.responseText;
				}
			}

			xhttp.open("GET", "orderdetails.php", true);
			xhttp.send();
		}
        function search() {
			var searchKey = document.getElementById("searchKey").value;

			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if(this.readyState == 4 && this.status == 200) {
					document.getElementById("p2").innerHTML = xhttp.responseText;
				}
			}

			xhttp.open("GET", "searchajax.php?searchKey=" + searchKey, true);
			xhttp.send();
		}
       
</script>


</body>
</html>