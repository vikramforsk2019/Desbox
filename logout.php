<?php
// Starting session
session_start();
 
// Destroying session
session_destroy();
header("Location:login.php");
?>
