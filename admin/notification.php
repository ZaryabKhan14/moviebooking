
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

$sql="SELECT * FROM `notifications` order by id desc";
$result=mysqli_query($conn,$sql);

?>


<body class="crm_body_bg">

<section class="main_content dashboard_part">
        <div class="main_content_iner ">
            <div class="container plr_30 body_white_bg pt_30">

            <div>   
            <h1 class="text-center" style="font-size:40px;">Notifications</h1>
            <hr>
        </div> 
  

<?php
while ($row=mysqli_fetch_array($result)) {
$today = date("Y-m-d");
$release=$row[4];    
?>

    <!-- notifications-->
    
<?php
if ($today=$release) {
?>
  <span class="badge badge-primary">New</span>  

<?php
}
?>

<div class="alert alert-info" role="alert">
   <div><?php echo $row[3]; ?><a href="new_booking.php" class="alert-link"> Go To Bookings</a>.</div> 
  <p style="margin-top:10px;"><?php echo $row[4]; ?></p>
</div>

    <!-- notifications Ends -->
<?php
}
?>
       

</div>
</div>
</section>

</body>
