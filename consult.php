<?php
require 'config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<nav" class="navbar navbar-expand-lg navbar-light bg-light">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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




    </main>
    <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="img/kitchen.jpg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="600">
    </div>

    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center">Schedule Your Consultation</h1><br>
      <h5 class="w3-center">Unlock the Potential of Your Project</h5>
      <p class="w3-large">Welcome to HANDYMAN's Interior Design Consultation Page. Here, your vision takes its initial strides toward reality. Our committed team of experts is thrilled to join forces with you and breathe life into your interior design dreams.</p>
        
      <p class="w3-large w3-text-grey w3-hide-medium">Whether you're envisioning a breathtaking home, a functional commercial space, or a visionary renovation, our consultation process is designed to unlock the potential of your project. We understand that each project is unique, and we're here to listen, guide, and create a tailored plan that aligns with your aspirations.</p>


    </div>
  </div>
  
  <hr>
  
  <!-- Menu Section -->
  <div class="w3-row w3-padding-64" id="menu">
    <div class="w3-col l6 w3-padding-large">
      <h1 class="w3-center">Why Consult with Us?</h1><br>
      <h4>Years of Industry Experience</h4>
      <p>Embark on a design journey with HANDYMAN, where our seasoned expertise in interior design transforms visions into reality, ensuring a collaborative and exceptional outcome.</p>

    
      <h4>Personalized Solutions</h4>
      <p>No two construction projects are the same, and we understand that your vision is unique. </p>

    
    
      <h4>Expert Guidance</h4>
      <p>Embarking on a construction project can be a complex journey, but you don't have to navigate it alone.</p>
    
   
    
      <h4>Innovative Ideas</h4>
      <p>At HANDYMAN, we believe in pushing the boundaries of creativity to bring you innovative solutions that set your project apart. </p>

    
    
      <h4>Transparent Communication</h4>
      <p>Communication is at the heart of every successful project, and at HANDYMAN, we prioritize clear and transparent communication throughout the entire construction journey.</p>

   
    </div>
    
    <div class="w3-col l6 w3-padding-large">
      <img src="img/live.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu" width="600" height="600">
    </div>
  </div>
<hr>



  <br><br>

  
  <form action="consult.php" method="post" >
  <div class="row" style="padding-left:100px">
  
  <div class="col-6">
           <center><h2>Request Your Consultation</h2></center> 
            <div class="form-group">
    <label>NAME</label>
    <input name="name1" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">

  </div>
  <div class="form-group">
    <label>EMAIL</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">

  </div>
  <div class="form-group">
    <label>Phone Number</label>
    <input name="ph" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Mobile Number">

  </div>
  <label>SELECT A CATEGORY</label>
  <select class="form-control" aria-label=".form-select-lg example" name ="category">
  
  <option value="Architecture Consulting">Architecture Consulting</option>
  <option value="Turkey Consulting">Turkey Consulting</option>
  <option value="Interoir Desgining">Interoir Desgining</option>
</select>
<br>
  <button type="submit" class="btn btn-dark mb-2" name = "upload">RESERVE</button>
  </div>
  <div class="w3-col m6 w3-padding-large" style="padding-left:100px">
  <section class="how-to-consult">
  <h1 class="w3-center">How to Schedule a Consultation</h1><br>
      <h5 class="w3-center">Getting started on your construction journey is easy:</h5>
      <p class="w3-large">1. Fill out the consultation request form below.</p>
      <p class="w3-large">2. We'll reach out to you within 24 hours to set up a convenient time for a consultation.</p>
      <p class="w3-large">3. During the consultation, we'll discuss your project's needs, budget, timeline, and any unique requirements.</p>
      <p class="w3-large">4. Following the consultation, we'll provide you with a comprehensive proposal tailored to your project.</p>
        </section>
        </div>
  </div>
  </form>
</body>
</html>

<?php
if (isset($_POST['upload'])) {
    
    $name =  $_POST['name1'];
    $category = $_POST['category'];
    $ph =  $_POST['ph'];
    $email =  $_POST['email'];
    $status = 'pending';

   
   
          
        // Get all the submitted data from the form
        $sql = "INSERT INTO `reservation` (`name`, `email`, `phone`, `category`,`status`) VALUES ('$name', '$email', '$ph', '$category','$status');";
  
        // Execute query
        $result= mysqli_query($conn, $sql);
          
      
      if($result)
{
    //echo "<script>window.location.href='profile.php';</script>";
    mysqli_close($conn); // Close connection
    exit;	
} 
  }
  ?>