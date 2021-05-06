<?php
session_start();


// destroy all session variables
session_destroy();

header("location:login.php");
?>