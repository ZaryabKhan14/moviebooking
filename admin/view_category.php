<?php
include 'connection.php';



$query=mysqli_query($conn,"SELECT * FROM `category` ");

if ($query !=null) {
    
?>
<div id="success_msg"></div>
<?php
echo"
<table id='data' class='table table-hover table-stripped table-bordered'>
<tr> <th><b> Category Name</b></th>
<th><b>Update</b></th>
<th><b>Delete</b></th>

</tr>";


while ($row=mysqli_fetch_array($query)) {
    ?>
   
    
    <tr>
    <td><?php echo $row[1] ?></td>

 <td><a href="category_update.php?id=<?php echo $row[0];?>" class="btn btn-success" >Update</td>
 <td><a href="delete.php?id=<?php echo $row[0];?>" class="btn btn-danger" >Delete</td>
     <!-- <td><button type="submit" class="btn btn-danger" data-id="<?php echo $row[0] ?>"> Delete</button></td> -->


    </tr>
    
    

    <?php
}



echo "</table>";
}


else {
    echo '<div class="alert alert-danger text-center">There Is Nothing To show You.</div>';  

}
?>


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script>
//     $(document).ready(function(){

//         $('.btn').on('click',function(){

//          var cat_id = $(this).attr("data_id");


//  swal({
//   title: "Are you sure?",
//   text: "Once deleted, you will not be able to recover this!",
//   icon: "warning",
//   buttons: true,
//   dangerMode: true,
// })
// .then((willDelete) => {
//   if (willDelete) {


//     $.ajax({

// url:"delete.php",
// type:"post",
// data:{
//     cat_id:cat_id,
// }
// success:function(data){
//     $("#success_msg").html(data);
      
//     }

// });
   
//   } 
// });


//         });
//     })
</script>
 
