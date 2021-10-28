<?php
session_start();
$user_id = $_SESSION["id"] ;
$date = date('Y-m-d');
include('connection.php');

 //Category delete  //

    $c_id=$_GET['id'];
    $q="DELETE FROM `booking` WHERE `id`=$c_id";    
    $result=mysqli_query($conn,$q);



   $q2="INSERT INTO `notifications`(`id`, `user_id`, `text`, `date`) VALUES ('','$user_id','Your Ticket Has Been Cancelled, You'll Recieve Your Payment Back Soon.' ','$date')";
   $run2=mysqli_query($conn,$q2);
     header("location:booking_history.php");
   
?>