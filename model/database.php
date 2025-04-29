<?php

class Database{
    private $connection;
    public function __construct(){
        $this->connection = new mysqli(
            "localhost", 
            "root", 
            "Sachi@123", 
            "shop");
    }
    public function getConnection(){
        return $this->connection;
    }
}