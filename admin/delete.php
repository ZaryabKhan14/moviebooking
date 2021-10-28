<?php

include('connection.php');


// message//
 if (isset($_POST['msg_id'])) {
 $id= $_POST['msg_id'];
 $query = "DELETE FROM `contact` WHERE `id` = $id";
 $run= mysqli_query($conn,$query);

 if($run){
    echo '<div class="alert alert-success"><center>One Message Deleted Successfully.</center></div>'; 


}
 }



// Booking//
 if (isset($_POST['booking_id'])) {
    $id= $_POST['booking_id'];
 $query2 = "DELETE FROM `booking` WHERE `id` = $id";
 $run2= mysqli_query($conn,$query2);
  header('location:previous_booking.php');
 if($run2){
  
    echo '<div class="alert alert-success"><center>One Message Deleted Successfully.</center></div>'; 


}
 }

 //Category delete  //

   
    $b_id=$_GET['id'];
    

    $q="DELETE FROM `category` WHERE `category_id`=$b_id";
    
    $result=mysqli_query($conn,$q);

    header("location:category.php");
 

 //Category delete  //


   //  if (isset($_POST['cat_id'])) {
    
   //      $cat_id=$_POST['cat_id'];
    
  
    
        
   //      $q="DELETE FROM `category` WHERE `category_id`=$cat_id";
        
   //      $run=mysqli_query($conn,$q);
        
        
   //      echo '<div class="alert alert-success"><center>One Category Deleted.</center></div>';  
        
   //      }


?>