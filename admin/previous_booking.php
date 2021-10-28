<?php
include('header.php');

include 'connection.php';

$query=mysqli_query($conn,"SELECT movies.movie_name,name,ticket_class,amount,booking.payment FROM booking INNER JOIN movies ON booking.movie_id = movies.id");

$query2=mysqli_query($conn,"SELECT * FROM `booking`");
$row2=mysqli_fetch_array($query2);
?>


<body class="crm_body_bg">

<section class="main_content dashboard_part">
        <div class="main_content_iner ">
            <div class="container plr_30 body_white_bg pt_30">


            <div>   
            <h1 class="text-center" style="font-size:40px;">Previous Bookings</h1>
            <hr>
        </div> 

        <table class='table table-hover table-stripped table-bordered'>

        <div id="success_msg"></div>
            <tr>
                <th>Name</th>
                <th>Movie Name</th>
                <th>Ticket Class</th>
                <th>Amount</th>
                <th>Payment</th>
                <th>Action</th>
            </tr>

        <?php

        if ($query!=null) {
            
       
while ($row=mysqli_fetch_array($query)) {
    ?>
   
    
    <tr>
    <td><?php echo $row['name'] ?></td>
    <td><?php echo $row['movie_name'] ?></td>

    <?php
    if ($row['ticket_class']=='700') {
    ?>
    
    <td><?php echo "Gold" ?></td>
    <?php
    }
    
    elseif ($row['ticket_class']=='600') {
    ?>
    
    <td><?php echo "Platinum" ?></td>
    <?php
    }

   else {
    ?>
    
    <td><?php echo "Box" ?></td>
    <?php
    }
    ?>
    <td><?php echo $row['amount'] ?></td>
    <td><?php echo $row['payment'] ?></td>
    <td><button type="submit" class="btn btn-danger" data-id="<?php echo $row2[0]; ?>">Delete</button></td>


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

        var booking_id = $(this).attr("data-id");
    


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
    booking_id:booking_id,
},
success:function(data){
$(location).attr('href', 'https://localhost/moviebooking/admin/previous_booking.php')

    $("#success_msg").html(data);
      
    }

});
   
  } 
});



    });
})


</script>
</body>