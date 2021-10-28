<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from demo.dashboardpack.com/finance-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Jun 2021 18:55:02 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Finance</title>

    <!-- <link rel="icon" href="img/favicon.png" type="image/png"> -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- themefy CSS -->
    <link rel="stylesheet" href="vendors/themefy_icon/themify-icons.css" />
    <!-- swiper slider CSS -->
    <link rel="stylesheet" href="vendors/swiper_slider/css/swiper.min.css" />
    <!-- select2 CSS -->
    <link rel="stylesheet" href="vendors/select2/css/select2.min.css" />
    <!-- select2 CSS -->
    <link rel="stylesheet" href="vendors/niceselect/css/nice-select.css" />
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="vendors/owl_carousel/css/owl.carousel.css" />
    <!-- gijgo css -->
    <link rel="stylesheet" href="vendors/gijgo/gijgo.min.css" />
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="vendors/font_awesome/css/all.min.css" />
    <link rel="stylesheet" href="vendors/tagsinput/tagsinput.css" />
    <!-- datatable CSS -->
    <link rel="stylesheet" href="vendors/datatable/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="vendors/datatable/css/responsive.dataTables.min.css" />
    <link rel="stylesheet" href="vendors/datatable/css/buttons.dataTables.min.css" />
    <!-- text editor css -->
    <link rel="stylesheet" href="vendors/text_editor/summernote-bs4.css" />
    <!-- morris css -->
    <link rel="stylesheet" href="vendors/morris/morris.css">
    <!-- metarial icon css -->
    <link rel="stylesheet" href="vendors/material_icon/material-icons.css" />

    <!-- menu css  -->
    <link rel="stylesheet" href="css/metisMenu.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/colors/default.css" id="colorSkinCSS">
</head>

<?php

include('header.php');
?>

<body class="crm_body_bg">

 <section class="main_content dashboard_part">
        <div class="main_content_iner ">
            <div class="container plr_30 body_white_bg pt_30">
                <div class="">
       
          <div>   
            <h1 class="text-center" style="font-size:40px;">Footer</h1>
            <hr>
        </div> 
       
       
      

    <form method="post" >
    <div class="row" >
    <div class="col-sm-4">
    <input type="text" id="movie" placeholder="Movie Category Links" class="form-control form-group" style="height:40px;font-size:15px;">
    </div>

    <div class="col-sm-4">
    <input type="text" id="info" placeholder="Informative Links" class="form-control form-group" style="height:40px;font-size:15px;">
    </div>

    <div class="col-sm-4">
    <input type="text" id="account" placeholder="User Account Links" class="form-control form-group" style="height:40px;font-size:15px;">
    </div>

  
    </div>
   

    <div class="row">
<input type="button" value="Save Changes" id="save" class="btn btn-outline-success col-sm-12" style="height:40px;font-size:15px;">


</div>
   
    </form>
  

<div class="row" style="margin-top:80px;">

<div id="success" class="col-sm-12 text-center" style="margin-top:10px;"></div>

<div id="all_records"  class="col-sm-12">
            

</div>

</div>




</div>
</div>
</div>





<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script>
$(document).ready(function(){

 
    $('#save').on('click',function(){


        var movie = $('#movie').val();
        var info = $('#info').val();
        var account = $('#account').val();
      
$.ajax({

    url:"insert.php",
    type:"post",
    data:{
        movie:movie,
        info:info,
        account:account
    },
    success:function(data){
        $("#success").html(data);
          view_data();
        }

});

    })



    function view_data(){


$.ajax({

type:"POST",
url:"view_data.php",
datatype:"html",
success:function(data){
$("#all_records").html(data);
}

});


}
view_data();




})

</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>