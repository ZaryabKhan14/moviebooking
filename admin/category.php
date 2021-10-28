<?php
include('header.php');

?>



<body class="crm_body_bg">

<section class="main_content dashboard_part">
        <div class="main_content_iner ">
            <div class="container plr_30 body_white_bg pt_30">


            <div>   
            <h1 class="text-center" style="font-size:40px;">Movie Categories</h1>
            <hr>
        </div> 
       

        <form method="post">

      

    <div class="row" >
    <div class="col-sm-4">
    
    <input type="text" placeholder="Add Movie Category" id="add_category" class="form-control form-group" required="required" style="height:40px;font-size:15px;">
    </div>

<div class="col-sm-4">
    <input type="button" value="Add Category" id="Add" class="btn btn-outline-success" style="height:40px;font-size:15px;margin-left:0px;">
    </div>
</div>



</form>


<div class="row" style="margin-top:80px;">

<div id="success_msg" class="col-sm-12 text-center" style="margin-top:10px;"></div>

<div id="all_categories"  class="col-sm-12">
            

</div>

</div>



     </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
$(document).ready(function(){


    $('#Add').on('click',function(){

        var category = $('#add_category').val();


        $.ajax({

url:"insert.php",
type:"post",
data:{
    category:category,
},
success:function(data){
    $("#success_msg").html(data);
      view_category();


    }

});

    });


    
    function view_category(){


$.ajax({

type:"POST",
url:"view_category.php",
datatype:"html",
success:function(data){
$("#all_categories").html(data);
}

});


}
view_category();


})
</script>

</body>