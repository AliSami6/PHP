<?php 
function sum($math,$eng,$bn,$sc){
	$s = $math + $eng + $bn + $sc;
	
	return $s;
}
function percentage($st){
	$per = $st/4;
	echo $per ." %";
	
}
$total = sum(70,60,59,65);

percentage($total);


echo "<br>";


echo " Function Argument By reference.<br>";
/* return by value */
function web($str){
	$str = "Web Design" ;
	
}

$b = "web development.<br>";

web($b);

echo $b;


/* return by reference */
function GR(&$str){
	$str = "Web Design"."<br>" ;
	
}

$c = "C++";
GR($c);

echo $c."<br>";


/*  factorial with recursive function */


function Factorial($n){
	
	if($n==0){
		return 1;
	}else{
		return ($n * Factorial($n-1));
	}
	
}

echo Factorial(5);
?>