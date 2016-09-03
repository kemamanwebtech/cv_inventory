<?php
//include the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
$result = mysqli_query($conn, "SELECT * FROM tbl_nutanix");

?>

<html>
<head>	
	<title>View Nutanix Specs</title>
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
		<form  method="post" action="search_view_nutanix.php">
			<label for="Serial No.">Serial No. :</label>
		    <input type="text" name="ntnx_serial" id="ntnx_serial" value="" />
	        <input type="submit" class="button" value="Search" />		
		</form>

		<form action="view_nutanix_specs.php" class="form">	
			<button>View All</button>
		</form>
		
		<form action="index.html" class="form">	
			<button>Back</button>
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
				echo "<td><h2>".$row['ntnx_cpu']."</h2></td>";
	    	}
		}	

		$conn->close();
	?>

	</table>

</body>
</html>