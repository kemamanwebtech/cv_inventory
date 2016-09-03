<?php
//include the database connection file
include_once("config.php");

//get searchable serial no
$serial_no = $_POST["serial_no"];

//TO DO : protect from SQL Injection
$search_query = "SELECT * FROM tbl_issued where serial_no like '" . strval($serial_no) ."%'";
//$search_query = "SELECT * FROM tbl_nutanix where ntnx_serial like '" . strval($ntnx_serial) ."%'";
//run search query
$result = mysqli_query($conn, $search_query);


?>

<html>
<head>	
	<title>Issued Items</title>
	<link rel="stylesheet" type="text/css" href="view_stock.css">
</head>

<body>
	<div class="header">
		<img src="logo.png">
		<p><p>Issued Items<p><p>			
	</div>


	<fieldset>
		<div class="page_title">Issued Items</div>
		<form  method="post" action="search_view_received.php">
			<label for="Serial No.">Serial No. :</label>
		    <input type="text" name="serial_no" id="serial_no" value="" />
	        <input type="submit" class="button" value="Search" />		
		</form>

		<form action="view_issued_item.php" class="form">	
			<button>View All</button>
		</form>
		
		<form action="function.php" class="form">	
			<Button>Back</Button>
		</form>
	</fieldset>

	<table class="table" width='100%'>

	<!-- table header -->
		<tr bgcolor='#21466c' border=0>
		td><h1>Product Name</h1></td>
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
		
	</tr>

	<?php 

		//echo "run php";

		if ($result->num_rows > 0) {
			//echo "have result";

			while($row = $result->fetch_assoc()) {
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

		$conn->close();
	?>
	</table>
</body>
</html>