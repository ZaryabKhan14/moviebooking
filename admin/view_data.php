<?php
include 'connection.php';


$query=mysqli_query($conn,"SELECT * FROM `footer` ");

if ($query !=null) {
    

echo"
<table id='data' class='table table-hover table-stripped table-bordered'>
<tr> <th><b> Movie</b></th>
<th><b>Informative</b></th>
<th><b>Account</b></th>
<th><b>Update</b></th>

</tr>";

while ($row=mysqli_fetch_array($query)) {
    ?>
   
    
    <tr>
    <td><?php echo $row[1] ?></td>
    <td ><?php echo $row[2] ?></td>
    <td ><?php echo $row[3] ?></td>
    
  
   <td><a href="update.php?id=<?php echo $row[0];?>" class="btn btn-success" data-toggle='modal' data-target='exampleModal' >Update</td>
   
    </tr>
    
    

    <?php
}

echo "</table>";
}

else{

    echo '<div class="alert alert-danger text-center">There Is Nothing To show You.</div>';  

}
?>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
