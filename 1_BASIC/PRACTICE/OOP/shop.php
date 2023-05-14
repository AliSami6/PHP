<?php
include("product.php");
include("config.php");
$product  = new Element();

$product->setProduct("Fan","2000","2");
 
echo $product->ProductList();

$con = new connection();
$con->setConnection("localhost","root","","sysdb");

echo $con->get_hostname();
?>