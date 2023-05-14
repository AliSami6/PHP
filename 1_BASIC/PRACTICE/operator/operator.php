<?php
$x = 50;

$x > 20 ? $z = "Greater" : $z = "Smaller";

echo $z;

echo "<br>";


$str = "My name is Sami";

$arr = explode(" ",$str); /* convert string to array */

echo"<pre>";

print_r($arr);

echo "</pre>";

echo "<br>";


$a = array('This','is','metro rail','starts uttara to agarga');

$str = implode(" ",$a);

echo $str;

?>