<?php
ob_start();
session_start();
// create session and add username there




  if(empty($_POST['username']))
    {
      //mitäs sit?
      echo "annoit tyhjan kayttajanimen <BR>";
    }
     
    if(empty($_POST['password']))
    {
        //mitäs sit?
        echo "annoit tyhjan salasanan <BR>";
    }
     
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);




  $_SESSION['username'] = $username;
  $_SESSION['password'] = $password;
  
  
var_dump($_SESSION);


?>
<!-- 
html goes here. if and when you need to do more php use &lt;?php and ?&gt;

Nyt siis pitäisi tännepäin olla tullut username ja se pitäisi välittää
tuolle hello.php:lle.
Lisäksi tähän pitäisi käyttää sessionia...




-->
<?php



?>

<a href="hello.php">Say me hello</a>

<?php
 ob_end_flush();
?>


