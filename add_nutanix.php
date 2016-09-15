<?php
//include the database connection file
include_once("config.php");

//queries
$query_product_name = "SELECT distinct product_name FROM tbl_asset";
$query_user = "SELECT distinct name FROM tbl_user";

//run queries to get results
$result_product_name = $conn->query($query_product_name);
$result_user = $conn->query($query_user);

?>

<html>
<head>	
	<title>Nutanix</title>
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
    <script src="date_picker.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="add_form.css">

</head>

<body>
	<div class="header">
		<img src="logo.png">
		<p><p>Simple Inventory System<p><p>			
	</div>
	
	<fieldset>
		<div class="page_title">Add New Asset</div>
		<form class="form" action="function.php" >	
			<button>Back</button>
		</form>
	</fieldset>
	
<!--UI END-->

<form class="add_form" method="post" action="save_nutanix.php">
	<div class="box_container">
			<p>Product Name : 
				<select id="product_name" name="product_name">  
				<?php
					if ($row = $result_product_name->fetch(PDO::FETCH_ASSOC)) 
					{
						while($row = $result_product_name->fetch(PDO::FETCH_ASSOC)) 
						{
							echo '<option value="' . $row['product_name']. '">' . $row['product_name']. '</option>';
						}
					} 
				?>
				</select>
			</p>
			<p>Serial No. : <input type="text" name="product_serial" /></p>
			<p>Model : <input type="text" name="product_model" /></p>
			<!--<p>Unit : <input type="text" name="unit" /></p>-->
			<p>Quantity : <input type="text" name="product_qty" /></p>
		    <p>Registered_by : 
				<select id="name" name="name">  
				<?php
					if ($row = $result_user->fetch(PDO::FETCH_ASSOC)) 
					{
						while($row = $result_user->fetch(PDO::FETCH_ASSOC)) 
						{
							echo '<option value="' . $row['name']. '">' . $row['name']. '</option>';
						}
					}     
				?>
				</select>
			<p>Date Registered (m/d/y) : <input type="text" id="datepicker" name="date"></p>
			<p>Location : <input type="text" name="product_location" /></p>
			<p>Owner : <input type="text" name="owner" /></p>
			<p>Sata Capacity per node : <input type="text" name="ntnx_sata" /></p>
			<p>SSD Capacity per Node : <input type="text" name="ntnx_ssd" /></p>
			<p>Ram Capacity per Node : <input type="text" name="ntnx_ram" /></p>
			<p>CPU Capacity per Node : <input type="text" name="ntnx_cpu" /></p>
			
			<!--<p>Issued Customer : <input type="text" name="issued_customer" /></p>
			<p>Customer Contact : <input type="text" name="customer_contact" /></p>
			<p>Remarks : <input type="text" name="remarks" /></p>
			<p>Work Order : <input type="text" name="work_order" /></p>
			<p>Parameter 1 : <input type="text" name="param1" /></p>
			<p>Parameter 2 : <input type="text" name="param2" /></p>
			<p>Parameter 3 : <input type="text" name="param3" /></p>
			<p>Parameter 4 : <input type="text" name="param4" /></p>
			<p>Parameter 5 : <input type="text" name="param5" /></p>
			<p>Parameter 6 : <input type="text" name="param6" /></p>
			<p>Parameter 7 : <input type="text" name="param7" /></p>-->
			<button>Add</button>
			<p><p>
			
	</div>
</form>

</body>
</html>