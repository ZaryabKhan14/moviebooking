
<?php
include 'connection.php';



if (isset($_POST['login'])) {
    $username = $_POST['username'];  
    $password = $_POST['password'];  
      
       
      
        $sql = "SELECT * FROM `users` WHERE `username`= '$username' && `password` = '$password'";  
        $result = mysqli_query($conn, $sql);  
       
      
  
        if(mysqli_num_rows($result)== 1){  
           
            $row =mysqli_num_rows($result);   


            if ($row[6]==1) {
                $_SESSION["id"] = $row[0];
            $_SESSION["name"] = $row[1];
            header("location:user/index.php");
            }
            else {
                $_SESSION["id"] = $row[0];
                $_SESSION["name"] = $row[1];
                header("location:admin/index.php");
            }

           
              
        }  
        else{  
           
            echo '<div class="alert alert-danger alert-dismissible fade show col-sm-12" role="alert" style="padding:50px;margin-bottom:-50px;">
            <center><strong>Login Failed!</strong> We Did Not Find Any Account Matching This User Name Or Password.</center>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';          }     
}

?>
