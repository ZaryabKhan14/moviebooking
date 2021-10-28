<?php
include 'connection.php';



$query=mysqli_query($conn,"SELECT * FROM `about` ");

if ($query !=null) {
 

    echo"
    <table id='data' class='table table-hover table-stripped table-bordered'>
    <tr> <th><b> Heading</b></th>
    <th><b>Text</b></th>
    <th><b>Update</b></th>
 
    
    </tr>";

while ($row=mysqli_fetch_array($query)) {
    ?>
   
    
    <tr>
    <td><?php echo $row[1] ?></td>
    <td ><?php echo $row[2] ?></td>

    
  
   <td><a href="edit_about.php?id=<?php echo $row[0];?>" class="btn btn-success" data-toggle='modal' data-target='exampleModal' >Update</td>
   
    </tr>
    
    

    <?php
}



echo "</table>";
}


else {
    echo '<div class="alert alert-danger text-center">There Is Nothing To show You.</div>';  
}
?>