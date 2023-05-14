<?php
class person{
   public $name ;
   public $phone_no ;
   public $email;
   public $address;
   public $education;
   public $mother_name;
   public $father_name;

   function setParentName($MotherName,$FatherName){
      $this->mother_name = $MotherName;
      $this->father_name = $FatherName;
   
   }
   function getParentName(){
       return $this->mother_name."<br>".$this->father_name;
      
 
   }
/*
    function Sami($new_name,$new_phone_no,$Nemail,$Naddress,$edu){
      return "Student Details: ".$this->name= $new_name.$this->email= $Nemail.$this->address=$Naddress.$this->education=$edu;
    }

    function Adib($new_name,$new_phone_no,$Nemail,$Naddress,$edu){
        return "Student Details: ".$this->name= $new_name.$this->email= $Nemail.$this->address=$Naddress.$this->education=$edu;
    }
*/
   


}
?>