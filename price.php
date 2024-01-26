<?php

include "config.php"; // Using database connection file here
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
<br><br>


  <div class="row" style="padding-left:250px;">
  
  <div class="col-10">
  <?php
        
        $sql1 = "select raw_price from raw_mat_price where raw_mat = 'Cement'";
  $result1 = mysqli_query($conn, $sql1);
  $row1 = mysqli_fetch_assoc($result1);
  $cem_price =  $row1['raw_price'];



    $sql2 = "select raw_price from raw_mat_price where raw_mat = 'Sand'";
    $result2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_assoc($result2);
 //   echo $row2['raw_price'];


    $sql3 = "select raw_price from raw_mat_price where raw_mat = 'Bricks'";
    $result3 = mysqli_query($conn, $sql3);
    $row3 = mysqli_fetch_assoc($result3);
  //  echo $row3['raw_price'];
 

    $sql4 = "select raw_price from raw_mat_price where raw_mat = 'Steel rodes'";
    $result4 = mysqli_query($conn, $sql4);
    $row4 = mysqli_fetch_assoc($result4);
  //  echo $row4['raw_price'];

        

        

      ?>
  <h3>UPDATE RAW MATERIAL PRICE</h3>
 

  <form action="price.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label>CEMENT</label>
    <input name="cem" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo  $row1['raw_price'] ?>">

  </div>
  <div class="form-group">
    <label>BRICK</label>
    <input name="bri" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo  $row3['raw_price'] ?>">

  </div>
  <div class="form-group">
    <label>SAND</label>
    <input name="san" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo  $row2['raw_price'] ?>">

  </div>
  <div class="form-group">
    <label>IRON RODS</label>
    <input name="rod" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo  $row4['raw_price'] ?>">

  </div>
 
 <br>
            <button type="submit" class="btn btn-primary mb-2" name = "upload">UPDATE</button>
  </div>
  </div>
  </div>
  </form>
</body>
</html>
<?php



  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
    
    $cem =  $_POST['cem'];
    $brick = $_POST['bri'];
    $sand =  $_POST['san'];
    $rode =  $_POST['rod'];
  
   

          
        // Get all the submitted data from the form
        $sql1 = "UPDATE  `raw_mat_price` SET `raw_price` = '$cem' where raw_mat = 'Cement'";
        
        // Execute query
        $result= mysqli_query($conn, $sql1);

        $sql2 = "UPDATE  `raw_mat_price` SET `raw_price` = '$brick' where raw_mat = 'Bricks'";
        
        // Execute query
        $result2= mysqli_query($conn, $sql2);

        $sql3 = "UPDATE  `raw_mat_price` SET `raw_price` = '$sand' where raw_mat = 'Sand'";
        
        // Execute query
        $result3= mysqli_query($conn, $sql3);

        $sql4 = "UPDATE  `raw_mat_price` SET `raw_price` = '$rode' where raw_mat = 'Steel rodes'";
        
        // Execute query
        $result4= mysqli_query($conn, $sql4);
 
      if($result)
{
    echo "<script>window.location.href='price.php';</script>";
    echo "hiiiii";
    mysqli_close($conn); // Close connection
    exit;	
} 
  }
  ?>