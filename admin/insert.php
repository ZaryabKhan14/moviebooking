<?php

include 'connection.php';

if (isset($_POST['movie'])) {
    
$movie=$_POST['movie'];
$info=$_POST['info'];
$account=$_POST['account'];


$q="INSERT INTO `footer`(`id`, `movies`, `information`, `profile`) VALUES ('','$movie','$info','$account')";

$run=mysqli_query($conn,$q);


echo '<div class="alert alert-success">Sucessfully Inserted</div>';  

}

//about //


if (isset($_POST['heading'])) {
    
    $heading=$_POST['heading'];
    $text=$_POST['text'];
    
     
    if ($heading != null && $text != null) {
 $q="INSERT INTO `about`(`id`, `heading`, `text`) VALUES ('','$heading','$text')";
    
    $run=mysqli_query($conn,$q);
    
    
    echo '<div class="alert alert-success">Content Successfully Added</div>';  
    }
    else{
    echo '<div class="alert alert-danger">All Fileds Must Be Filled Completely.</div>';  

    }
   
    
    }



    //category  //


if (isset($_POST['category'])) {
    
    $category=$_POST['category'];
    
    
    if ($category != null) {
        
    $q="INSERT INTO `category`(`category_id`, `category_name`) VALUES ('','$category')";
    
    $run=mysqli_query($conn,$q);
    
    
    echo '<div class="alert alert-success">New Category Added Successfully</div>';  
    }
    else {
    echo '<div class="alert alert-danger">All Fileds Must Be Filled Completely.</div>';  
    }
    
    
    }
    
 
    //theater  //


    if (isset($_POST['theater_name'])) {
    
        $theater_name=$_POST['theater_name'];
        $address=$_POST['address'];
        $city=$_POST['city'];
    
        
    
    if ($theater_name != null && $address != null && $city != null ) {
  $q="INSERT INTO `theater`(`theater_id`, `theater_name`, `address`, `city`) VALUES ('','$theater_name','$address','$city')";
        
        $run=mysqli_query($conn,$q);
        
        
        echo '<div class="alert alert-success">New Theater Added Successfuly.</div>';  
    }
else{
        echo '<div class="alert alert-danger">All Fileds Must Be Filled Completely.</div>';  

}
      
        
        }
     
    //timings & slots  //


    if (isset($_POST['timing'])) {
    
        $timing=$_POST['timing'];
        $slot=$_POST['slot'];
  
        if ($timing != null && $slot != null  ) {
        
        $q="INSERT INTO `timing_slots`(`id`, `slot`, `time`) VALUES ('','$slot','$timing')";
        
        $run=mysqli_query($conn,$q);
        
        
        echo '<div class="alert alert-success">Timing And Slot Added Successfuly.</div>';  
        
        }
        else{
            echo '<div class="alert alert-danger">All Fileds Must Be Filled Completely.</div>';  

        }

        }

         //ticket plans  //


    if (isset($_POST['ticket_class'])) {
    
        $ticket_class=$_POST['ticket_class'];
        $price=$_POST['price'];
  
       if ($ticket_class != null && $price != null  ) {
        
        $q="INSERT INTO `ticket_plan`(`id`, `name`, `price`) VALUES ('','$ticket_class','$price')";
        
        $run=mysqli_query($conn,$q);
        
        
        echo '<div class="alert alert-success">Ticket Class Added Successfuly.</div>';  
       }
       else{
        echo '<div class="alert alert-danger">All Fileds Must Be Filled Completely.</div>';  

       }


        }
         
    //movie_by_theater  //


    if (isset($_POST['movie_id'])) {
    
        $movie_id=$_POST['movie_id'];
        $theater_id=$_POST['theater_id'];
        $slot_id=$_POST['slot_id'];
  
        if ($movie_id != null && $theater_id != null && $slot_id != null) {
        
        $q="INSERT INTO `movie_by_theater`(`id`, `movie_id`, `theater_id`, `slot_id`) VALUES ('','$movie_id','$theater_id','$slot_id')";
        
        $run=mysqli_query($conn,$q);
        
        
        echo '<div class="alert alert-success">Movie Theaters & Slots Has Been Added.</div>';  
        }
        else{
         echo '<div class="alert alert-danger">All Fileds Must Be Filled Completely.</div>';  
        
        }


        }


         //status_update  //


    if (isset($_POST['m_id'])) {
    
        $m_id=$_POST['m_id'];
    
  
    
        
        $q="UPDATE `movies` SET `status`= 'finished' WHERE `id` = $m_id";
        
        $run=mysqli_query($conn,$q);
        
        
        echo '<div class="alert alert-success">Movie Has Been Published To The Site.</div>';  
        
        }


            //Block User  //


    if (isset($_POST['u_id'])) {
    
        $u_id=$_POST['u_id'];
    
  
    
        
        $q="UPDATE `users` SET `status`= 'blocked' WHERE `user_id` = $u_id";
        
        $run=mysqli_query($conn,$q);
        
        
        echo '<div class="alert alert-success"><center> User Account Has Been Blocked.</center></div>';  
        
        }

 

        //Unblock User  //


    if (isset($_POST['user_id'])) {
    
        $user_id=$_POST['user_id'];
    
  
    
        
        $q="UPDATE `users` SET `status`= 'active' WHERE `user_id` = $user_id";
        
        $run=mysqli_query($conn,$q);
        
        
        echo '<div class="alert alert-success"><center> User Account Has Been Unlocked.</center></div>';  
        
        }
    
    ?>
      


