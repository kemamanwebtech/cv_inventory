<?php
//include the database connection file
include_once("config.php");

//start session for this user & display 
session_start();

//fetching data in descending order (lastest entry first). Use pdo instead of mysqli
$query_tbl_received="SELECT * FROM tbl_received ORDER BY received_date DESC lIMIT 50";
$result = $conn->query($query_tbl_received);

?>

<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
  <script src="date_picker.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="add_form.css"> 
</head>
<body>

<!-- <div class="container">
  <div class="jumbotron">
    <img src="logo.png">
    <p><p>Inventory System<p><p> 
  </div>
</div> -->

<div class="header">
    <img src="logo.png">
    <p><p>Inventory System<p><p>      
</div>

<div class="container">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#">Home</a></li>
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Received Items <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="view_received_item.php">View</a></li>
        <li><a href="add_received_item.php">Add</a></li>
      </ul>
    </li>
    <li><a href="#">Menu 2</a></li>
    <li><a href="#">Menu 3</a></li>
  </ul>
</div>

</body>
</html>
