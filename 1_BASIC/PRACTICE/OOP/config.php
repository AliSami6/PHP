<?php
 class connection{
    public $hostname;
    public $username;
    public $dbname;

    function setConnection($setHostname,$setUserName,$setDBname){
        $this->hostname = $setHostname;
        $this->username = $setUserName;
        $this->dbname = $setDBname;
    }
    function get_hostname(){
        return $this->hostname;
    }
    function get_dbname(){
        return $this->dbname;
    }
 }