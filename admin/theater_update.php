<?php

include('connection.php');

include('header.php');



$id =$_GET["id"];

$sql="SELECT * FROM `theater` WHERE `theater_id` = $id " ;
$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($result);

if (isset($_POST['update'])) {
    $theater_name=$_POST['theater_name'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $q="UPDATE `theater` SET `theater_name`='$theater_name',`address`=' $address',`city`='$city' WHERE `theater_id`='$id'";
    $run=mysqli_query($conn,$q);

   

    if ($run) {
        $message = '<div class="alert alert-success text-center">Theater Updated Successfully</div>';  

}

else {
    $failed = '<div class="alert alert-danger text-center">Error Occured While Updating...</div>';  
}


}
?>



<body class="crm_body_bg">

<section class="main_content dashboard_part">
        <div class="main_content_iner ">
            <div class="container plr_30 body_white_bg pt_30">

   
            <div>   
            <h1 class="text-center" style="font-size:40px;">Update Theater</h1>
            <hr>
        </div> 



        <form method="post" >
        <div><?php if(isset($message)) { echo $message; } ?></div>
        <div><?php if(isset($fail)) { echo $fail; } ?></div>


    <div class="row" >
    <div class="col-sm-6">
    <label for="">Theater Name</label>
    <input type="text" value="<?php echo $row[1] ?>" name="theater_name" class="form-control form-group" style="height:40px;font-size:15px;">
    </div>
    </div>
    <div class="row" style="margin-top:40px;">
    <div class="col-sm-6">
    <label for="">Theater Address</label>
    <input type="text" value="<?php echo $row[2] ?>" name="address" class="form-control form-group" style="height:40px;font-size:15px;">
    </div>

    </div>



    
<div class="row" style="margin-top:40px;">

<div class="col-sm-6">
<label for="">City</label>
<select class="form-control"  name="city">
    <option value='<?php echo $row[3] ?>'><?php echo $row[3] ?></option>
    <option value='karachi'>Karachi</option>
    <option value='Islamabad'>Islamabad</option>
    <option value='Lahore'>Lahore</option>
    <option value='Peshawar'>Peshawar</option>
    <option value='Multan'>Multan</option>
    <option value='Rawalpindi'>Rawalpindi</option>
    <option value='Faislabad'>Faislabad</option>
    <option value='Hyderabad'>Hyderabad</option>
    <option value='Quetta'>Quetta</option>
  </select>
</div>
</div>

<div class="row" style="margin-top:40px;">
<div class="col-sm-3">
<button type="submit" name="update" class="btn btn-outline-success"  style="height:40px;font-size:15px;margin-top:20px;">Update Theater</button>  </div>

</div>





</form>



</div>
</div>
</section>

</body>