<?php
trait CommonTrait 
{
    public function printName() 
	{
        return "Nirjhor Anjum<br>";
    }
}

class TestClass 
{
    use CommonTrait;
}

class AnotherClass 
{
    use CommonTrait;
}

$tc = new TestClass();
echo $tc->printName();

$ac = new AnotherClass();
echo $ac->printName();

?>