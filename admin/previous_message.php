<?php
include('header.php');

include 'connection.php';



$query=mysqli_query($conn,"SELECT * FROM `contact`");


?>


<body class="crm_body_bg">

<section class="main_content dashboard_part">
        <div class="main_content_iner ">
            <div class="container plr_30 body_white_bg pt_30">


            <div>   
            <h1 class="text-center" style="font-size:40px;">Previous Messages</h1>
            <hr>
        </div> 

        <table class='table table-hover table-stripped table-bordered'>
            <tr>
                <th>Name</th>
                <th>Subject</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Query</th>
                <th>Delete</th>
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
 <td><a href="delete.php?id=<?php echo $row[0];?>" class="btn btn-danger" data-toggle='modal' data-target='exampleModal' >Delete</td>

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


</body>