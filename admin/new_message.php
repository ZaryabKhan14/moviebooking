<?php
include('header.php');

include 'connection.php';



$query=mysqli_query($conn,"SELECT * FROM `contact` order by id desc Limit 5");


?>


<body class="crm_body_bg">

<section class="main_content dashboard_part">
        <div class="main_content_iner ">
            <div class="container plr_30 body_white_bg pt_30">


            <div>   
            <h1 class="text-center" style="font-size:40px;">New Messages</h1>
            <hr>
        </div> 

        <table class='table table-hover table-stripped table-bordered'>

        <div id="success_msg"></div>
            <tr>
                <th>Name</th>
                <th>Subject</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Query</th>
                <th>Action</th>
            </tr>

        <?php

        if ($query!=null) {
            
       
while ($row=mysqli_fetch_array($query)) {
    ?>
   
    
    <tr>
    <td><?php echo $row[1] ?></td>
    <td><?php echo $row[2] ?></td>
    <td><?php echo $row[3] ?></td>
    <td><?php echo $row[4] ?></td>
    <td><?php echo $row[5] ?></td>
    <td><button type="submit" class="btn btn-danger" data-id="<?php echo $row[0] ?>">Delete</button></td>

    </tr>
    
    

    <?php
}
}


else{

    echo '<div class="alert alert-danger text-center">There Is Nothing To show You.</div>';  

}

?>

</table>


</div>
</div>
</section>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script>

$(document).ready(function(){

    $('.btn').on('click',function(){

        var msg_id = $(this).attr("data-id");
    


        swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {


    $.ajax({

url:"delete.php",
type:"post",
data:{
    msg_id:msg_id,
},
success:function(data){
    $("#success_msg").html(data);
      
    }

});
   
  } 
});



    });
})


</script>
</body>