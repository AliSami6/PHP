<?php
include("student.php");

$admission = new Student();
#echo "Student Name is : ".$admission->student_name="Ali Sami"."</br>";
#echo "Student Department's Name is : ".$admission->department_name;

echo"Department name is :". $admission->get_department();
?>