<?php
class Connection{
    protected $hostname;
    private $username;
    public $password;
    public $dbname;
   
    #function set_connection($host,$user,$pass,$db){
    #    $this->hostname = $host;
    #    $this->username = $user;
    #    $this->password = $pass;
    #    $this->dbname = $db;
    #}
    
    function __construct($host,$user,$pass,$db){
        $this->hostname = $host;
        $this->username = $user;
        $this->password = $pass;
        $this->dbname = $db;
    }
    function get_connection(){
        return $link = mysqli_connect($this->hostname,$this->username,$this->password,$this->dbname);
    }
   
    
}
?>