<?php
include "config.php";

if (isset($_POST['ok'])) {
    //$id = $_GET['id']; 
    $name =  $_POST['name'];
    $email = $_POST['email'];
    $ph =  $_POST['ph'];
    $address =  $_POST['address'];
    $id = $_POST['id'];

   
 
          
        // Get all the submitted data from the form
        $sql = "INSERT INTO `orders` (`name`, `email`, `ph`, `address`,`product_id`) VALUES ('$name', '$email', '$ph', '$address','$id');";
  
        // Execute query
        $result= mysqli_query($conn, $sql);
          
        // Now let's move the uploaded image into the folder: image
        
      if($result)
{
    echo "<script>window.location.href='project.php';</script>";
    mysqli_close($conn); // Close connection
    exit;	

} 
  }

  ?>