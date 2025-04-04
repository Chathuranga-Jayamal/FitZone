<?php
session_start(); 

// Destroy all session data
session_unset();  
session_destroy(); 

// Back to login page
header("Location: ../login/login.php");
exit();
?>
