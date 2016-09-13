<?php
//include the database connection file
include_once("config.php");

//get searchable serial no
$ntnx_serial = $_POST["ntnx_serial"];

//TO DO : protect from SQL Injection
$search_query = "SELECT * FROM tbl_nutanix where ntnx_serial like '" . strval($ntnx_serial) ."%'";

//run search query
$result = mysqli_query($conn, $search_query);

?>

<html>
<head>	
	<title>Nutanix Specs</title>
	<link rel="stylesheet" type="text/css" href="view_stock.css">
</head>

<body>
	<div class="header">
		<img src="logo.png">
		<p><p>NUTANIX SPEC SHEET<p><p>			
	</div>


	<fieldset>
		<div class="page_title">Nutanix Specs Sheet</div>
		<form  method="post" action="search_view_nutanix.php">
			<label for="Serial No.">Serial No. :</label>
		    <input type="text" name="ntnx_serial" id="ntnx_serial" value="" />
	        <input type="submit" class="button" value="Search" />		
		</form>

		<form action="view_nutanix_specs.php" class="form">	
			<button>View All</button>
		</form>
		
		<form action="index.html" class="form">	
			<Button>Back</Button>
		</form>
	</fieldset>

	<table class="table" width='100%'>

	<!-- table header -->
	<tr bgcolor='#21466c'>
		<td><h1>Serial No.</h1></td>
		<td><h1>Model</h1></td>
		<td><h1>Sata Capacity per node</h1></td>
		<td><h1>SSD Capacity per node</h1></td>
		<td><h1>Ram per node</h1></td>
		<td><h1>cpu per node</h1></td>
		
	</tr>

	<?php 

		//echo "run php";

		if ($result->num_rows > 0) {
			//echo "have result";

			while($row = $result->fetch_assoc()) {
				echo "<tr bgcolor='#CCCCCC' border=0>";
				echo "<td><h2>".$row['ntnx_serial']."</h2></td>";
	        	echo "<td><h2>".$row['ntnx_model']."</h2></td>";
	        	echo "<td><h2>".$row['ntnx_sata']."</h2></td>";
	        	echo "<td><h2>".$row['ntnx_ssd']."</h2></td>";
				echo "<td><h2>".$row['ntnx_ram']."</h2></td>";
				echo "<td><h2>".$row['ntnx_cpu']."</h2><tr>";
	    	}
		}	

		$conn->close();
	?>
	</table>
</body>
</html>