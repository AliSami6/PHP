<?php
    $name = $_GET['name'];
    $fee = $_GET['fee'];
    $outline = $_GET['outline'];
    $duration = $_GET['duration'];

    include("class-lib.php");
    $course_details = new Course();

    $course_details->set_course_details($name,$fee,$outline,$duration);

    echo $course_details->get_course_details();

?>