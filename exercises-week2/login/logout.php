<?php
ob_start();

// log out the user
?>
<!-- 
html goes here. if and when you need to do more php use php segment
-->
unset($_SESSION['username']);
unset($_SESSION['password']);

<?php
echo ob_get_clean();
