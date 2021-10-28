<?php
session_start();
include 'connection.php';
include 'header.php';
if ($_SESSION["id"] == null) {
	header('location:login.php');
}
else{
$user_id = $_SESSION["id"] ;
$username =  $_SESSION["name"]; 

}

$id =$_GET["id"];


$sql2="SELECT movies.release_Date,booking.name,movies.movie_name,booking.ticket_class,booking.amount,booking.theater,booking.email,booking.booked_seats,booking.num_of_adults,booking.num_of_kids,booking.ticket_class FROM booking INNER JOIN movies ON booking.id = $id";
$result2=mysqli_query($conn,$sql2);
$row2=mysqli_fetch_array($result2);
$today = date("Y-m-d");
$release=$row2['release_Date'];

?>


 <section class="w3l-loginhny py-5">
            <!-- login -->
            <div class="container py-lg-3">
  <div class="w3l-hny-login">
                    <div class="w3l-hny-login-info">

					<div class=row style="color:black;">
					
                        <form  method="post">
					<div id="success_msg"></div>
                    <div>
                         
                          <h5>Full Name:</h5>
                            <div class="input-group">
                          <div><?php echo $row2['name']; ?></div>

						</div>
						<div>
                            <h5>Email:</h5>
                            <div class="input-group">
                          <div><?php echo $row2['email']; ?></div>         
                         </div>
							
							<div>
                            <h5>Ticket Class:</h5>
                            <div class="input-group">

                            <?php
                            if ($row2['ticket_class'] == '700') {
                             ?>
    <div><?php echo 'Gold' ?></div>
                             <?php 
                            }
                         

                            
    elseif ($row2['ticket_class']=='600') {
    ?>
    
    <div><?php echo 'Platinum' ?></div>
    <?php
    }

   else {
    ?>
    
    <div><?php echo 'Box' ?></div>
    <?php
    }
    ?>
                               
                         </div>

							<div>
                            <h5>Theater & Slot:</h5>
                            <div class="input-group">
                          <div><?php echo $row2['theater']; ?></div>         
                         </div>
							

							<div>
                            <h5>Adults:</h5>
                            <div class="input-group">
                          <div><?php echo $row2['num_of_adults']; ?></div>         
                         </div>
                         
                           	<div>
                            <h5>Kids:</h5>
                            <div class="input-group">
                          <div><?php echo $row2['num_of_kids']; ?></div>         
                         </div>
                         	<div>
                            <h5>Total Tickets:</h5>
                            <div class="input-group">
                          <div><?php echo $row2['booked_seats']; ?></div>         
                         </div>
						
                         	<div>
                            <h5>Release Date:</h5>
                            <div class="input-group">
                            <input type="hidden" id="c_id" value="<?php echo $id; ?>">
                          <div><?php echo $row2['release_Date']; ?></div>         
                         </div>
                            


                        </form>
						</div>
                    </div>
                </div>
                <a href="javascript:history.go(-1)" class="btn read-button col-sm-12">Go Back</a>

<?php
if ($today<$release) {
?>
 <div><a href="cancel.php?id=<?php echo $id ?>" class="btn read-button col-sm-12" style="margin-top:20px;" name="cancel">Cancel Booking</a></div>
<?php
}
else{
?>
 <div><a href="index.php" class="btn read-button col-sm-12" style="margin-top:20px;">Go To Home</a></div>


<?php
}
?>

 
           
				
  </div>
</section>

<!-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script>

$(document).ready(function(){

    $('.btn').on('click',function(){

        var c_id = $("#c_id").val();

    $.ajax({

url:"cancel.php",
type:"post",
data:{
    c_id:c_id,
},
success:function(data){
    $("#success_msg").html(data);
      
    } 
});



    });
})


</script> -->