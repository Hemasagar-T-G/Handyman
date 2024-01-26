<?php
include "config.php"; // Using database connection file here

$id = $_GET['id'];

echo $id;
        // Get all the submitted data from the form
        $sql = "UPDATE  `reservation` SET `status` = 'Declined'  WHERE `id` = '$id'";
  
        // Execute query
        $result= mysqli_query($conn, $sql);
          
        // Now let's move the uploaded image into the folder: image
        if($result)
        {
            echo "<script>window.location.href='reserve.php';</script>";
            mysqli_close($conn); // Close connection
            exit;	
        } 
?>
