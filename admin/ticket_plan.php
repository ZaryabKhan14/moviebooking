<?php
include('header.php');

?>



<body class="crm_body_bg">

<section class="main_content dashboard_part">
        <div class="main_content_iner ">
            <div class="container plr_30 body_white_bg pt_30">


            <div>   
            <h1 class="text-center" style="font-size:40px;">Ticket Plans</h1>
            <hr>
        </div> 
       

        <form method="post" >

      

    <div class="row" >
    <div class="col-sm-4">
    <label for="">Ticket Class Name</label>
    <input type="text" placeholder="Ticket Class Name" id="ticket_class" class="form-control form-group" required="" style="height:40px;font-size:15px;">
    </div>

    <div class="col-sm-4">
    <label for="">Set Ticket Price</label>

    <input type="number" value="300" id="price" min="300" class="form-control form-group" required="" style="height:40px;font-size:15px;">
    </div>
</div>
<div class="row" >
<div class="col-sm-4">
    <input type="button" value="Add Ticket Class" id="Add" class="btn btn-outline-success" style="height:40px;font-size:15px;margin-left:0px;">
    </div>
</div>



</form>


<div class="row" style="margin-top:80px;">

<div id="success_msg" class="col-sm-12 text-center" style="margin-top:10px;"></div>

<div id="all_tickets"  class="col-sm-12">
            

</div>

</div>



     </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
$(document).ready(function(){


    $('#Add').on('click',function(){
        

        var ticket_class = $('#ticket_class').val();
        var price = $('#price').val();
        $.ajax({

url:"insert.php",
type:"post",
data:{
    ticket_class:ticket_class,
    price:price
},
success:function(data){
    $("#success_msg").html(data);
      view_tickets();
    }

});

    });


    
    function view_tickets(){


$.ajax({

type:"POST",
url:"view_tickets.php",
datatype:"html",
success:function(data){
$("#all_tickets").html(data);
}

});


}
view_tickets();


})
</script>

</body>