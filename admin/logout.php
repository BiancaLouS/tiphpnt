<?php 
   
   session_name('chuleta');
    session_start();
    session_destroy();
    header('location: ../index.php');
    exit;

?>