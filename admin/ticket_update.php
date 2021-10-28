<?php

include('connection.php');

include('header.php');



$id =$_GET["id"];

$sql="SELECT * FROM `ticket_plan` WHERE `id` = $id " ;
$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($result);

if (isset($_POST['update'])) {
    $name=$_POST['name'];
    $price=$_POST['price'];
    $q="UPDATE `ticket_plan` SET `name`='$name',`price`='$price' WHERE `id`='$id'";
    $run=mysqli_query($conn,$q);

   

    if ($run) {
        $message = '<div class="alert alert-success text-center">Ticket Plan Updated Successfully</div>';  

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
            <h1 class="text-center" style="font-size:40px;">Update Ticket Plan</h1>
            <hr>
        </div> 



        <form method="post" >
        <div><?php if(isset($message)) { echo $message; } ?></div>
        <div><?php if(isset($fail)) { echo $fail; } ?></div>


    <div class="row" >
    <div class="col-sm-4">
    <label for="">Ticket Class Name</label>
    <input type="text" value="<?php echo $row[1] ?>" name="name" class="form-control form-group" style="height:40px;font-size:15px;">
    </div>

    <div class="col-sm-4">
    <label for="">Ticket Price</label>
    <input type="text" value="<?php echo $row[2] ?>" name="price" class="form-control form-group" style="height:40px;font-size:15px;">
    </div>
    </div>
    <br>

    <button type="submit" name="update" class="btn btn-outline-success">Update</button>  




</form>



</div>
</div>
</section>

</body>