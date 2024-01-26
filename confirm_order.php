<?php

include "config.php"; // Using database connection file here
$id = $_GET['id']; // get id through query string
$sql = "select * from product ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$name_pro = $row["Pro_Name"];
$rate_pro =$row["Pro_price"];
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
  <a class="navbar-brand" href="index.php">HANDYMAN</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
    
      
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          SERVICES
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="architecture.php">Architecture Consulting</a>
          <a class="dropdown-item" href="turkey.php">Turkey Consulting</a>
          <a class="dropdown-item" href="interoir.php">Interoir Desgining</a>
      </li> -->
      <a class="nav-item nav-link" href="consult.php">CONSULTATION</a>
      <a class="nav-item nav-link" href="project.php">PROJECTS</a>
      <a class="nav-item nav-link" href="about.php">ABOUT US</a>
      <a class="nav-item nav-link" href="contact.php">CONTACT US</a>
    </div>
  </div>
</nav>
<br>
<br>
<br>
<div class="row">
  <div class="profile-info col-md-4" style="padding-left:200px;padding-top:0px;margin-top: 0px;">
          <?php
              $sql1 = "select * from product where Pro_id = '$id'";
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
              <label for="exampleFormControlInput1">Product Name: </label>
              <label for="exampleFormControlInput1"><?php echo $name_pro; ?></label><br>
              <label for="exampleFormControlInput1">Product Rate: </label>
              <label for="exampleFormControlInput1">₹<?php echo $rate_pro; ?></label>               
  </div>
  <div class="profile-info col-md-6">
<form style = "padding-left:70px;" action="the_redirect.php" method = "post">
<h2 style = "text-align:center;">Confirm order</h2>
  <div class="form-group">
    <label for="exampleFormControlInput1">Enter Name</label>
    <input type="text" class="form-control" required name="name" id="exampleFormControlInput1" placeholder="Eg: name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" required name="email" id="exampleFormControlInput1" placeholder="Eg: name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Enter Phone number</label>
    <input type="number" class="form-control" required name="ph" id="exampleFormControlInput1" placeholder="Eg: 8435745235">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Enter address</label>
    <textarea class="form-control" required name="address" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
   
    <input type="hidden" class="form-control" name="id" id="exampleFormControlInput1" value = "<?php echo $id; ?>" readonly>
  </div>
  <div class="form-group">
   
   <input type="hidden" class="form-control" name="pname" id="exampleFormControlInput1" value = "<?php echo $name_pro; ?>" readonly>
 </div><div class="form-group">
   
   <input type="hidden" class="form-control" name="prate" id="exampleFormControlInput1" value = "<?php echo $rate_pro; ?>" readonly>
 </div>
  <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" name="ok" class="btn btn-dark btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Order</button>
              
              </div>
</div>
</form>
</body>
</html>
<?php


  if (isset($_POST['ok'])) {
    //$id = $_GET['id']; 
    $name =  $_POST['name'];
    $email = $_POST['email'];
    $ph =  $_POST['ph'];
    $address =  $_POST['address'];
    $pname =   $_POST['pname'];
    $prate =   $_POST['prate'];

   
 
          
        // Get all the submitted data from the form
        $sql = "INSERT INTO `orders` (`name`, `email`, `ph`, `address`,`product_id`,`pro_name`,`pro_rate`) VALUES ('$name', '$email', '$ph', '$address','$id','$pro_name','$pro_rate');";
  
        // Execute query
        $result= mysqli_query($conn, $sql);
          
        // Now let's move the uploaded image into the folder: image
        
      if($result)
{
    //echo "<script>window.location.href='profile.php';</script>";
    mysqli_close($conn); // Close connection
    exit;	
} 
  }
  ?>