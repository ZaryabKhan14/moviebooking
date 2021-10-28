<?php

include('header.php');

include('connection.php');

$query=mysqli_query($conn,"SELECT * FROM `users` WHERE `status` = 'blocked' ");


?>


<body class="crm_body_bg">

<section class="main_content dashboard_part">
        <div class="main_content_iner ">
            <div class="container plr_30 body_white_bg pt_30">

            <div>   
            <h1 class="text-center" style="font-size:40px;">Blocked Members</h1>
            <hr>
        </div> 


<div id="success_msg"></div>

        <table class='table table-hover table-stripped table-bordered' style="margin-top:30px;">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Role</th>
                <th>Image</th>
                <th>Member Since</th>
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
    
<?php

if ($row[6]== 1) {
 ?>

<td><?php echo "User" ?></td>    

<?php
}

else {
    ?>


<td><?php echo "Admin" ?></td>    


<?php
}
?>

   <td> <img src="<?php echo $row[7]?>" height="50" width="50" style="border-radius:10px;"></td>
    <td><?php echo $row[8] ?></td>

    <td><button type="submit" class="btn btn-danger" data-id="<?php echo $row[0] ?>">Unblock User</button></td>

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js
"></script>
<script>

$(document).ready(function(){

    $('.btn').on('click',function(){



        var user_id = $(this).attr("data-id");
    


        swal({
  title: "Unblock User?",
  text: "This User Will Be Unblocked!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {


    $.ajax({

url:"insert.php",
type:"post",
data:{
    user_id:user_id,
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