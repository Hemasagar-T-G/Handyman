<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<nav" class="navbar navbar-expand-lg navbar-light bg-light">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Home</title>
</head>
<body>
<nav  class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="admin_home.php">HANDYMAN</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
    
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          MANAGE PRODUCTS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="add_prod.php">ADD NEW PRODUCTS</a>
          <a class="dropdown-item" href="mod_prod.php">MODIFY PRODUCTS</a>
         
      </li>
      <a class="nav-item nav-link" href="reserve.php">RESERVATIONS</a>
      <a class="nav-item nav-link" href="price.php">EDIT RAW MATERIAL PRICE</a>
      <a class="nav-item nav-link" href="admin_order.php">ORDERS</a>
      <a class="nav-item nav-link" href="feedback.php">FEEDBACKS</a>
      <a class="nav-item nav-link" href="Logout.php">LOGOUT</a>
    </div>
  </div>
</nav>
<br>
<br>
<h2 style = "text-align:center;">ORDERS</h2>
<br>
<table class="table table-striped">
    <tr>
        <th> Order Id </th>
        <th> Customer Name </th>
        <th> Customer Email </th>
        <th> Product Id </th>
        <th> Product Name </th>
        <th> Product Rate </th>
        <th> Customer address </th>
        <th> Project Status </th>
        <th> Edit Inventory </th>
    </tr>

   


<?php
require 'config.php';





//  display 
$sql = "SELECT * FROM Orders INNER JOIN product ON Orders.product_id=product.Pro_id;";  
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
 //output data of each row 
while($row1 = mysqli_fetch_assoc($result)) {
//$sql1 = "select * from orders";
//$result1 = mysqli_query($conn, $sql1);
//if (mysqli_num_rows($result1) > 0) {
  // output data of each row 
//while($row1 = mysqli_fetch_assoc($result1) > 0) {
    ?>
 
  <tr>
  <td><?php echo  $row1["order_id"]; ?></td>
    <td><?php echo  $row1["name"]; ?></td>
    <td><?php echo $row1["email"]; ?></td>
    <td><?php echo $row1["product_id"]; ?></td>
    <td><?php echo $row1["Pro_Name"]; ?></td>
    <td>₹:<?php echo $row1["Pro_price"]; ?></td>
    <td><?php echo $row1["address"]; ?></td>
    <td><form action="status.php?id=<?php echo  $row1["order_id"]; ?>" method="post">
<select name='status' onchange='this.form.submit()'>
<option value="STARTED"><?php echo  $row1["status"]; ?></option>
<option value="STARTED">STARTED</option>
<option value="20%">20%</option>
<option value="40%">40%</option>
<option value="60%">60%</option>
<option value="80%">80%</option>
<option value="COMPLETED">COMPLETED</option>
<?php  $name =  $_POST['dropdown']; ?>
</select>
    <noscript><input type="submit" value="ok"/></noscript>
</form></td>
    <td><a class = "edits" href="raw_details.php?id=<?php echo  $row1["order_id"]; ?>"><i class="fa fa-pencil" style="font-size:24px;color:DodgerBlue;padding-right: 10px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg></i></a>
  </td>
  </tr>	
 
<?php
  }
} 
else {
  echo "0 results";
}

mysqli_close($conn);
?>
</body>
</html>