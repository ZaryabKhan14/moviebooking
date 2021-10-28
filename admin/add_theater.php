<?php
include('header.php');

?>

<body class="crm_body_bg">

<section class="main_content dashboard_part">
        <div class="main_content_iner ">
            <div class="container plr_30 body_white_bg pt_30">


            <div>   
            <h1 class="text-center" style="font-size:40px;">Add New Theater</h1>
            <hr>
        </div> 
    

        <form method="post"  enctype="multipart/form-data">

        

<div class="row" style="margin-top:40px;">
<div class="col-sm-6">
<label for="">Theater Name</label>
<input type="text" id="theater_name" placeholder="Enter Theater Name" class="form-group form-control" required="">

</div>

<div class="col-sm-6">
<label for="">Theater Address</label>
<input type="text" id="address" placeholder="Enter Theater Address" class="form-group form-control" required="">

</div>
</div>


<div class="row" style="margin-top:40px;">

<div class="col-sm-6">
<label>Select city</label>

 
 <select class="form-control"  id="city">
    <option value=''>Select City</option>
    <option value='karachi'> Karachi</option>
    <option value='Islamabad'>Islamabad</option>
    <option value='Lahore'>Lahore</option>
    <option value='Peshawar'>Peshawar</option>
    <option value='Multan'>Multan</option>
    <option value='Rawalpindi'>Rawalpindi</option>
    <option value='Faislabad'>Faislabad</option>
    <option value='Hyderabad'>Hyderabad</option>
    <option value='Quetta'>Quetta</option>
  </select>   
</div>

<div class="col-sm-3">
<input type="button" value="Add Theater" id="Add" class="btn btn-outline-success" style="height:40px;font-size:15px;margin-top:28px;">
</div>

</div>





</form>


<div class="row" style="margin-top:80px;">

<div id="success_msg" class="col-sm-12 text-center" style="margin-top:10px;"></div>

<div id="all_theaters"  class="col-sm-12">
            

        
</div>
</div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>

$(document).ready(function(){

    $('#Add').on('click',function(){
        var theater_name = $('#theater_name').val();
       var address = $('#address').val();
        var city = $('#city').val();


        $.ajax({

url:"insert.php",
type:"post",
data:{
    theater_name:theater_name,
    address:address,
    city:city
},
success:function(data){
    $("#success_msg").html(data);
    view_theater();
    }

});


    });


    function view_theater(){


$.ajax({

type:"POST",
url:"view_theater.php",
datatype:"html",
success:function(data){
$("#all_theaters").html(data);
}

});


}
view_theater();


})



</script>
</body>
