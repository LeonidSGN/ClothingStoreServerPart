<?php
require("C:\ospanel\domains\localhost\app\database\db.php");

$product_id = 1;
$name_product = 'T-shirt Adidas';
$description_product = "";
$price_product = 199;

$param = [
    'name_product' => $name_product
];

tt(selectOne('products', $param));
?>