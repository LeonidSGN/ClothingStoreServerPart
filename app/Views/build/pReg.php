<?php
include("C:\ospanel\domains\localhost\app\controllers\insert\users.php");
?>
<link rel='stylesheet' href='../style/Style.css'>
<form action="" method="get" class="form-example">
    <div class="navbar">
        <h2>Best clothes</h2>
        <h2>*Description*</h2>
        <a href="pAuth.php">Авторизация</a>
        <a href="pReg.php">Регистрация</a>
    </div>
</form>

<form action="pReg.php" method="post" class="form-example">
    <div class="form-example" >
        <label for="name">Enter your name: </label>
        <input style="margin-left: 25px" type="text" pattern="[A-Za-z]+" name="name" id="name" required />
    </div>
    <div class="form-example">
        <label for="surname">Enter your surname: </label>
        <input style="margin-left: 5px" type="text" pattern="[A-Za-z]+" name="surname" id="surname" required />
    </div>
    <div class="form-example">
        <label for="email">Enter your email: </label>
        <input style="margin-left: 25px" type="email" name="email" id="email" required />
    </div>
    <div class="form-example">
        <label for="password">Enter your password: </label>
        <input type="password" minlength="8" name="password" id="password" required />
    </div>
    <div class="form-example">
        <button style="margin-left: 75px; margin-top: 20px" type="submit"> Registration </button>
    </div>
</form>

<form action="" method="get" class="form-example">

    <div class="form-example">
        <h2 style="position: absolute; z-index: 999; top:   700px; left: 650px">*Contacts*</h2>
    </div>
</form>
