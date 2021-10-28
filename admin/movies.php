

<?php

include 'connection.php';
include 'header.php';
$q="SELECT * FROM `category`";
$result=mysqli_query($conn,$q);






if (isset($_POST['btn'])) {
    $movie_name=$_POST['movie_name'];
    $date=$_POST['date'];
    $cast=$_POST['cast'];
    $category=$_POST['category'];
    $desc=$_POST['desc'];
    $language=$_POST['language'];
    $seats=$_POST['seats'];
    $type=$_POST['type'];
    $upload_date = date('y-m-d');

    $img_tmp_name=$_FILES['poster']['tmp_name'];
    $img_name="images/".$_FILES['poster']['name'];
    move_uploaded_file($img_tmp_name,$img_name);

    $trailer_tmp_name=$_FILES['trailer']['tmp_name'];
    $trailer_name="trailer/".$_FILES['trailer']['name'];
    move_uploaded_file($trailer_tmp_name,$trailer_name);


$extension2 = pathinfo($_FILES["trailer"]["name"], PATHINFO_EXTENSION);

$extension = pathinfo($_FILES["poster"]["name"], PATHINFO_EXTENSION);
if($extension=='jpg' || $extension=='jpeg' || $extension=='png' )
{


    if($extension2 == "mp4" || $extension2 == "avi" || $extension2 == "mov" || $extension2 == "mpeg")
{
 $q="INSERT INTO `movies`(`id`, `movie_name`, `movie_category`, `movie_description`, `release_Date`, `movie_poster`, `movie_trailer`, `movie_cast`,  `upload_date`, `language`, `seats`, `industry`,`status`) VALUES ('','$movie_name','$category','$desc','$date','$img_name','$trailer_name','$cast','$upload_date','$language','$seats','$type','unfinish')";
$result=mysqli_query($conn,$q) or die("Failed To Upload");
   $message = '<div class="alert alert-success text-center">New Movie Has Been Added Successfully</div>';  
}
else
{
    $fail = '<div class="alert alert-danger text-center">Invalid File In Trailer.</div>';  
}



}
else
{
    $fail = '<div class="alert alert-danger text-center">Invalid File In Poster.</div>';  
}



}
?>


<body class="crm_body_bg">

<section class="main_content dashboard_part">
        <div class="main_content_iner ">
            <div class="container plr_30 body_white_bg pt_30">

            <div>   
            <h1 class="text-center" style="font-size:40px;">Add New Movies</h1>
            <hr>
        </div> 



        

        <form method="post"  enctype="multipart/form-data">
        <div><?php if(isset($message)) { echo $message; } ?></div>
        <div><?php if(isset($fail)) { echo $fail; } ?></div>
    <div class="row" style="margin-top:40px;">
    <div class="col-sm-6">
    <label>Movie Name</label>
    <input type="text" placeholder="Movie Name" name="movie_name" class="form-control form-group" required="" style="height:40px;font-size:15px;">
    </div>

<div class="col-sm-6">
<label>Movie Category</label>
<select class="form-control"  name="category" required="">
    
       <?php
       while($row=mysqli_fetch_array($result))
       {
           echo "<option value='$row[0]'>$row[1]</option>";

       }
       ?>
       
      </select>
    </div>
    </div>

    <div class="row" style="margin-top:40px;">
    <div class="col-sm-6">
    <label>Movie Date</label>
    <input type="date" required="" placeholder="Release Date" name="date" class="form-control form-group" style="height:40px;font-size:15px;">
    </div>




    <div class="col-sm-6">
    <label>Movie Cast</label>
    <input type="text" required="" placeholder="Movie Cast" name="cast" class="form-control form-group" style="height:40px;font-size:15px;">
    </div>
    </div>


    <div class="row" style="margin-top:40px;">
<div class="col-sm-6 ">
<label>Movie Poster</label>
<input type="file"  name="poster" required=""> 
    </div>

    <div class="col-sm-6">
    <label>Movie Trailer</label>
    <input type="file"  name="trailer" required="">    
    </div>
    </div>
    

<div class="row" style="margin-top:40px;">
<div class="col-sm-6 ">
<label>Movie Language</label>
<select name="language"  class="form-control">
  
        <option value="English">English</option>
        <option value="Hindi">Hindi</option>
        <option value="Urdu">Urdu</option>
    
    </select> 
    </div>

    <div class="col-sm-6">
    <label>Movie Type</label>
    <select name="type"  class="form-control">
     
        <option value="Hollywood">Hollywood</option>
        <option value="Bollywood">Bollywood</option>
        <option value="Lollywood">Lollywood</option>
    
    </select> 
    </div>
    </div>


    <div class="row" style="margin-top:40px;">
    <div class="col-sm-6">
    <label>Movie Description</label>
<textarea  name="desc" required="" cols="55" rows="7"  placeholder="Movie Description" style="border-radius:20px;"></textarea>
  </div>




    <div class="col-sm-6">
    <label>Number Of Tickets</label>
    <input type="number" required="" placeholder="Number Of Tickets" value="10" min="10" max="100" name="seats" class="form-control form-group" style="height:40px;font-size:15px;">
    </div>
    </div> 


<div class="row" style="margin-top:40px;">
<div class="col-sm-6">
<input type="submit" name="btn" value="Upload Movie" class="btn btn-outline-success col-sm-12" style="">
   
</div> 
</div> 
</form>


</div>
</div>
</section>



<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function(){



// $('#category').on('change',function(){
//     var category=$(this).val();
//     });
//     $('#image_file').('change',function() {
//         var filename = $('#poster').val();
//         $('#poster').html(filename);
//     });
   
// $('#btn').on('click',function(){
//     var movie_name = $('#movie_name').val();
//     var date = $('#date').val();
//     var cast = $('#cast').val();
   
//     var timing = $('#timing').val();
//     var desc = $('#desc').val();
    
    
//     $.ajax({

// url:"insert.php",
// type:"post",
// data:{
//     movie_name:movie_name,
//     date:date,
//     category:category,
//     cast:cast,
//     poster:poster,
//     trailer:trailer,
//     timing:timing,
//     desc:desc
// },
// success:function(data){
//    alert(data);
//     }

// });

    
    
//     });
   


    })
</script>


</body>
