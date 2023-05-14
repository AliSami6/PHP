<?php 

$sum = 0;

for($i = 100; $i >= 10; $i-=10)
{
	$sum = $sum + $i;
	
	echo $i . "<br>";
}

echo $sum;

?>