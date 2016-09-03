<?php

//start session for this user & display
session_start();
echo "Logged in user : " . $_SESSION["logged_in_user"] ."<p><p>";

//include the database connection file
include_once("config.php");

//get all submitted fields
$product_name = $_POST["product_name"];
$serial_no = $_POST["serial_no"];
$product_desc = $_POST["product_desc"];
$quantity = $_POST["quantity"];
$issued_by = $_SESSION["logged_in_user"];
$issued_date = $_POST["issued_date"];//first, get date
$issued_date = date('Y-m-d', strtotime(str_replace('-', '/', $issued_date)));
//$issued_date = date("Y-m-d H:i:s",strtotime(str_replace('/','-',$issued_date))); //then, change date format to MySQL date
$issued_customer = $_POST["issued_customer"];
$customer_contact = $_POST["customer_contact"];
$remarks = $_POST["remarks"];
$user = $_SESSION["logged_in_user"]; //save current logged in user into a variable


//create insert query
$insert_query = "INSERT INTO `tbl_issued` 
			(`product_name`, `serial_no`, `product_desc`, `quantity`, `issued_by`, `issued_date`, `issued_customer`, `customer_contact`, `remarks`, `last_modified_by`)
			VALUES 
			('$product_name', '$serial_no', '$product_desc', '$quantity', '$issued_by', '$issued_date', '$issued_customer', '$customer_contact', '$remarks', '$user')";

//run insert query
$result = mysqli_query($conn, $insert_query);

//point back to function page
if ($result) {
	echo "<p>successfully added to database!";
	//echo '</html></body><p><p><a href="function.php">Back</a><br/><br/></body></html>';
    
	echo "<p>$issued_date";
} else {
	
	echo "<p>something was wrong!!";
	//echo '</html></body><p><p><a href="function.php">Back</a><br/><br/></body></html>';
}

?>


<html>
<head>	
	<title>Issued Items</title>
	<link rel="stylesheet" type="text/css" href="view_stock.css">
</head>

<body>
	
	<fieldset>
		<form action="add_issued_item.php" class="form">	
			<button>Add Next Item</button>
		</form>
		
		<form action="function.php" class="form">	
			<Button>Back</Button>
		</form>
	</fieldset>
	   
	   
</body>
</html>