<?php
include('header.php');

?>



<body class="crm_body_bg">

<section class="main_content dashboard_part">
        <div class="main_content_iner ">
            <div class="container plr_30 body_white_bg pt_30">


            <div>   
            <h1 class="text-center" style="font-size:40px;">Add Timings And SLots</h1>
            <hr>
        </div> 
    

        <form method="post"  enctype="multipart/form-data">

        

<div class="row" style="margin-top:40px;">
<div class="col-sm-6">
<label for="">Timing</label>
<input type="time" id="timing" placeholder="" class="form-group form-control" required="">

</div>

<div class="col-sm-6">
<label>Select city</label>
<select class="form-control"  id="slot">
    <option value=''>Select Slot</option>
    <option value='Morning'>Morning</option>
    <option value='Noon'>Noon</option>
    <option value='Evening'>Evening</option>
    <option value='Night'>Night</option>

  </select>
</div>
</div>

<div class="row" style="margin-top:40px;">

<div class="col-sm-3">
<input type="button" value="Add Slot" id="Add" class="btn btn-outline-success" style="height:40px;font-size:15px;">
</div>

</div>





</form>


<div class="row" style="margin-top:80px;">

<div id="success_msg" class="col-sm-12 text-center" style="margin-top:10px;"></div>

<div id="all_slots"  class="col-sm-12">
            

        
</div>
</div>
</section>



<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>

$(document).ready(function(){

    $('#Add').on('click',function(){
        var timing = $('#timing').val();
        var slot = $('#slot').val();


        $.ajax({

url:"insert.php",
type:"post",
data:{
    timing:timing,
    slot:slot
  
},
success:function(data){
    $("#success_msg").html(data);
    view_slots();
    }

});


    });


    function view_slots(){


$.ajax({

type:"POST",
url:"view_slots.php",
datatype:"html",
success:function(data){
$("#all_slots").html(data);
}

});


}
view_slots();


})


</script>
</body>