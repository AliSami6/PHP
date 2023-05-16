<?php
interface calculation{
    public function add($number);
}
class calculator implements calculation{
    public function add($number){
        echo " ADDITION IS :".$number+1;
    }
    public function sub($number){
        echo " SUBTRACTION IS :".$number- 1;
    }
    public function divide($number){
        echo " DIVITION IS :".$number /2;
    }

     public function multiply($number){
        echo " MULTIPLY IS :".$number *3;
    }
}

$MATH = new calculator();

$MATH->add(6);
echo "<br>";
echo "<br>";
$MATH->sub(5);
echo "<br>";
echo "<br>";
$MATH->divide(10);
echo "<br>";
$MATH->multiply(4);
?>