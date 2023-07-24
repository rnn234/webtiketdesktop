<?php 
 include 'function.php';
session_start();
session_destroy();
 
header("Location: login.php");
 
?>