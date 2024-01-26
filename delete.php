<?php

include "config.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string
$sql = "DELETE FROM `product` WHERE `Pro_id` = '$id'";
$result = mysqli_query($conn, $sql);

if($result)
{
    echo "<script>window.location.href='mod_prod.php';</script>";
    mysqli_close($conn); // Close connection
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
    echo $id;
}
?>