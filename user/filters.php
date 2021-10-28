<?php
include 'connection.php';



  //Filters //

    
        
    $q="SELECT * FROM `movies` WHERE `status` = 'finished' ";
    if (isset($_POST['language'])) {
 $language = $_POST['language'];
$q .= "
AND `language` = '$language'
";
}
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
                                    <img class="img-fluid" src="<?php echo "../admin/".$row[5]; ?>" style="height:400px;" alt="">
                                </figure>
                                <div class="box-content">
                                    <h3 class="title"><?php echo $row[1] ?></h3>
                                    <h4> <span class="post"><span class="fa fa-calendar-o"> </span> <?php echo $row[4]; ?>

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

   
?>
