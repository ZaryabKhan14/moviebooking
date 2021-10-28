<?php

include('header.php');

include('connection.php');


$query=mysqli_query($conn,"SELECT * FROM `movies` ");


?>

<style>

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}
.card:hover .img {
  opacity: 0.3;
}

.card:hover .middle {
  opacity: 1;
}

.text {
    font-weight: 900;
  color: black;
  font-size:30px;
  padding: 16px 32px;
}
</style>

<body class="crm_body_bg">

<section class="main_content dashboard_part">
        <div class="main_content_iner ">
            <div class="container plr_30 body_white_bg pt_30">

            <div>   
            <h1 class="text-center" style="font-size:40px;">Movies</h1>
            <hr>
        </div> 

        
<div>
    <a href="movies.php" class="btn btn-success">Add New Movie</a>
</div>

        <div class="row" style="margin-top:30px;">

         
<?php
while ($row=mysqli_fetch_array($query)) {
    ?> 


            <div class="col-sm-4">
            <a href="movie_detail.php?id=<?php echo $row[0];?>">
            <div class="card" style="height:400px;" >
            <img src="<?php echo $row[5]?>" alt=""  class="img"  style="border-radius:10px;height:400px;"> 
          
            <div class="middle">
    <div class="text"><?php echo $row[1]?></div>
  </div>

            </div>
            </a>
            </div>

            <?php
              }
            ?>

<!-- row -->
         </div>
<!-- row -->
 


   

</div>
</div>
</section>        