<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
require 'config.php';
session_start();
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php echo '<link rel="stylesheet" href="css/dp.css">'; ?> 
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
<?php
  $msg = "";
  $img="";
  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
        $folder = "image/".$filename;
          
    
  
        // Get all the submitted data from the form
        $sql = "UPDATE product SET Pro_img ='$filename' where Pro_id = '$id'";
  
        // Execute query
       $result= mysqli_query($conn, $sql);
          
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
      if($result)
{
    echo "<script>window.location.href='mod_prod.php';</script>";
    mysqli_close($conn); // Close connection
    exit;	
} 
  }
 
  
  ?>
  <br>
  <h1 style ="text-align:center;" class="damnm">Please select a photo </h1>
<div id="content">
  
        <form method="POST" 
              action="" 
              enctype="multipart/form-data">
            <input type="file" 
                   name="uploadfile" 
                   value="" />
  
            <div>
                <button type="submit"
                        name="upload">
                  UPLOAD
                </button>
            </div>
        </form>
    </div>
  
</body>
</html>