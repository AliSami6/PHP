<?php

class mathematics
{
	private $number;
	
	public function result()
	{
		return "Your number is: " . $this->number;
	}
	public function setNumber($number){
		$this->number = $number;
	}
}

$math = new mathematics();

$math->setNumber(10);// can access in that specific class 

echo $math->result();

?>