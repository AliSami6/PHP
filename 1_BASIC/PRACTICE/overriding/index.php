<?php
class Role{
    public $name;
    public function set_role($name){
         $this->name = $name;
    }
    public function get_role(){
        return $this->name;
    }
}
class Shop extends Role{
    public function set_role($name){
        if($name=="sami"){
            $this->name = "Employee of Rose Caffe";
        }
        else{
            $this->name = "Not Employee of Rose Caffe";
        }
    }
    public function get_role(){
        return $this->name;
    }
}
$new_shop = new Shop();
$new_shop->set_role("sami");
echo $new_shop->get_role();
?>