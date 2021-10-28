<?php
include('header.php');

include 'connection.php';

$id =$_GET["id"];

$sql="SELECT * FROM `users` WHERE `user_id` = $id" ;
$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($result);

?>

<body class="crm_body_bg">

<section class="main_content dashboard_part">
        <div class="main_content_iner ">
            <div class="container plr_30 body_white_bg pt_30">


         <div class="row">
             <div class="col-sm-5">
             <img src="<?php echo $row[7]?>" height="300" width="300" style="border-radius:200px;"> 
             </div>

            <div class="col-sm-7">
            

            <h2>UserName</h2>
            <div style="font-size:20px;">
            <?php echo $row[1] ?>
            </div>

            <h2 style="margin-top:20px;">Email</h2>
            <div style="font-size:20px;">
            <?php echo $row[2] ?>
            </div>

            <h2 style="margin-top:20px;">Phone</h2>
            <div style="font-size:20px;">
            <?php echo $row[3] ?>
            </div>


            <h2 style="margin-top:20px;">Member Since</h2>
            <div style="font-size:20px;">
            <?php echo $row[8] ?>
            </div>


       
           <button name="block" class="btn btn-outline-danger" style="margin-top:20px;">Update</button>
            </div>

            </div>


         </div>


</div>
</div>
</section>


</body>
