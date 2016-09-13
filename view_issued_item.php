<?php
//include the database connection file
include_once("config.php");

//start session for this user & display 
session_start();
//echo "Logged in user : " . $_SESSION["logged_in_user"] ."<p><p>";

//fetching data in descending order (lastest entry first). Use pdo instead of mysqli
$query_tbl_issued="SELECT * FROM tbl_issued ORDER BY issued_date DESC lIMIT 50";
$result = $conn->query($query_tbl_issued);

?>

<html>
<head>	
	<title>View All Issued Items</title>
	<link rel="stylesheet" type="text/css" href="view_stock.css">
</head>

<body>
	<div class="header">
		<img src="logo.png">
		<p><p>Inventory System<p><p>			
	</div>
	
	<fieldset>
	
		<form  method="post" action="search_view_issued.php">
			<label for="Serial No.">Serial No. :</label>
		    <input type="text" name="serial_no" id="serial_no" value="" />
	        <input type="submit" class="button" value="Search" />		
		</form>

		<form action="view_issued_item.php" class="form">	
			<button>View All</button>
		</form>
		<div class="page_title">Issued Items</div>
		<form action="function.php" class="form">	
			<button>Back</button>
		</form>
		
	</fieldset>

	<table width='100%' border=0>

	<!-- table header -->
	<tr bgcolor='#21466c' border=0>
		<td><h1>Product Name</h1></td>
		<td><h1>Serial No.</h1></td>
		<td><h1>Product Model</h1></td>
		<td><h1>Qty</h1></td>
		<td><h1>Issued By</h1></td>
		<td><h1>Issued Date</h1></td>
		<td><h1>Customer</h1></td>
		<td><h1>Contact Info</h1></td>
		<td><h1>remarks</h1></td>
		<td><h1>Last Modified By</h1></td>
	</tr>

	<?php 

		//echo "run php";

		if ($row = $result->fetch(PDO::FETCH_ASSOC)) 
		{
			while($row = $result->fetch(PDO::FETCH_ASSOC)) {
				echo "<tr bgcolor='#CCCCCC' border=0>";
	        	echo "<td><h2>".$row['product_name']."</h2></td>";
	        	echo "<td><h2>".$row['serial_no']."</h2></td>";
	        	echo "<td><h2>".$row['product_desc']."</h2></td>";
	        	echo "<td><h2>".$row['quantity']."</h2></td>";
	        	echo "<td><h2>".$row['issued_by']."</h2></td>";
	        	echo "<td><h2>".$row['issued_date']."</h2></td>";
	        	echo "<td><h2>".$row['issued_customer']."</h2></td>";
	        	echo "<td><h2>".$row['customer_contact']."</h2></td>";
	        	echo "<td><h2>".$row['remarks']."</h2></td>";
				echo "<td><h2>".$row['last_modified_by']."</h2></td>"."<tr>";
	    	}
		}

		//close used resources
		$result->closeCursor();
		$db = null;
	?>

	</table>
</body>
</html>