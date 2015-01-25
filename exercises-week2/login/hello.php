<?php
ob_start();
?>
<!-- 
<phphtml goes here. if and when you need to do more php use php code segment

print the username of the logged in user.
-->
<?php



 //$_SESSION['username'] = 'r';
 // $_SESSION['password'] = 'r';

//MIKSI TODO tuo keno?
\session_start();


var_dump($_SESSION);


echo "Hello: ";
echo ($_SESSION['username']);

echo "<BR>Salasanasi oli: ";
echo ($_SESSION['password']);


?>




<a href="logout.php">Log Out</a>

<?php
echo ob_get_clean();
