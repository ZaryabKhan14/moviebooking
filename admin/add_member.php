<?php
include('header.php');
include 'connection.php';


if (isset($_POST['Add'])) {
    $name=$_POST['username'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $c_password=$_POST['c_password'];
    $role=$_POST['role'];
    $date = date('d-m-y h:i:s');

    $img_tmp_name=$_FILES['img']['tmp_name'];
    $img_name="images/".$_FILES['img']['name'];
    move_uploaded_file($img_tmp_name,$img_name);

     
        
    $sql = "SELECT * FROM `users` WHERE `email` ='$email'";
   
    $result = mysqli_query($conn, $sql);
    
    $num = mysqli_num_rows($result);


    if($num == 0) {
        if(($password == $c_password) ) {
    
         
   $sql = "INSERT INTO `users`(`user_id`, `username`, `email`, `phone`, `password`, `c_password`, `role`, `user_image`, `member_since`, `status`) VALUES ('','$name','$email','$phone','$password','$c_password','$role','$img_name','$date','active')";       
    
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $showAlert = true; 
            }
             $message1 = '<div class="alert alert-success alert-dismissible fade show col-sm-12" role="alert">
            <center><strong>Success!</strong>New User Has Been Added Successfully.</center>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';  

       

          
        } 
        else {

             $message2 = '<div class="alert alert-danger alert-dismissible fade show col-sm-12 " role="alert" >
            <center><strong>Passwords are not identical!</strong> Please Try Again.</center>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';  

        }
            
    }
    
 elseif($num>0) 
   {
     $message3 = '<div class="alert alert-danger alert-dismissible fade show col-sm-12" role="alert">
    <center><strong>Email Already Taken!</strong> Please Try Another One.</center>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';  
} 


    
  

   }


?>


<body class="crm_body_bg">

<section class="main_content dashboard_part">
        <div class="main_content_iner ">
            <div class="container plr_30 body_white_bg pt_30">

            
            <div>   
            <h1 class="text-center" style="font-size:40px;">Add New Member</h1>
            <hr>
        </div> 
       

        <form method="post"  enctype="multipart/form-data">

        <div><?php if(isset($message1)) { echo $message1; } ?></div>
        <div><?php if(isset($message2)) { echo $message2; } ?></div>
        <div><?php if(isset($message3)) { echo $message3; } ?></div>


    <div class="row" style="margin-top:40px;">
<div class="col-sm-6">
    <label for="">UserName</label>
<input type="text" name="username" placeholder="Enter UserName" class="form-group form-control" required="required">

</div>

<div class="col-sm-6">
    <label for="">Email Address</label>
<input type="text" name="email" placeholder="Enter Email" class="form-group form-control" required="required">

</div>
</div>


<div class="row" style="margin-top:40px;">
<div class="col-sm-6">
    <label for="">Phone Number</label>
<input type="text" name="phone" placeholder="Enter Number" class="form-group form-control" required="required">

</div>

<div class="col-sm-6">
    <label for="">Password</label>
<input type="text" name="password" placeholder="Enter Password" class="form-group form-control" required="required">

</div>
</div>



<div class="row" style="margin-top:40px;">
<div class="col-sm-6">
    <label for="">Re-Enter Password</label>
<input type="text" name="c_password" placeholder="Re-Enter Password" class="form-group form-control" required="required">

</div>

<div class="col-sm-6">
<label>Select Role</label>
<select class="form-control"  name="role">
        <option value=''>Select Role</option>
        <option value='0'>Admin</option>
        <option value='1'>User</option>

      </select>
</div>
</div>




<div class="row" style="margin-top:40px;">
<div class="col-sm-6">
    <label for="">Select Profile Image</label>
    <br>
<input type="file" name="img" id="">
</div>

<div class="col-sm-6">
   <button type="submit" class="btn btn-outline-success" name="Add">Add Member</button>
</div>
</div>


</form>

        

</div>
</div>
</section>


<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

</body>