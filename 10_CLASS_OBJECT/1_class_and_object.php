<?php
 
class Person
{
	public $name = "Anjum";
	
	public function walking()
	{
		echo $this->name . " is a Faculty!";
	}
}

$p1 = new Person;

# echo "<pre>";

# var_dump($p1);