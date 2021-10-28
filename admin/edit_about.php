<?php

include('connection.php');

include('header.php');



$id =$_GET["id"];

$sql="SELECT * FROM `about` WHERE `id` = $id " ;
$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($result);

if (isset($_POST['update'])) {
    $heading=$_POST['heading'];
    $text=$_POST['text'];
    $q="UPDATE `about` SET `heading`='$heading',`text`='$text' WHERE `id`='$id'";
    $run=mysqli_query($conn,$q);

   

    if ($run) {
        $message = '<div class="alert alert-success text-center">About US Updated Successfully</div>';  

}

else {
    $failed = '<div class="alert alert-danger text-center">Error Occured While Updating About Us</div>';  
}


}
?>



<body class="crm_body_bg">

<section class="main_content dashboard_part">
        <div class="main_content_iner ">
            <div class="container plr_30 body_white_bg pt_30">

   
            <div>   
            <h1 class="text-center" style="font-size:40px;">Update About</h1>
            <hr>
        </div> 



        <form method="post" >
        <div><?php if(isset($message)) { echo $message; } ?></div>
        <div><?php if(isset($fail)) { echo $fail; } ?></div>


    <div class="row" >
    <div class="col-sm-4">
    
    <input type="text" value="<?php echo $row[1] ?>" name="heading" class="form-control form-group" style="height:40px;font-size:15px;">
    </div>
    </div>

   <div class="row" >
    <div class="col-sm-12">
    
<textarea name="text" cols="80" rows="7" class="form-control form-group">
<?php echo $row[2] ?>
</textarea>
</div>
    </div>
   
    <br>

    <button type="submit" name="update" class="btn btn-outline-success">Update About Us</button>  




</form>



</div>
</div>
</section>

</body>