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
session_start();


var_dump($_SESSION);


echo "Hello: ";
if(isset($_SESSION['username'])) echo ($_SESSION['username']);
if(isset($_SESSION['password'])) echo ($_SESSION['password']);


if(isset($_SESSION['username'])) 
{
    $teksti='LOGOUT';
    $linkki = 'logout.php' ;
}
else {
    
     $teksti = 'LOGIN';
     $linkki = 'login.php';
}
       

?>



<a href="<?php echo $linkki; ?>"><?php echo $teksti; ?></a>

<?php
ob_end_flush();