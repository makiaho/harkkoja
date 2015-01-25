<?php
ob_start();
?>



<!doctype html>

<html>

   <h1>
<?php
echo "Hello. Login";
?>
</h1>
	

<body>

<form method="post" action="logged.php">
<table>
<tr><th>USERNAME:</th><td><input type="text" name="username"  /></td></tr>
<tr><th>PASSWORD:</th><td><input type="password" name="password"   /></td></tr>

</table>

<input type="submit" />
</form>

</html>




<?php
echo ob_get_clean();



 

