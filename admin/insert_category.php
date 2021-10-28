<?php

include 'connection.php';

if (isset($_POST['category'])) {
    
$category=$_POST['category'];



$q="INSERT INTO `category`(`category_id`, `category_name`) VALUES ('','$category')";

$run=mysqli_query($conn,$q);


echo '<div class="alert alert-success">New Category Added Successfully</div>';  

}



?>