<?php

class RequestFacade {

	public static function getInt($value) {
		// return int or null if value is not integer
		return $value;
	}
	
	public static function getString($value) {
		// return $value without possible html code
		return $value;
	}
	
	public static function getHTML($value) {
		// remove all other than allowed html. H1-H6, P, SPAN and DIV are allowed
		
		return $value;
	}

}



echo "<h2>Testing posted input. Raw Inputs are:</h2>";
$valuea = $_POST['valuea'];
$valueb = $_POST['valueb'];
$valuec = $_POST['valuec'];

?>
<table>
<tr><th>valuea:</th><td><?php echo  htmlentities($valuea) ?></td></tr>
<tr><th>valueb:</th><td><?php echo  htmlentities($valueb) ?></td></tr>
<tr><th>valuec:</th><td><?php echo  htmlentities($valuec) ?></td></tr>
</table>

<h2>Value filtered through getInt method, value and expected value</h2>
<?php
$valueaInt = RequestFacade::getInt($valuea);
$valuebInt = RequestFacade::getInt($valueb);
$valuecInt = RequestFacade::getInt($valuec);

?>
<table>
<tr><th>valuea:</th><td><?php echo  htmlentities( $valueaInt ) ?></td><td>Expect 234</td></tr>
<tr><th>valueb:</th><td><?php echo  htmlentities($valuebInt) ?></td><td>Expect null</td></tr>
<tr><th>valuec:</th><td><?php echo  htmlentities($valuecInt) ?></td><td>Expect null</td></tr>
</table>

<h2>Value filtered through getString method, value and expected value</h2>
<?php
$valueaStr = RequestFacade::getString($valuea);
$valuebStr = RequestFacade::getString($valueb);
$valuecStr = RequestFacade::getString($valuec);

?>
<table>
<tr><th>valuea:</th><td><?php echo  htmlentities( $valueaStr ) ?></td><td>Expect 234</td></tr>
<tr><th>valueb:</th><td><?php echo  htmlentities($valuebStr) ?></td><td>Expect no html</td></tr>
<tr><th>valuec:</th><td><?php echo  htmlentities($valuecStr) ?></td><td>Expect no html</td></tr>
</table>

<h2>Value filtered through getHTML method, value and expected value</h2>
<?php
$valueaHTML = RequestFacade::getHTML($valuea);
$valuebHTML = RequestFacade::getHTML($valueb);
$valuecHTML = RequestFacade::getHTML($valuec);

?>
<table>
<tr><th>valuea:</th><td><?php echo  htmlentities( $valueaHTML ) ?></td><td>Expect 234</td></tr>
<tr><th>valueb:</th><td><?php echo  htmlentities($valuebHTML) ?></td><td>Expect same value.</td></tr>
<tr><th>valuec:</th><td><?php echo  htmlentities($valuecHTML) ?></td><td>Expect no strong tag in html but other tags are kept.</td></tr>
</table>

