<?php
class base{
    public static $address = "Dhalpur jatrabary";

    public static function display(){
        echo self::$address;
    }
}

base::$address;
base::display();
?>