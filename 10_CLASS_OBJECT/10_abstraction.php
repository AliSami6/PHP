<?php
abstract class AbstractClass
{
    abstract protected function abstractFunction();

    public function printOut() {
        echo $this->abstractFunction() . "but I am called from inside AbstractClass ... <br />";
    }
}

class ConcreteClass extends AbstractClass
{
    public function abstractFunction() {
        return "I am abstract function, ";
    }

}

$object = new ConcreteClass;
$object->printOut();

?>