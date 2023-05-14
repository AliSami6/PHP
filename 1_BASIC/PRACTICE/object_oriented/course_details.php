<?php
include("class-lib.php");
$job_placement_course = new Course();
 echo $job_placement_course->course_name=" React js "."<br>";
$poly_intern_course = new Course();

$job_placement_course->set_course_details("Wordpress","20","Wordpress theme, php , javascript , jquery ","6 to 12 months");

echo $job_placement_course->get_course_details()."</br>";
$sopken_course = new Course();
$sopken_course->set_course_details(" English"," 4k"," vocubolary , english grammer "," 4 months");
echo $sopken_course->get_course_details();

?>