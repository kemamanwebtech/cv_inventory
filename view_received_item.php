<?php
//include the database connection file
include_once("config.php");

//start session for this user & display 
session_start();

//fetching data in descending order (lastest entry first). Use pdo instead of mysqli
$query_tbl_received="SELECT * FROM tbl_received ORDER BY received_date DESC lIMIT 50";
$result = $conn->query($query_tbl_received);

?>

<html>
<head>	
	<title>View All Received Items</title>
	<link rel="stylesheet" type="text/css" href="view_stock.css">
</head>

<body>
	<div class="header">
		<img src="logo.png">
		<p><p>Inventory System<p><p>			
	</div>
	
	<fieldset>
	
	    <form  method="post" action="search_view_received.php">
			<label for="Serial No.">Serial No. :</label>
		    <input type="text" name="serial_no" id="serial_no" value="" />
	        <input type="submit" class="button" value="Search" />		
		</form>

		<form action="view_received_item.php" class="form">	
			<button>View All</button>
		</form>
		<div class="page_title">Received Items</div>
		<form action="function.php" class="form">	
			<button>Back</button>
		</form>
		
	</fieldset>

	<table width='100%' class="table">

	<!-- table header -->
	<tr bgcolor='#21466c' border=0>
		<td><h1>Product Name</h1></td>
		<td><h1>Serial No.</h1></td>
		<td><h1>Product Model</h1></td>
		<td><h1>Qty</h1></td>
		<td><h1>Received From</h1></td>
		<td><h1>Received Date</h1></td>
		<td><h1>Remarks</h1></td>
		<td><h1>Owner</h1></td>
		<td><h1>Last Modified By</h1></td>
	</tr>

	<?php 

		if ($row = $result->fetch(PDO::FETCH_ASSOC)) 
		{
			while($row = $result->fetch(PDO::FETCH_ASSOC)) {
				echo "<tr bgcolor='#CCCCCC' border=0>";
	        	echo "<td><h2>".$row['product_name']."</h2></td>";
	        	echo "<td><h2>".$row['serial_no']."</h2></td>";
	        	echo "<td><h2>".$row['product_desc']."</h2></td>";
	        	echo "<td><h2>".$row['quantity']."</h2></td>";
	        	echo "<td><h2>".$row['received_from']."</h2></td>";
	        	echo "<td><h2>".$row['received_date']."</h2></td>";
	        	echo "<td><h2>".$row['remarks']."</h2></td>";
	        	echo "<td><h2>".$row['item_owner']."</h2></td>";
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