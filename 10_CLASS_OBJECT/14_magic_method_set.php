<?php
class MyClass
{
	public function __set($var_name, $var_value)
	{
		echo 'The value of <b>'.$var_name.'</b> is <b>'.$var_value. '</b>';
	}
}

$object = new MyClass;

$object->name = 'Nirjhor Anjum';

?>
