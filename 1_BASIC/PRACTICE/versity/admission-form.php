<?php 
class Department{
    protected $department_name = "CSE" ;
    protected $department_code ="001";
}
class Student extends Department{
    public $student_name ; 

    public function get_department(){
        return $this->department_name."</br>".$this->department_code;
        
    }
  
  
}
class Admission extends Student{
    
}
$student = new Admission();
echo $student->get_department();

?>
