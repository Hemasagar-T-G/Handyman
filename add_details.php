<?php
require 'config.php';
if(isset($_POST['upload'])){
    $id =  $_POST['name1'];
    $cem =  $_POST['cem'];
  $bri =  $_POST['bri'];
  $san =  $_POST['san'];
  $rod =  $_POST['rod'];
// insert
  $sql1 = "select raw_price from raw_mat_price where raw_mat = 'Cement'";
  $result1 = mysqli_query($conn, $sql1);
  $row1 = mysqli_fetch_assoc($result1);
  $cem_price =  $row1['raw_price'];
$total_cement = $cem * $row1['raw_price'];


    $sql2 = "select raw_price from raw_mat_price where raw_mat = 'Sand'";
    $result2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_assoc($result2);
 //   echo $row2['raw_price'];
 $total_sand = $san * $row2['raw_price'];

    $sql3 = "select raw_price from raw_mat_price where raw_mat = 'Bricks'";
    $result3 = mysqli_query($conn, $sql3);
    $row3 = mysqli_fetch_assoc($result3);
  //  echo $row3['raw_price'];
  $total_bricks = $bri * $row3['raw_price'];

    $sql4 = "select raw_price from raw_mat_price where raw_mat = 'Steel rodes'";
    $result4 = mysqli_query($conn, $sql4);
    $row4 = mysqli_fetch_assoc($result4);
  //  echo $row4['raw_price'];
  $total_rodes = $rod * $row4['raw_price'];



  $grand = $total_bricks+$total_cement+$total_rodes+$total_sand;
  $date = date("Y-m-d");


  $sqlultra = "INSERT INTO `quantity`(`Cement`, `Bricks`, `Steel_Rods`, `Sand`, `grand_total`, `order_id`, 
  `tot_cement`, `tot_sand`, `tot_bricks`, `tot_rods`,`date`) VALUES ('$cem','$bri','$rod',
  '$san','$grand','$id','$total_cement','$total_sand','$total_bricks','$total_rodes','$date')";
   $result = mysqli_query($conn, $sqlultra);

   echo "<script>window.location.href='admin_order.php';</script>";
} 


?>