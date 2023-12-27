<?php
require("C:\ospanel\domains\localhost\app\database\db.php");

$id = 1;
$cart_id = 1;
$product_id = 1;
$quantity = 3;

$param = [
    'id' => $id,
];

tt(selectOne('cart_items', $param));
?>