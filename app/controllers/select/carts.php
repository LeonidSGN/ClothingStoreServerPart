<?php
require("C:\ospanel\domains\localhost\app\database\db.php");

$id = 1;
$user_id = 1;
$session_id = 1337;

$param = [
    'id' => $id
];

tt(selectOne('carts', $param));
?>
