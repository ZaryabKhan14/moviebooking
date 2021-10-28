<?php
include 'connection.php';



$query=mysqli_query($conn,"SELECT * FROM `timing_slots` ");

if ($query !=null) {
    
echo"
<table id='data' class='table table-hover table-stripped table-bordered'>
<tr> <th><b>Slot</b></th>
<th><b>Timing</b></th>
<th><b>Action</b></th>
<th><b>Action</b></th>

</tr>";


while ($row=mysqli_fetch_array($query)) {
    ?>
   
    
    <tr>
    <td><?php echo $row[1] ?></td>
    <td><?php echo $row[2] ?></td>

 <td><a href="slot_update.php?id=<?php echo $row[0];?>" class="btn btn-success" >Update</td>
 <td><a href="delete.php?id=<?php echo $row[0];?>" class="btn btn-danger" >Delete</td>

    </tr>
    
    

    <?php
}



echo "</table>";
}


else {
    echo '<div class="alert alert-danger text-center">There Is Nothing To show You.</div>';  

}
?>
