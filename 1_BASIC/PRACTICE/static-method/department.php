<?php 
class Bechelor{
    public static $Student_ID = "183002109";
    public static $Student_Name = "Muhammad Ali Sami";
    public static $Student_Department = "Computer Science And Engineering";
    public static $Student_passing_year = 2022;
    public static function print(){
        echo" Student Name is: ". self::$Student_Name ."<br>";
    }
    
}
Bechelor::print();
echo " Student ID :". Bechelor::$Student_ID;
echo "<br>";
echo " Student Department: ". Bechelor::$Student_Department . "<br>";
echo " Student passed year :". Bechelor::$Student_passing_year;
?>