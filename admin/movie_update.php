<?php

include('connection.php');

include('header.php');



$id =$_GET["id"];

$sql="SELECT * FROM `movies` WHERE `id` = $id " ;
$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($result);

if (isset($_POST['update'])) {
    $name=$_POST['name'];
    $date=$_POST['date'];
    $cast=$_POST['cast'];
    $category=$_POST['category'];
    $time=$_POST['time'];
    $desc=$_POST['desc'];
 

    $img_tmp_name=$_FILES['poster']['tmp_name'];
    $img_name="images/".$_FILES['poster']['name'];
    move_uploaded_file($img_tmp_name,$img_name);



    $trailer_tmp_name=$_FILES['trailer']['tmp_name'];
    $trailer_name="trailer/".$_FILES['trailer']['name'];
    move_uploaded_file($trailer_tmp_name,$trailer_name);  


    $q="UPDATE `movies` SET `movie_name`='$name',`movie_category`=$category,`movie_description`='$desc',`release_Date`=$date,`movie_poster`=$img_name,`movie_trailer`=$trailer_name,`movie_cast`=$cast,`movie_timing`=$time WHERE `id` = '$id'";
    
    $run=mysqli_query($conn,$q);

   

    if ($run) {
        $message = '<div class="alert alert-success text-center">Record Updated Successfully</div>';  

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
            <h1 class="text-center" style="font-size:40px;">Update Movie</h1>
            <hr>
        </div> 



        <form method="post" >
        <div><?php if(isset($message)) { echo $message; } ?></div>
        <div><?php if(isset($fail)) { echo $fail; } ?></div>



        <div class="row">

  
<div class="col-sm-5">
<h4>Change Movie Poster</h4>
<input type="file" name="poster" id="">
<img src="<?php echo $row[5]?>" alt="" height="500" width="300" style="border-radius:10px;margin-top:20px;"> 
<input type="hidden" name="img" value="<?php echo$row[5]?>">


</div>


<div class="col-sm-6">
    <h5>Change Name</h5>
<input type="text" value="<?php echo $row[1] ?>" name="name" class="form-control form-group" style="height:40px;font-size:15px;">



<div style="margin-top:20px;">
<h5>Change Date</h5>
<input type="date" value="<?php echo $row[4] ?>" name="date" class="form-control form-group" style="height:40px;font-size:15px;">

</div>


<div style="margin-top:20px;">
<h5>Change Time</h5>
<input type="text" value="<?php echo $row[8] ?>" name="time" class="form-control form-group" style="height:40px;font-size:15px;">

</div>


<div style="margin-top:20px;">
<h5>Change Category</h5>
<select name="category" id="" class="form-control form-group">
       <option value=""><?php echo $row[2] ?></option>
   </select> 
   
</div>

<div style="margin-top:20px;">
<h5>Change Cast</h5>
<textarea name="cast" cols="80" rows="5" class="form-control form-group">
<?php echo $row[7] ?>
</textarea>
</div>

<div style="margin-top:20px;text-align:justify;">
<h5>Change Description</h5>
<textarea name="desc" cols="80" rows="7" class="form-control form-group">
<?php echo $row[3] ?>
</textarea>


<br>
<button type="submit" name="update" class="btn btn-outline-success col-sm-12">Update </button>  

</div> 

 



</div>
<!-- row -->
</div>
<!-- row -->

<h4 style="margin-top:100px;">Change Movie Trailer</h4>
<div>

<input type="file" name="trailer" id="">
<video src="<?php echo $row[6] ?>" controls width='800px' height='400px' style="margin-top:20px;"></video>     
<input type="hidden" name="video" value="<?php echo$row[6]?>">
</div> 












<!-- 
    <div class="row" >
    <div class="col-sm-6">
    
    <input type="text" value="<?php echo $row[1] ?>" name="category" class="form-control form-group" style="height:40px;font-size:15px;">
    </div>

    <div class="col-sm-6">
   <select name="" id="" class="form-control form-group">
       <option value=""><?php echo $row[2] ?></option>
   </select> 
     </div>
</div>



<div class="row" style="margin-top:20px;">
    <div class="col-sm-6">
    <input type="date" value="<?php echo $row[4] ?>" name="category" class="form-control form-group" style="height:40px;font-size:15px;">


    </div>

     
<div class="col-sm-6">
<input type="text" value="<?php echo $row[8] ?>" name="category" class="form-control form-group" style="height:40px;font-size:15px;">

    </div>
</div>




<div class="row" style="margin-top:20px;">
    <div class="col-sm-6">
  
    <textarea name="text" cols="80" rows="7" class="form-control form-group">
<?php echo $row[7] ?>
</textarea>

    </div>

     
<div class="col-sm-6">
  
<textarea name="text" cols="80" rows="7" class="form-control form-group">
<?php echo $row[3] ?>
</textarea>
    </div>
</div>




<div class="row" style="margin-top:20px;">
    <div class="col-sm-6">
        <label for="">Change Poster</label>
<input type="file" name="" id="">
<br>
<img src="<?php echo $row[5]?>" alt="" height="300" width="200" style="border-radius:10px;"> 

    </div>

     
<div class="col-sm-6">
<label for="">Change Trailer</label>
<input type="file" name="" id="">

<video src="<?php echo $row[6] ?>" controls width='400px' height='200px'></video>     

    </div>
</div> -->





</form>



</div>
</div>
</section>

</body>