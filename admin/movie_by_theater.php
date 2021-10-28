<?php
include 'connection.php';
include 'header.php';


$t="SELECT * FROM `theater` ";
$theater=mysqli_query($conn,$t);

$s="SELECT * FROM `timing_Slots` ";
$slot=mysqli_query($conn,$s);


$m="SELECT * FROM `movies` WHERE `status` = 'unfinish'
";
$movies=mysqli_query($conn,$m);


?>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
</head>

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

<section class="main_content dashboard_part" >
        <div class="main_content_iner">
            <div class="container plr_30 body_white_bg pt_30">


            <div>   
            <h1 class="text-center" style="font-size:40px;">Show Time</h1>
            <hr>
        </div> 
       
   
<?php
if ($movies != null) {
  

?>
      
<div class="row" style="margin-top:80px;">

<div id="success_msg" class="col-sm-12 text-center" style="margin-top:10px;"></div>
<div id="msg" class="col-sm-12 text-center" style="margin-top:10px;"></div>



</div>






<div class="row" style="margin-top:30px;">

<?php
while ($row3=mysqli_fetch_array($movies)) {

  ?> 


            <div class="col-sm-4">
            <input type="hidden" id="movie_id" value="<?php echo $row3[0]; ?>">
            <input type="hidden" id="m_id" value="<?php echo $row3[0]; ?>">

            <div class="card" style="height:400px;" >
            <img src="<?php echo $row3[5]?>" alt=""  class="img"  style="border-radius:10px;height:400px;"> 
          
            <div class="middle">
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Theaters & Slots</button>
           <br>
           <br>
           <input type="submit" value="Publish Movie" id="publish" class="btn btn-success">

        </div>

            </div>
         
            </div>

            <?php
              }
            ?>

<!-- row -->
         </div>
<!-- row -->
 <?php
 }

else {
  echo '<div class="alert alert-danger">There Is Nothing To Show You.</div>';  

}
?>


<div class="container">

  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Select Thetaers & SLots</h4>
        </div>
        <div class="modal-body">
         
    <div class="row" style="height:100px;">
    <div class="col-sm-12">
    <form method="post">
    <label>Select Movie Theaters</label>
<select class="form-control form-group"  id="theater_id" required="">
    
       <?php
       while($row=mysqli_fetch_array($theater))
       {
           echo "<option value='$row[0]'>$row[1], $row[2]</option>";

       }
       ?>
       
      </select>
    </div>
    </div>

    <div class="row" >
    <div class="col-sm-12">
    
    <label>Select Movie Timings</label>
<select class="form-control form-group"  id="slot_id" required="">
    
       <?php
       while($row2=mysqli_fetch_array($slot))
       {
           echo "<option value='$row2[0]'>$row2[1], $row2[2]</option>";

       }
       ?>
       
      </select>
    </div>
    </form>
    </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <span> <button type="submit" class="btn btn-success" id="add">Add</button></span>
        </div>
      </div>
    </div>
  </div>
</div>


</div>
</div>
</section>


<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script>
  $(document).ready(function(){

$('#add').on('click',function(){
  var movie_id = $('#movie_id').val();
  var theater_id = $('#theater_id').val();
  var slot_id = $('#slot_id').val();

  $.ajax({

url:"insert.php",
type:"post",
data:{
  movie_id:movie_id,
  theater_id:theater_id,
  slot_id:slot_id
},
success:function(data){
    $("#success_msg").html(data);
    }

});

});


$('#publish').on('click',function(){
  var m_id = $('#m_id').val();
  
  $.ajax({

url:"insert.php",
type:"post",
data:{
  m_id:m_id,
  
},
success:function(data){
    $("#msg").html(data);
    }

});
});
  });
</script>

</body>
