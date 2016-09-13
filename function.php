<?php
	//start session for this user & display 
	session_start();
	//echo "Logged in user : " . $_SESSION["logged_in_user"] ."<p><p>";
?>

<html>
<head>	
	<title>Function</title>
	<link rel="stylesheet" type="text/css" href="view_stock.css">
</head>

<body>
	<div class="header">
		<img src="logo.png">
		<p><p>Simple Inventory System<p><p>			
	</div>

	<fieldset>
	<form class="form" action="view_received_item.php">
		<button>View All Received Items</button>
	</form>

	<form class="form" action="add_received_item.php">
		<button>Add New Received Item</button>
	</form>

	<form class="form" action="view_issued_item.php">
		<button>View All Issued Items</button>
	</form>

	<form class="form" action="add_issued_item.php">
		<button>Add New Issued Item</button>
	</form>
	
	<form class="form" action="add_new_asset.php">
		<button>Add New Asset</button>
	</form>
	
	<form class="form" action="add_nutanix.php">
		<button>Add New Nutanix</button>
	</form>

	<form class="form" action="logout.php">
		<button>Log out</button>
	</form>
	</fieldset>
</body>
</html>
