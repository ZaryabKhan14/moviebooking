<?php
include 'connection.php';



$query=mysqli_query($conn,"SELECT * FROM `theater` ");

if ($query !=null) {
    
echo"
<table id='data' class='table table-hover table-stripped table-bordered'>
<tr> <th><b> Theater Name</b></th>
<th><b> Theater Address </b></th>
<th><b> City</b></th>
<th><b>Action</b></th>
<th><b>Action</b></th>

</tr>";


while ($row=mysqli_fetch_array($query)) {
    ?>
   
    
    <tr>
    <td><?php echo $row[1] ?></td>
    <td><?php echo $row[2] ?></td>
    <td><?php echo $row[3] ?></td>

 <td><a href="theater_update.php?id=<?php echo $row[0];?>" class="btn btn-success" >Update</td>
 <td><a href="delete.php?id=<?php echo $row[0];?>" class="btn btn-danger" data-toggle='modal' data-target='exampleModal' >Delete</td>

    </tr>
    
    

    <?php
}



echo "</table>";
}


else {
    echo '<div class="alert alert-danger text-center">There Is Nothing To show You.</div>';  

}
?>
