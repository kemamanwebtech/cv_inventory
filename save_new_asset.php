<?php

//start session for this user & display
session_start();
echo "Logged in user : " . $_SESSION["logged_in_user"] ."<p><p>";

//include the database connection file
include_once("config.php");

//get all submitted fields
$product_name = $_POST["product_name"];
$product_serial = $_POST["product_serial"];
$product_model = $_POST["product_model"];
//$unit = $_POST["unit"];
$product_qty = $_POST["product_qty"];
$date = $_POST["date"];//first, get date
$date = date('Y-m-d', strtotime(str_replace('-', '/', $date)));
//$date= date("Y-m-d H:i:s",strtotime(str_replace('/','-',$date))); //then, change date format to MySQL date
//echo $date;
$product_location = $_POST["product_location"];
$owner = $_POST["owner"];
//$user = $_SESSION["logged_in_user"]; //save current logged in user into a variable

//$issued_customer = $_POST["issued_customer"];
//$customer_contact = $_POST["customer_contact"];
//$registered_by = $_POST["registered_by"];
//$remarks = $_POST["remarks"];
//$param1 = $_POST["param1"];
//$param2 = $_POST["param2"];
//$param3 = $_POST["param3"];
//$param4 = $_POST["param4"];
//$param5 = $_POST["param5"];
//$param6 = $_POST["param6"];
//$param7 = $_POST["param7"];



//create insert query
//$insert_query = "INSERT INTO `tbl_asset` 
//			(`product_name`, `product_serial`, `product_model`, `product_qty`, `issued_by`, `date`, `product_location`, `owner`, `last_modified_by`) 
//			VALUES ('$product_name', '$product_serial', '$product_model', '$product_qty', '$issued_by', '$date', '$product_location','$owner', '$user')";

$insert_query = "INSERT INTO `tbl_asset` 
	(`product_serial`,`product_name`,`product_model`,`date`,`product_location`,`product_qty`,`owner`)
	VALUES ('$product_serial','$product_name','$product_model','$date','$product_location','$product_qty','$owner')";


//run insert query
$result = mysqli_query($conn, $insert_query);

//point back to function page
if ($result) {
	echo "<p>successfully added to database!";
	//echo '</html></body><p><p><a href="function.php">Back</a><br/><br/></body></html>';
    echo "<p>$date";
} else {
	echo "<p>something was wrong!!";
	//echo '</html></body><p><p><a href="function.php">Back</a><br/><br/></body></html>';
}

?>

<html>
<head>	
	<title>New Assets</title>
	<link rel="stylesheet" type="text/css" href="view_stock.css">
</head>

<body>
	
	<fieldset>
		<form action="add_new_asset.php" class="form">	
			<button>Add Next Item</button>
		</form>
		
		<form action="function.php" class="form">	
			<Button>Back</Button>
		</form>
	</fieldset>
	   
	   
</body>
</html>