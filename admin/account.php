
<?php
session_start();
include 'connection.php';
include 'header.php';
if ($_SESSION["id"] == null) {
	header('location:../user/login.php');
}
else{
$user_id = $_SESSION["id"] ;
$username =  $_SESSION["name"]; 

}

$sql="SELECT * FROM `users` WHERE `user_id` = $user_id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);


if (isset($_POST['update'])) {
    $username=$_POST['username'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
    $q="UPDATE `users` SET `username`='$username', `email`='$email', `phone`='$phone' WHERE `user_id`='$user_id' ";
    $run=mysqli_query($conn,$q);
   

    if ($run) {

        $message = '<div class="alert alert-success text-center">Account Info Updated</div>';  



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
            <h1 class="text-center" style="font-size:40px;">Manage Account</h1>
            <hr>
        </div> 



<form method="post" enctype="multipart/form-data" style="margin-top:100px;">
	        <div><?php if(isset($message)) { echo $message; } ?></div>	
        <div><?php if(isset($failed)) { echo $failed; } ?></div>
    <div class="row" style="margin-top:40px;">

<div class="col-sm-6">
<label for="">Change UserName</label>
<input type="text" name="username" value="<?php echo $row[1]; ?>" class="form-group form-control">

</div>

<div class="col-sm-6">
<label for="">Change Email Address</label>
<input type="text" name="email"  value="<?php echo $row[2]; ?>" class="form-group form-control">

</div>
</div>


<div class="row" style="margin-top:40px;">
<div class="col-sm-6">
    <label for="">Change Phone Number</label>
<input type="text" name="phone" value="<?php echo $row[3]; ?>" class="form-group form-control" >

</div>
<div class="col-sm-6">
 <label for="">Admin Since</label>
<input type="text" name="phone" value="<?php echo $row[8]; ?>" class="form-group form-control" disabled>

</div>
</div>

<div class="row" style="margin-top:40px;">
<div class="col-sm-6">
	<input type="submit" value="Save Changes" class="btn btn-outline-success col-sm-12" name="update" >
</div>
</div>


</form>