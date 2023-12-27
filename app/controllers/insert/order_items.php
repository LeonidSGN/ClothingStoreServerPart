<?php
require("C:\ospanel\domains\localhost\app\database\db.php");

$order_id = 1;
$product_id = 1;
$quantity = 3;
$discount_amount = 0;

$post = [
    'order_id' => $order_id,
    'product_id' => $product_id,
    'quantity' => $quantity,
    'discount_amount' => $discount_amount
];

$id = insert('order_items', $post);
$last_row = selectOne('order_items', [ 'id' => $id ]);
tt($last_row);
?>