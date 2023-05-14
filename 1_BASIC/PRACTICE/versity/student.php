<?php
include("department.php");
class Student extends Department{
    public $student_name ; 
  
    public $other_student_info;

    public function get_department(){
        return $this->department_name ="EEE"; 
    }
}
?>