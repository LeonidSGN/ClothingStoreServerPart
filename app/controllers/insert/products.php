<?php
require("C:\ospanel\domains\localhost\app\database\db.php");

$name_product = 'T-shirt Adidas';
$description_product = "Made for comfort and easy style, the adidas Badge of Sport shines from the front putting your adidas pride on full display.";
$price_product = 199;

$post = [
    'name_product' => $name_product,
    'description_product' => $description_product,
    'price_product' => $price_product,
];

$id = insert('products', $post);
$last_row = selectOne('products', [ 'product_id' => $id ]);
tt($last_row);
?>