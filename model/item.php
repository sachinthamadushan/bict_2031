<?php
include_once "database.php";    
class Item{
    private $connection;
    public function __construct() {
        $this->connection = (new Database())->getConnection();
    }

    public function saveItems($itemName, $itemDesc, $itemPrice): bool|mysqli_result {
        $sql = "INSERT INTO items (item_name, item_desc, item_price) 
        VALUES ($itemName, $itemDesc, $itemPrice)";
        return $this->connection->query($sql);
    }
}