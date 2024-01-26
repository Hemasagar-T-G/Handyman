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
  <a class="navbar-brand" href="admin_home.php">RAJ CONSTRUCTIONS</a>
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
        
        $id = $_GET['id'];
        $sql = "select * from product where Pro_id = '$id'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        

        

      ?>
  <h3>UPDATE PRODUCT DETAILS</h3>
 
<div class="row">
  <div class="profile-nav col-md-3">
      <div class="panel">
          <div class="user-heading round">
          <?php
              $sql1 = "select * from product where Pro_id = '$id'";
              $result = mysqli_query($conn, $sql1);
              if (mysqli_num_rows($result) > 0) {
                while($row1 = mysqli_fetch_assoc($result)) {
                  $img ="image/".$row1["Pro_img"];
         
                  
                 
                }
              }
              ?>
              <div class="img__wrap">
              <a  href="edit_img.php?id=<?php echo $row["Pro_id"]; ?>">
                <br><br>
                  <img id="dp" style ='width:200px;height:200px;' src="<?php echo $img; ?>" alt="">   
                  <p id="pdp" class="img__description">Change Photo
                    
                  </p>
              </a>
              </div>

          </div>


      </div>
  </div>
  <div class="profile-info col-md-9">
  <form action="update.php?id=<?php echo $id?>" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label>NAME</label>
    <input name="name1" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo  $row["Pro_Name"]; ?>">

  </div>
  <div class="form-group">
    <label>DESCRIPTION</label>
    <input name="desc" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo  $row["Pro_desc"]; ?>">

  </div>
  <div class="form-group">
    <label>RATE</label>
    <input name="rate" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo  $row["Pro_price"]; ?>">

  </div>
  <label>SELECT A CATEGORY</label>
  <select class="form-control" aria-label=".form-select-lg example" name ="category" value="<?php echo  $row["category"]; ?>">
  <option selected value="<?php echo  $row["category"]; ?>"><?php echo  $row["category"]; ?></option>
  <option value="Architecture Consulting">Architecture Consulting</option>
  <!--<option value="Turkey Consulting">Turkey Consulting</option>-->
  <option value="Interoir Desgining">Interoir Desgining</option>
</select>
  <!-- <div class="form-group"><br>
    <label>Upload photo</label>
    <div class="form-group">
                <input class="form-control" type="file" name="uploadfile" value="<?php echo  $row["Pro_img"]; ?>" />
            </div></div> -->
 <br>
            <button type="submit" class="btn btn-primary mb-2" name = "upload">UPDATE</button>
  </div>
  </div>
  </div>
  </form>
</body>
</html>
<?php

  $msg = "";
  $img="";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
    
    $name =  $_POST['name1'];
    $category = $_POST['category'];
    $desc =  $_POST['desc'];
    $rate =  $_POST['rate'];
    $id = $_GET['id'];
   
    // $filename = $_FILES["uploadfile"]["name"];
    // $tempname = $_FILES["uploadfile"]["tmp_name"];    
    //     $folder = "image/".$filename;
          
        // Get all the submitted data from the form
        $sql1 = "UPDATE  `product` SET `Pro_Name` = '$name', `Pro_desc` = '$desc', `Pro_price` = '$rate' , `category`='$category' WHERE `Pro_id` = '$id'";
        
        // Execute query
        $result= mysqli_query($conn, $sql1);
          
        // Now let's move the uploaded image into the folder: image
    //     if (move_uploaded_file($tempname, $folder))  {
    //         $msg = "Image uploaded successfully";
    //     }else{
    //         $msg = "Failed to upload image";
    //   }
      if($result)
{
    echo "<script>window.location.href='mod_prod.php';</script>";
    mysqli_close($conn); // Close connection
    exit;	
} 
  }
  ?>