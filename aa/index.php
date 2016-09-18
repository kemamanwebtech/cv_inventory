<?php
  //start session for this user & display 
  session_start();
  //echo "Logged in user : " . $_SESSION["logged_in_user"] ."<p><p>";

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
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
    <script src="date_picker.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="add_form.css"> 
    <link rel="stylesheet" type="text/css" href="index.css">

</head>
<body>

<div class="header">
    <img src="logo.png">
    <p><p>Inventory System<p><p>      
</div>

<ul class="tab">
  <li><a href="#" class="tablinks" onclick="openCity(event, 'Add Received Item')">Add Received Item</a></li>
  <li><a href="#" class="tablinks" onclick="openCity(event, 'Add Issued Item')">Add Issued Item</a></li>
  <li><a href="#" class="tablinks" onclick="openCity(event, 'Add New Asset')">Add New Asset</a></li>
</ul>

<div id="Add Received Item" class="tabcontent">
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
</div>

<div id="Add Issued Item" class="tabcontent">
  <form class="add_form" method="post" action="save_issued_item.php">
  <div class="box_container">
          <p>Serial No. : <input type="text" name="serial_no" /></p>
      <p>Product Name : 
        <select id="product_name" name="product_name">  
        <?php
           // if ($result_product_name->num_rows > 0) {
           //   while($row = $result_product_name->fetch_assoc()) {
            // echo '<option value="' . $row['product_name']. '">' . $row['product_name']. '</option>';
           //   }
           // }

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
      
      <p>Issued Date (m/d/y) : <input type="text" id="datepicker" name="issued_date"></p>
      <p>Issued Customer : <input type="text" name="issued_customer" /></p>
      <p>Customer Contact : <input type="text" name="customer_contact" /></p>
      <p>Remarks : 
        <select id="remarks" name="remarks">  
        <?php
          //  if ($result_status->num_rows > 0) {
          //  while($row = $result_status->fetch_assoc()) {
              // echo '<option value="' . $row['job_status']. '">' . $row['job_status']. '</option>';
          //  }
          // } 

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
</div>

<div id="Add New Asset" class="tabcontent">
  <form class="add_form" method="post" action="save_new_asset.php">
  <div class="box_container">
      <p>Product Name : 
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
      <p>Serial No. : <input type="text" name="product_serial" /></p>
      <p>Model : <input type="text" name="product_model" /></p>
      <!--<p>Unit : <input type="text" name="unit" /></p>-->
      <p>Quantity : <input type="text" name="product_qty" /></p>
        <p>Registered_by : 
        <select id="name" name="name">  
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
      <p>Date Registered (m/d/y) : <input type="text" id="datepicker" name="date"></p>
      <p>Location : <input type="text" name="product_location" /></p>
      <p>Owner : <input type="text" name="owner" /></p>
      <!--<p>Issued Customer : <input type="text" name="issued_customer" /></p>
      <p>Customer Contact : <input type="text" name="customer_contact" /></p>
      <p>Remarks : <input type="text" name="remarks" /></p>
      <p>Work Order : <input type="text" name="work_order" /></p>
      <p>Parameter 1 : <input type="text" name="param1" /></p>
      <p>Parameter 2 : <input type="text" name="param2" /></p>
      <p>Parameter 3 : <input type="text" name="param3" /></p>
      <p>Parameter 4 : <input type="text" name="param4" /></p>
      <p>Parameter 5 : <input type="text" name="param5" /></p>
      <p>Parameter 6 : <input type="text" name="param6" /></p>
      <p>Parameter 7 : <input type="text" name="param7" /></p>-->
      <button>Add</button>
      <p><p>
      
      

      
      
  </div>
</form>
</div>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
     
</body>
</html> 
