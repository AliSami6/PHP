<?php 
 class Element{
    public $quantity;
    public $product_name;
    public $product_price;
    function setProduct($name,$price,$qty){
        $this->product_name = $name;
        $this->product_price = $price;
        $this->quantity = $qty;
    }
    function ProductList(){
        return "Product Name: ".$this->product_name." Product Price: ".$this->product_price." Product Quantity:".$this->quantity;
    }
 }
?>