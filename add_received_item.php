

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
	<title>Add New Received Item</title>
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
		<div class="page_title">Add New Received Items</div>
		<form class="form" action="function.php" >	
			<button>Back</button>
		</form>
	</fieldset>

	<form class="add_form" method="post" action="save_received_item.php">
		<div class="box_container">
		        <p>Serial No. : <input type="text" name="serial_no" /></p>
				<p>Product Name: 
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
				<p>Product Model : <input type="text" name="product_desc" /></p>
				<p>Quantity : <input type="text" name="quantity" /></p>
				<p>Received from : <input type="text" name="received_from" /></p>
				<p>Received date (m/d/y) : <input type="text" id="datepicker" name="received_date"></p>
				<p>Remarks : <input type="text" name="remarks" /></p>
				<p>Item Owner : 
				<select id="item_owner" name="item_owner">  
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
				</p>
				<button>Add</button>
				<p><p>
		</div>
		
	</form>

</body>
</html>