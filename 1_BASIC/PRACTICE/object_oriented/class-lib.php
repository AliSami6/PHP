<?php
class Course {
  // data member set , get
  public $course_name;
  public $course_outline;
  public $course_fee;
  public $course_duration;

  //set 
  // get 
  //functions / methods

    function set_course_details($name,$fee,$outline,$duration){
        $this->course_name=$name;
        $this->course_fee=$fee ;
        $this->course_outline=$outline;
        $this->course_duration=$duration;
    }
    function get_course_details(){
        return "Your Course name is ".$this->course_name." Your course fee is ".$this->course_fee." Your course outline is ".$this->course_outline." Course Duration is : ".$this->course_duration;
    }
    
}
?>