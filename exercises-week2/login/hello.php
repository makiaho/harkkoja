<?php
ob_start();
?>
<!-- 
html goes here. if and when you need to do more php use php code segment

print the username of the logged in user.
-->

<a href="logout.php">Log Out</a>

<?php
echo ob_get_clean();
