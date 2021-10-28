<?php
session_start();
$u_id = $_SESSION["id"] ;

include('connection.php');

if (isset($_POST['c_name'])) {
    
    $c_name=$_POST['c_name'];
    $subject=$_POST['subject'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $query=$_POST['query'];
    
    
    $q="INSERT INTO `contact`(`id`, `name`, `subject`, `email`, `phone`, `query`) VALUES ('','$c_name','$subject','$email','$phone','$query')";
    
    $run=mysqli_query($conn,$q);
    
    if ($run) {
        echo '<div class="alert alert-success text-center">Your Query Has Been Submitted</div>';  
    }


    else{
        echo '<div class="alert alert-danger text-center">Error Occured While Submitting...</div>';  


    }
    
    }



    // reviews//



    if (isset($_POST['user_id'])) {
    
       
  $selected=$_POST['selected'];
    $user_id=$_POST['user_id'];
      $movie_id=$_POST['movie_id'];
   $Message=$_POST['Message'];
    

    
    
    $q="INSERT INTO `reviews`(`id`, `user_id`, `movie_id`, `comment`, `rating`) VALUES ('','$user_id','$movie_id','$Message','$selected')";
    
    $run=mysqli_query($conn,$q);
    
    if ($run) {
        echo '<div class="alert alert-success text-center">Review Submitted</div>';  



    }


    else{
        echo '<div class="alert alert-danger text-center">Error Occured While Submitting...</div>';  


    }
    
    }



    //payment //

    if (isset($_POST['b_id'])) {
    
        $b_id=$_POST['b_id'];
        $date = date('Y-m-d');
  
    
        
        $q="UPDATE `booking` SET `payment`= 'paid' WHERE `id` = $b_id";
        
        $run=mysqli_query($conn,$q);
        
        
        $q2="INSERT INTO `notifications`(`id`, `user_id`, `text`, `date`, `text2`) VALUES ('','$u_id','Your Payment Has Been Recieved, You Can View Booking Reciept In Booking History. ','$date','Member Has Successfully Paid The Payment Of A Ticket.')";
        
        $run2=mysqli_query($conn,$q2);
        
        
        echo '<div class="alert alert-success"><center>Your Payment Has Been Recieved, You Can View Your Reciept In Booking History.</center></div>';  
        
        }


    //category //

    if (isset($_POST['cat'])) {
    
        $cat=$_POST['cat'];
 
        $q="SELECT movies.movie_name,category.category_name,movies.release_Date,movies.movie_poster FROM category INNER JOIN movies ON category.category_id = movies.movie_category WHERE category.category_name = $cat ";
        
        $run=mysqli_query($conn,$q);
        



echo  ' <section class="w3l-grids">
<div class="grids-main py-5">
    <div class="container py-lg-4">
        <div class="headerhny-title">
            <div class="w3l-title-grids">
                <div class="headerhny-left">
 
                </div>
                
            </div>
        </div>
        <div class="w3l-populohny-grids">
        '
        ;

        
while ($row=mysqli_fetch_array($run)) {
?>



   <div class="item vhny-grid">
               
                <div class="box16 mb-0">
                   
     
                    <a href="booking.php?id=<?php echo $row[0];?>">
                              <figure>
                            <img class="img-fluid" src="<?php echo "../admin/".$row['movie_poster']; ?>" style="height:400px;" alt="">
                        </figure>
                        <div class="box-content">
                            <h3 class="title"><?php echo $row['movie_name'] ?></h3>
                            <h4> <span class="post"><span class="fa fa-calendar-o"> </span> <?php echo $row['release_Date']; ?>

                                </span>

                                <span class="post fa fa-heart text-right"></span>
                            </h4>
                        </div>
                        
                        <span class="fa fa-play video-icon" aria-hidden="true"></span>
                      
                    </a>
                   
                </div>
                
            </div>
            <?php
}
?>
 



<?php
echo '
</div>
</div>
</section>';

        }





?>