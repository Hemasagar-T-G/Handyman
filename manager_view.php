
<?php

include "config.php"; // Using database connection file here
$id  = $_GET['id']; // get id through query string
$pro_id = $_GET['pro_id']; 
$cus_name = $_GET['cus_name']; 
$sql = "select * from product ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$name_pro = $row["Pro_Name"];
$rate_pro =$row["Pro_price"];
$desc =$row["Pro_desc"];


$sql3 = "select * from `orders` where `order_id` = '$id' ";
$result3 = mysqli_query($conn, $sql3);
$row3 = mysqli_fetch_assoc($result3);
?>
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
       <style>
.tableFixHead          { overflow: auto; height: 100px; }
.tableFixHead thead th { position: sticky; top: 0; z-index: 1; }
      table {
    width: 716px; /* 140px * 5 column + 16px scrollbar width */
    border-spacing: 0;
}

tbody, thead tr { display: block; }

tbody {
    height: 300px;
    overflow-y: auto;
    overflow-x: hidden;
}

tbody td, thead th {
    width: 140px;
}

thead th:last-child {
    width: 156px; /* 140px + 16px scrollbar width */
}
   </style>
</head>
<body>
<nav  class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="manage_home.php">HANDYMAN</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
 
      <a class="nav-item nav-link" href="man_reserve.php">RESERVATIONS</a>
     
      <a class="nav-item nav-link" href="manager.php">ORDERS</a>
      <a class="nav-item nav-link" href="man_feedback.php">FEEDBACKS</a>
      <a class="nav-item nav-link" href="Logout.php">LOGOUT</a>
    </div>
  </div>
</nav>
<br>


<div class="row">
  <div class="col-md-4" style="padding-left:100px;padding-top:0px;margin-top: 0px;">
          <?php
              $sql1 = "select * from product where Pro_id = '$pro_id'";
              $result = mysqli_query($conn, $sql1);
              if (mysqli_num_rows($result) > 0) {
                while($row1 = mysqli_fetch_assoc($result)) {
                  $img ="image/".$row1["Pro_img"];             
                 
                }
              }
          ?>
              <a  href="edit_img.php?id=<?php echo $row["Pro_id"]; ?>">
                <br><br>
                  <img id="dp" style ='width:300px;height:300px;' src="<?php echo $img; ?>" alt="">   
              </a>
              <br><br>
             <h4> <label for="exampleFormControlInput1">PROJECT STATUS: </label>
            <b> <label for="exampleFormControlInput1"><?php echo  $row3["status"]; ?></label><br></b></h4>
              <label for="exampleFormControlInput1">Project Name: </label>
             <b> <label for="exampleFormControlInput1"><?php echo $name_pro; ?></label><br></b>
              <label for="exampleFormControlInput1">Customer Name: </label>
            <b> <label for="exampleFormControlInput1"><?php echo $cus_name; ?></label><br></b>
              
            <label for="exampleFormControlInput1">Project Description: </label>
            <b> <label for="exampleFormControlInput1"><?php echo $desc; ?></label><br></b>
  
              
               
  </div>
  <div class="col-md-8">
    <center>
    <h2>PROJECT SUMMARY</h2>
    <hr>
    </center>
   
    <table class="table table-striped">
    <tr>
        <th>Date</th>
        <th>Cement</th>
        <th>Sand</th>
        <th>Brick</th>
        <th>Rods</th>
        <th>Grand Total</th>
    </tr>

<?php
require 'config.php';

$sql = "SELECT * FROM quantity where order_id = $id";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    //output data of each row 
   while($row1 = mysqli_fetch_assoc($result)) {



?>
 

    <tr>
    <td><?php echo  $row1["date"]; ?></td>
    <td><?php echo  "₹", $row1["tot_cement"],"  ( ",$row1["Cement"]," Qty) " ;?> </td>
    <td><?php echo  "₹", $row1["tot_sand"],"  ( ", $row1["Sand"]," Qty) " ; ?> </td>
    <td><?php echo  "₹", $row1["tot_bricks"],"  ( ",$row1["Bricks"]," Qty) " ; ?> </td>
    <td><?php echo  "₹", $row1["tot_rods"],"  ( ",$row1["Steel_Rods"]," Qty) " ; ?> </td>
    <td><?php echo  "₹", $row1["grand_total"]; ?></td>
    </tr>


   <?php
   }}
   ?>
   </table>
   <hr>
   <?php
    $sql1 =    "SELECT SUM(grand_total) FROM `quantity` WHERE order_id = $id";
    $result1 = mysqli_query($conn, $sql1);
    $row1 = mysqli_fetch_assoc($result1);
    
    ?> 
                <label for="exampleFormControlInput1">Project Budget: </label>
             <b> <label for="exampleFormControlInput1">₹<?php echo $rate_pro; ?></label>    <br></b>
 <?php  echo  "Total Spent: ₹"; ?> <b><?php echo $row1['SUM(grand_total)' ];?></b>
 <hr>
 <?php  $profit= $rate_pro - $row1['SUM(grand_total)' ];
 $date = date("Y-m-d");
          echo  "Revenue As Of ",$date," : ₹"?><b> <?php  echo $profit;?></b>
</div>
</div>
<!-- <center>

<a href="downloadpdf.php?file=gfgpdf">Download PDF Now</a>
    </center> -->
</body>
</html>