<?php
include('config.php');
$db_conn = new Connection("localhost","root","","learn");
#$db_conn->set_connection("localhost","root","","learn");
echo $db_conn->hostname;
 if($db_conn->get_connection()){
    echo "connection done";
 }else{
    echo "connection fail";
 }

?>