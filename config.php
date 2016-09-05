<?php

// use pdo in stead of mysqli 
/* 
$conn = mysqli_connect('localhost', 'root', '', 'myqueueo_db_asset_yie')
		or die("cannot connected");
*/

$dsn = 'mysql:dbname=myqueueo_db_main;host=localhost';
$user='myqueueo_anak';
$password='}Lr+kUQvla{m';

try 
{	
    $conn = new PDO($dsn, $user, $password);
}
catch( PDOException $Exception ) 
{   
	echo "Unable to connect to database. : " + $Exception->getMessage();

	/* add apache error log dumps. On linux, this can be view by running : tail -f /usr/local/apache2/logs/error_log */
    error_log("Unable to connect to database.", 0); 
    exit;
}
	
error_log("Success. Connected to database", 0);
?>