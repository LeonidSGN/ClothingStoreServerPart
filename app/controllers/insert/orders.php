<?php
require("C:\ospanel\domains\localhost\app\database\db.php");

$user_id = 1;
$total_amout = 597;

$post = [
    'user_id' => $user_id,
    'total_amout' => $total_amout
];

$id = insert('orders', $post);
$last_row = selectOne('orders', [ 'id' => $id ]);
tt($last_row);
?>