<?php
require("C:\ospanel\domains\localhost\app\database\db.php");

$cart_id = 1;
$product_id = 1;
$quantity = 3;

$post = [
    'cart_id' => $cart_id,
    'product_id' => $product_id,
    'quantity' => $quantity,
];

$id = insert('cart_items', $post);
$last_row = selectOne('cart_items', [ 'id' => $id ]);
tt($last_row);
?>