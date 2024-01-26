<?php

include "config.php"; // Using database connection file here

$id = $_GET['id'];


$status =  $_POST['status'];

    //$id = $_GET['id']; 
   echo $status;


   

          
        // Get all the submitted data from the form
       $sql = "UPDATE  `orders` SET `status` = '$status'  WHERE `order_id` = '$id'";
  
        // Execute query
        $result= mysqli_query($conn, $sql);
          
        // Now let's move the uploaded image into the folder: image
        if($result)
        {
            echo "<script>window.location.href='admin_order.php';</script>";
            mysqli_close($conn); // Close connection
            exit;	
        } 

  

?>