<?php
include("C:\ospanel\domains\localhost\app\database\db.php");

if (isset($_POST['login']))
{
    $email = $_POST['login'];
    $pass = $_POST['pass'];


    $param = [
        'email' => $email,
    ];

    $res = (selectOne('users', $param));
    if ($res == null)
    {
        echo '<p style="color: red; position: absolute; z-index: 999; top: 130px; left: 90px" for="error" name="error">Wrong login</p>';
    }
    else
    {
        if (password_verify($pass, $res['password']))
        {
            $myArrayEncoded = base64_encode(serialize($res));
             header("Location: my.php?data=$myArrayEncoded");
             exit();
        }
        else
        {
            echo '<p style="color: red; position: absolute; z-index: 999; top: 130px; left: 90px" for="error" name="error">Wrong password</p>';
        }
    }
}
?>

