<?php
class Personal{
    public static $name = "introduction to static function in php"."</br>";
    public static function show(){
        echo self::$name;
    }
}
Personal::$name;
 echo Personal::$name;
Personal::show();
?>