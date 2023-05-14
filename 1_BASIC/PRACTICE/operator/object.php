<?php 
class fruit{
	
	public $fruitName;
	public $fruitWg;
	
	function displayFruit($fruitName,$fruitWg){
		
		$this->name = $fruitName;
		$this->weight = $fruitWg;
		
		return "Fruit Name: ".$this->name ."<br>". "Fruit weight: " .$this->weight;
		
	}
	
}

$fruits = new fruit();

echo $fruits->displayFruit("mango","2Kg");



?>