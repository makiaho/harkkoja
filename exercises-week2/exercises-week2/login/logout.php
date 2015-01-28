<?php
ob_start();
session_start()

// log out the user
?>
<!-- 
html goes here. if and when you need to do more php use php segment
-->

 
<?php
// remove all session variables
session_unset(); 
// destroy the session 
session_destroy(); 

echo "byebye";
ob_end_flush();
?>


 