<?php
require("C:\ospanel\domains\localhost\app\database\db.php");

$id = 1;
$order_id = 1;
$product_id = 1;
$quantity = 3;
$discount_amount = 0;

$param = [
    'id' => $id,
];

tt(selectOne('order_items', $param));
?>