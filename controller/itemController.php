<?php
include_once "../model/item.php";
$item = new Item();
$server = $_SERVER['REQUEST_METHOD'];
switch ($server) {
    case 'POST':
        $itemName = $_POST['itemName'];
        $itemDesc = $_POST['itemDesc'];
        $itemPrice = $_POST['itemPrice'];
        $result = $item->saveItems(
            $itemName, 
            $itemDesc, 
            $itemPrice);
        break;
    default:
        echo "Error";
        break;
}
