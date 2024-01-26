
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

<form action="contact.php" method="post" enctype="multipart/form-data">
  <div class="row" style="padding-left:400px;">
  
  <div class="col-7">
  <br><br>
  <center><h3>GET IN TOUCH</h3></center>
  <div class="form-group">
    <label>ENTER YOUR NAME</label>
    <input name="name1" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">

  </div>
  <div class="form-group">
    <label>ENTER YOUR EMAIL</label>
    <input name="mail" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter YOUR EMAIL">

  </div>
  
  <div class="form-group">
    <label>WHAT YOU HAVE IN MIND?</label>
   <textarea name="message" class="form-control" id="" cols="30" rows="10"></textarea>
  </div>

  <button type="submit" class="btn btn-primary mb-2" name = "ok">SUBMIT</button>
  </div>
  </div>
  </form>
</body>
</html>
<?php
 if (isset($_POST['ok'])) {
    
  $name =  $_POST['name1'];
  $mail = $_POST['mail'];
  $msg =  $_POST['message'];



        
      // Get all the submitted data from the form
      $sql = "INSERT INTO `contact` (`name`, `email`, `message`) VALUES ('$name', '$mail', '$msg');";

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
