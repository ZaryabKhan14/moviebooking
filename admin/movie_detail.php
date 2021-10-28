<?php
include('header.php');

include 'connection.php';

$id =$_GET["id"];

$sql="SELECT * FROM `movies` WHERE `id` = $id " ;
$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($result);

?>

<body class="crm_body_bg">

<section class="main_content dashboard_part">
        <div class="main_content_iner ">
            <div class="container plr_30 body_white_bg pt_30">

            

        <div class="row">

  
            <div class="col-sm-5">
       
            <div class="card" style="height:500px;" >
            <img src="<?php echo $row[5]?>" alt="" height="500" style="border-radius:10px;"> 
          
        </div>
          
            </div>

           
       <div class="col-sm-6">
<h2><b><?php echo $row[1] ?></b></h2>
    

<div style="margin-top:20px;">
<h4>Release Date:</h4><?php echo $row[4] ?>
</div>


<div style="margin-top:20px;">
<h4>Timings:</h4><?php echo $row[8] ?>
</div>

<div style="margin-top:20px;">
<h4>Cast:</h4><?php echo $row[7] ?>
</div>

<div style="margin-top:20px;text-align:justify;">
<p><?php echo $row[3] ?></p>
</div> 


<div class="row" style="margin-top:20px;">


<div class="col-sm-6">
<a class="btn btn-outline-success" href="movie_update.php?id=<?php echo $row[0];?>">Update Details</a>
</div>

<div class="col-sm-6">
<button class="btn btn-outline-danger">Delete Movie</button>
</div>

</div> 



</div>
<!-- row -->
         </div>
<!-- row -->

<h2 style="margin-top:100px;">Movie Trailer</h4>
<div >
<video src="<?php echo $row[6] ?>" controls width='800px' height='400px'></video>     
</div> 

</div>
</div>
</section>

</body>