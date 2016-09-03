<?php

// mysql_connect("database-host", "username", "password")
$conn = mysqli_connect('localhost', 'root', '', 'myqueueo_db_asset_yie')
			or die("cannot connected");

// mysql_select_db("database-name", "connection-link-identifier")
@mysql_select_db("test",$conn);
	
?>
