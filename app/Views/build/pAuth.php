<?php
include("C:\ospanel\domains\localhost\app\controllers\insert\authorization.php");
?>

<link rel='stylesheet' href='../style/Style.css'>
<form action="" method="get" class="form-example">
    <div class="navbar">
        <h2>Best clothes</h2>
        <h2>*Description*</h2>
        <a href="pReg.php">Регистрация</a>
        <a href="pAuth.php">Авторизация</a>
    </div>
</form>

<form action="pAuth.php" method="post" class="form-example">
    <div class="form-example">
        <label for="login">Enter your email: </label>
        <input style="margin-left: 25px" type="email" name="login" id="login" required />
    </div>
    <div class="form-example">
        <label for="pass">Enter your password: </label>
        <input type="password" minlength="1" name="pass" id="pass" required />
    </div>
    <div class="form-example">
        <button style="margin-left: 75px; margin-top: 20px" type="submit"> Authorization </button>
    </div>
    <div class="form-example">
        <label style="color: transparent; margin-top: 140px" for="error" name="error">Wrong login or password </label>
    </div>
</form>


<form action="" method="get" class="form-example">

    <div class="form-example">
        <h2 style="position: absolute; z-index: 999; top:   700px; left: 650px">*Contacts*</h2>
    </div>
</form>