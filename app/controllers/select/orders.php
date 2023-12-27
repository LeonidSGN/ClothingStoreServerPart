<?php
require("C:\ospanel\domains\localhost\app\database\db.php");

$id = 1;
$user_id = 1;
$total_amout = 597;

$param = [
    'id' => $id
];

tt(selectOne('orders', $param));
?>