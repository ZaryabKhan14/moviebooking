<?php

include 'connection.php';

   
 
    //Booking//


    if (isset($_POST['price'])) {
    
        $price=$_POST['price'];
        $adult=$_POST['adult'];
        $kid=$_POST['kid'];
        $seats=$_POST['seats'];
        $theater=$_POST['theater'];
        $movie_id=$_POST['movie_id'];
        $user_id=$_POST['user_id'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $total=$_POST['total'];
        $date = date('Y-m-d');
    
        
if ($adult != null && $theater != null && $name != null && $email != null && $price != null) {
  
        $q="INSERT INTO `booking`(`id`, `user_id`, `movie_id`, `num_of_adults`, `booked_seats`, `name`, `email`, `theater`, `num_of_kids`, `ticket_class`, `amount`, `payment`) VALUES ('','$user_id','$movie_id','$adult','$seats','$name','$email','$theater','$kid','$price','$total','pending')";
        
        $run=mysqli_query($conn,$q);

  
        $q2="INSERT INTO `notifications`(`id`, `user_id`, `text`, `date`, `text2`) VALUES ('','$user_id','Your Ticket Has Been Booked, You Can Cancel It Anytime Before Release Date. You Can View Reciept After Completing The Payment. ','$date','Just Got A New Booking Of A Movie')";
        
        $run2=mysqli_query($conn,$q2);
        
        echo '<div class="alert alert-success"><center>Your Ticket Has Been Booked.</center></div>';  

}
else{
    
        echo '<div class="alert alert-danger"><center>All Fileds Are Required.</center></div>';  

}
      
        
        }

        

?>