<?php

interface HumanTemplate
{
	public function walk($name);
}

class Human implements HumanTemplate
{
	public function walk($name)
	{
		echo $name . " is walking... ";
	}
	
	public function swim($name)
	{
		echo $name . " is swimming... ";
	}
}

$man = new Human;

$man->walk("Anjum");
$man->swim("Anjum");

?>