<?php

session_start();
session_destroy();
header("location:https://localhost/moviebooking/user/login.php");

?>