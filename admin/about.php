<?php
include('header.php');
?>


<body class="crm_body_bg">

<section class="main_content dashboard_part">
        <div class="main_content_iner ">
            <div class="container plr_30 body_white_bg pt_30">

 
            <div>   
            <h1 class="text-center" style="font-size:40px;">About Us</h1>
            <hr>
        </div> 


        <form method="post" >
    <div class="row" >
    <div class="col-sm-4">
    
    <input type="text" placeholder="Add Heading" id="heading" class="form-control form-group" style="height:40px;font-size:15px;">
    </div>
</div>

<div class="row" >
    <div class="col-sm-12">
    
<textarea id="text" cols="80" rows="7" placeholder="Describe Heading"></textarea>
    </div>
</div>

<div class="row">
<input type="button" value="Upload" id="upload" class="btn btn-outline-success col-sm-2" style="height:40px;font-size:15px;margin-left:15px;">


</div>

</form>

<div class="row" style="margin-top:80px;">

<div id="msg" class="col-sm-12 text-center" style="margin-top:10px;"></div>

<div id="about"  class="col-sm-12">
            

</div>

</div>


       </div>
  </div>
</div>           


<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script>
$(document).ready(function(){

    $('#upload').on('click',function(){
        var heading = $('#heading').val();
        var text = $('#text').val();

        $.ajax({

url:"insert.php",
type:"post",
data:{
    heading:heading,
    text:text
},
success:function(data){
    $("#msg").html(data);
      view_about();
    }

});
    });



    function view_about(){


$.ajax({

type:"POST",
url:"view_about.php",
datatype:"html",
success:function(data){
$("#about").html(data);
}

});


}
view_about();

})
</script>

</body>