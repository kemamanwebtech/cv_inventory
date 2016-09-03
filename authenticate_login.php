<?php

//include the database connection file
include_once("config.php");

//get submitted login
$username = $_POST["username"];
$password = $_POST["password"];

//TO DO : protect from SQL Injection
$search_query = "SELECT * FROM tbl_user where username='" . strval($username) . "' and password='" . strval($password). "'";

//run search query
$result = mysqli_query($conn, $search_query);

//if login is valid, go to next page
if ($result->num_rows > 0) {

	//start session for this user
	session_start();
	$_SESSION["logged_in_user"] = $username;

	header('Location: function.php'); 
} else {
	//if login invalid, throw an alert box
	echo '<script type="text/javascript">';
	echo 'alert("Invalid Login. Please try again.")';
	echo '</script>';
	
	//redirect to main page
	echo '<script type="text/javascript">';
    echo 'window.location = "index.html"';
    echo '</script>';
}
?>