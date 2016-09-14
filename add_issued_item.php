<?php
//include the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
// $result_product_name = mysqli_query($conn, "SELECT distinct product_name FROM tbl_product");
// $result_user = mysqli_query($conn, "SELECT distinct name FROM tbl_user");
// $result_status = mysqli_query($conn, "SELECT * FROM tbl_status");

$query_product_name = "SELECT distinct product_name FROM tbl_product";
$query_user = "SELECT distinct name FROM tbl_user";

$result_product_name = $conn->query($query_product_name);
$result_user = $conn->query($query_user);
$result_product_name = mysqli_query($conn, "SELECT distinct product_name FROM tbl_product");
$result_user = mysqli_query($conn, "SELECT distinct name FROM tbl_user");
$result_status = mysqli_query($conn, "SELECT * FROM tbl_status");
?>


<html>
<head>	
	<title>Add New Issued Item</title>
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
    <script src="date_picker.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="add_form.css">

</head>
<body>
	<div class="header">
		<img src="logo.png">
		<p><p>Inventory System<p><p>			
	</div>
	
	<fieldset>
		<div class="page_title">Add New Issued Items</div>
		<form class="form" action="function.php" >	
			<button>Back</button>
		</form>
	</fieldset>
	
<form class="add_form" method="post" action="save_issued_item.php">
	<div class="box_container">
	        <p>Serial No. : <input type="text" name="serial_no" /></p>
			<p>Product Name : 
				<select id="product_name" name="product_name">  
				<?php
					 if ($result_product_name->num_rows > 0) {
					 	while($row = $result_product_name->fetch_assoc()) {
						echo '<option value="' . $row['product_name']. '">' . $row['product_name']. '</option>';
					 	}
					 }

					//  if ($row = $result_product_name->fetch(PDO::FETCH_ASSOC)) {

						
					// 	while($row = $result_product_name->fetch(PDO::FETCH_ASSOC)) {
					// 		echo '<option value="' . $row['product_name']. '">' . $row['product_name']. '</option>';
					// 	}
					// }


				?>
				</select>
			</p>
			<p>Product Model : <input type="text" name="product_desc" /></p>
			<p>Quantity : <input type="text" name="quantity" /></p>
			
			<p>Issued Date (m/d/y) : <input type="text" id="datepicker" name="issued_date"></p>
			<p>Issued Customer : <input type="text" name="issued_customer" /></p>
			<p>Customer Contact : <input type="text" name="customer_contact" /></p>
			<p>Remarks : 
				<select id="remarks" name="remarks">  
				<?php
					 if ($result_status->num_rows > 0) {
						while($row = $result_status->fetch_assoc()) {
							echo '<option value="' . $row['job_status']. '">' . $row['job_status']. '</option>';
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