<?php
include("C:\ospanel\domains\localhost\app\database\db.php");

if (isset($_POST['name']))
{
    $admin = 0;
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $balance = 0;


    $post = [
        'admin' => $admin,
        'user_name' => $name,
        'user_surname' => $surname,
        'email' => $email,
        'password' => $pass,
        'balance' => $balance
    ];

    $id = insert('users', $post);
    $last_row = selectOne('users', [ 'id' => $id ]);
    $myArrayEncoded = base64_encode(serialize($last_row));
    header("Location: my.php?data=$myArrayEncoded");
    exit();
}
?>