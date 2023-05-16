<?php
	
class mathematics
{
	protected $number;
	
	public function setNumber($number_receiver)
	{
		$this->number = $number_receiver;
	}
}

class divide extends mathematics
{

	public function divideByTwo()
	{
		$result = $this->number / 2;
		
		return $result;
	}
}

$divideObject = new divide;
$divideObject->setNumber(74);
echo $divideObject->divideByTwo();

?>