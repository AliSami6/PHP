<?php
function family($person1,$person2){
	echo $person1 ." " .$person2."<br><br>" ;
}
function sum($a,$b){
  echo $a+$b." <br>";	
}

family("Ashik","Anika");

sum(50,70);

function Profile($Name="adnan",$Age=25){
   $ViewN = " Name is :". $Name ."<br>" ."Age is : ".$Age  ;

   return $ViewN;   
}

echo Profile("adnan sami", 27);


?>