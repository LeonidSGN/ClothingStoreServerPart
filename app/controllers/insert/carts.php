<?php
require("C:\ospanel\domains\localhost\app\database\db.php");

$user_id = 1;
$session_id = 1337;

$post = [
    'user_id' => $user_id,
    'session_id' => $session_id
];

$id = insert('carts', $post);
$last_row = selectOne('carts', [ 'id' => $id ]);
tt($last_row);
?><?php
