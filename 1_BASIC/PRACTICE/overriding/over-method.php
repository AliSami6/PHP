<?php
    class Role{
      public $name;
        public function set_name($name){
            if($name=="Sami"){
                $this->name = "doing well";
            }else{
                $this->name = "nothing it";
            }
            
        }
        public function get_position(){
            return $this->name;
        }
    }  
    $m = new Role();
    $m->set_name("Sami");
    echo $m->get_position();
    
    class Mam extends Role{
        public function set_name($name){
            return $this->name = $name;
        }
    }
    $p = new Mam();
    $p->set_name("jahid");
    echo $p->get_position();
?>