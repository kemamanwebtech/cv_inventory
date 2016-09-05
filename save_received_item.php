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
$received_from = $_POST["received_from"];
$received_date = $_POST["received_date"];//first, get date
$received_date = date('Y-m-d', strtotime(str_replace('-', '/', $received_date)));
//$received_date = date("Y-m-d H:i:s",strtotime(str_replace('/','-',$received_date))); //then, change date format to MySQL date
$remarks = $_POST["remarks"];
$item_owner = $_POST["item_owner"];
$user = $_SESSION["logged_in_user"]; //save current logged in user into a variable


//create insert query
$insert_query = "INSERT INTO `tbl_received` 
	(`product_name`, `serial_no`, `product_desc`, `quantity`, `received_from`, `received_date`, `remarks`, `item_owner`, `last_modified_by`)
	VALUES ('$product_name', '$serial_no', '$product_desc', '$quantity', '$received_from', '$received_date', '$remarks', '$item_owner', '$user')";


try {
     $conn->query($insert_query);
     echo "<p>successfully added to database!";
	//echo '</html></body><p><p><a href="add_received_item.php">Add Next Item</a><br/><br/></body></html>';
	//echo '</html></body><p><p><a href="function.php">Back</a><br/><br/></body></html>';
    echo "<p>$received_date";

} catch (PDOException $e) {
    if ($e->getCode() == 1062) {
        // Take some action if there is a key constraint violation, i.e. duplicate name
    } else {
        throw $e;
    }
    echo "<p>something was wrong!!";
}

?>




<html>
<head>	
	<title>Received Items</title>
	<link rel="stylesheet" type="text/css" href="view_stock.css">
</head>

<body>
	
	<fieldset>
		<form action="add_received_item.php" class="form">	
			<button>Add Next Item</button>
		</form>
		
		<form action="function.php" class="form">	
			<Button>Back</Button>
		</form>
	</fieldset>
	   
	   
</body>
</html>