<?php
require("C:\ospanel\domains\localhost\app\database\db.php");

$id = 1;
$admin = 0;
$name = "";
$surname = "";
$email = "";
$balance = 0;

if ($id != null)
{
    $param = [
        'id' => $id
    ];
    tt(selectOne('users', $param));
}
else
{
    echo 'id cannot null';
}
?>