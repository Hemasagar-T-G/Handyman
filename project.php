<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
    <title>Project</title>
    <style>

div.card {
  width: 250px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
 
}
    </style>
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
<h2 style = "text-align:center;">PROJECTS </h2>
<br>



 
 <div class="row" style="padding-left:60px;">

  




    <?php
    $sql = "SELECT * FROM `product`";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    ?>
 
  
      <div class="card" style="width: 23rem; height: 27rem; margin:27px; " >
  <img src="image/<?php echo $row["Pro_img"] ?>" class="card-img-top" alt="..."width="300" height="250" style="padding:5px; " >
  <div class="card-body">
    <h5 class="card-title"><b><i><?php echo  $row["Pro_Name"]; ?></i></b></h5>
    <p class="card-text"><?php echo  $row["Pro_desc"]; ?></p>
    <p style="font-size:25px;" class="card-text"><b><span>&#8377;</span><?php echo  $row["Pro_price"]; ?></b><a style="float: right;" href="confirm_order.php?id=<?php echo $row["Pro_id"]; ?>" class="btn btn-danger">BUY</a></p>
    
</div>
    </div>
   
  	
<?php
  }
} else {
  echo "0 results";
}
?>

</div> 
</body>
</html>