<?php
//include the database connection file
include_once("config.php");
//include_once("mysqltophpdate.php")

//fetching data in descending order (lastest entry first)
$result = mysqli_query($conn, "SELECT * FROM tbl_asset");

?>

<html>
<head>	
	<title>View All Items</title>
	<link rel="stylesheet" type="text/css" href="view_stock.css">
</head>

</head>

<body>

	<div class="header">
		<img src="logo.png">
		<p><p>Simple Inventory System<p><p>			
	</div>

	<fieldset>
		<div class="page_title">Assets owned by MyCloudVision Sdn. Bhd.</div>
		<form  method="post" action="search_view_stock.php">
			<label for="Serial No.">Serial No. :</label>
		    <input type="text" name="serial_no" id="serial_no" value="" />
	        <input type="submit" class="button" value="Search" />		
		</form>

		<form action="view_stock.php" class="form">	
			<button>View All</button>
		</form>
		
		<form action="index.html" class="form">	
			<button>Back</button>
		</form>
	</fieldset>

	<table class="table" width='100%'>

	<!-- table header -->
	<tr bgcolor='#21466c'>
		<td><h1>Product</h1></td>
		<td><h1>Serial No.</h1></td>
		<td><h1>Model</h1></td>
		<td><h1>Item Location</h1></td>
		<td><h1>Owner</h1></td>
		<td><h1>Quantity</h1></td>
		<td><h1>Last Modified</h1></td>
	</tr>


	<?php 

		//echo "run php";

		if ($result->num_rows > 0) {
			//echo "have result";

			while($row = $result->fetch_assoc()) {
				echo "<tr bgcolor='#CCCCCC' border=0>";
				echo "<td><h2>".$row['product_name']."</h2></td>";
	        	echo "<td><h2>".$row['product_serial']."</h2></td>";
	        	echo "<td><h2>".$row['product_model']."</h2></td>";
				echo "<td><h2>".$row['product_location']."</h2></td>";
				echo "<td><h2>".$row['owner']."</h2></td>";
				echo "<td><h2>".$row['product_qty']."</h2></td>";
				echo "<td><h2>".$row['date']."</td>"."</h2><tr>";
	    	}
		}	

		$conn->close();
	?>

	</table>

</body>
</html>