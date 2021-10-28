<?php

include('connection.php');

include('header.php');



$id =$_GET["id"];

$sql="SELECT * FROM `timing_slots` WHERE `id` = $id " ;
$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($result);

if (isset($_POST['update'])) {
    $slot=$_POST['slot'];
    $timing=$_POST['timing'];
    $q="UPDATE `timing_slots` SET `slot`='$slot',`time`='$timing' WHERE `id`='$id'";
    $run=mysqli_query($conn,$q);

   

    if ($run) {
        $message = '<div class="alert alert-success text-center">One Record Updated Successfully</div>';  

}

else {
    $failed = '<div class="alert alert-danger text-center">Error Occured While Updating Category</div>';  
}


}
?>



<body class="crm_body_bg">

<section class="main_content dashboard_part">
        <div class="main_content_iner ">
            <div class="container plr_30 body_white_bg pt_30">

   
            <div>   
            <h1 class="text-center" style="font-size:40px;">Update Timing & Slot</h1>
            <hr>
        </div> 



        <form method="post" >
        <div><?php if(isset($message)) { echo $message; } ?></div>
        <div><?php if(isset($fail)) { echo $fail; } ?></div>


    <div class="row" >
    <div class="col-sm-4">
    
    <label for="">Slots</label>
<select class="form-control"  name="slot">
    <option value='<?php echo $row[1] ?>'><?php echo $row[1] ?></option>
    <option value='Morning'>Morning</option>
    <option value='Noon'>Noon</option>
    <option value='Evening'>Evening</option>
    <option value='Night'>Night</option>

  </select>    
</div>
    <div class="col-sm-4">
    <label for="">Timing</label>
    <input type="time" value="<?php echo $row[2] ?>" name="timing" class="form-control form-group" style="height:40px;font-size:15px;">
    </div>
    </div>
    <br>

    <button type="submit" name="update" class="btn btn-outline-success">Update</button>  




</form>



</div>
</div>
</section>

</body>