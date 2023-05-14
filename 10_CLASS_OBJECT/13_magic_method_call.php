<?php 
class MyClass
{
	public function nirjhor() 
	{
		return "This is nirjhor() function";
	}
	
	public function __call($method, $property)
	{
		echo "Method: " . $method;
		
		echo "<br /><br />"; # Useless
		
		echo "Property are: <br />";
		print_r($property);
	}
}

$object = new MyClass;

$object->anjum("A", "B", "C");

?>
