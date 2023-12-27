<link rel='stylesheet' href='../style/Style2.css'>
<form action="" method="get" class="form-example">
    <div class="navbar">
        <h2>Best clothes</h2>
        <h2>*Description*</h2>
        <a href="../../../index.php">Выйти</a>
    </div>
</form>

<?php
include("C:\ospanel\domains\localhost\app\database\db.php");

if (isset($_GET['data'])) {
    $myArrayEncoded = $_GET['data'];
    $usr = unserialize(base64_decode($myArrayEncoded));

    echo '<label style="color: #000000" for="error" name="error"> Welcome, </label>' . $usr['user_name'] . ' ' . $usr['user_surname'];

    echo '<h4 style="margin-right: 75px">CART:</h4>';

    if (selectUserCart($usr['id']) == null)
    {
        echo '<p style="" for="cart" name="cart">Cart is empty!</p>';
    }
    else
    {
        tt(selectUserCart($usr['id']));
    }

    echo '<h4 style="margin-right: 75px">ORDERS:</h4>';

    if (selectUserOrder($usr['id']) == null)
    {
        echo '<p style="" for="order" name="order">You have no orders!</p>';
    }
    else
    {
        tt(selectUserOrder($usr['id']));
    }
}
else
{
    echo "Массив не передан.";
}
?>


<form action="" method="get" class="form-example">

    <div class="form-example">
        <h2 style="position: absolute; z-index: 999; top:   700px; left: 650px">*Contacts*</h2>
    </div>
</form>