<?php
include("connect.php");
function tt($value)
{
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}

// Проверка выполнения запроса к бд
function dbCheckError($query)
{
    $errInfo = $query->errorInfo();
    if ($errInfo[0] !== PDO::ERR_NONE)
    {
        echo $errInfo[2];
        exit();
    }
    return true;
}

// Запрос на получения условно всех данных с таблицы
function selectAll($table, $params = [])
{
    global $pdo;
    $sql = "SELECT * FROM $table";

    if (!empty($params))
    {
        $i = 0;
        foreach ($params as $key => $value)
        {
            if (!is_numeric($value))
            {
                $value = "'".$value."'";
            }
            if ($i === 0)
            {
                $sql = $sql . " WHERE $key=$value";
            }
            else
            {
                $sql = $sql . " AND $key=$value";
            }
            $i++;
        }
    }
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $query->fetchAll();
}

// Запрос на получение одной строки с таблицы
function selectOne($table, $params = [])
{

    global $pdo;
    $sql = "SELECT * FROM $table";

    if (!empty($params))
    {
        $i = 0;
        foreach ($params as $key => $value)
        {
            if (!is_numeric($value))
            {
                $value = "'".$value."'";
            }
            if ($i === 0)
            {
                $sql = $sql . " WHERE $key=$value";
            }
            else
            {
                $sql = $sql . " AND $key=$value";
            }
            $i++;
        }
    }
    $sql = $sql . " LIMIT 1";

    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $query->fetch();
}

function selectUserCart ($id)
{
    $param1 =
        [
            'user_id' => $id
        ];
    $userCart = selectOne("carts", $param1);

    $param2 =
        [
            'cart_id' => $userCart['id']
        ];
    return selectAll("cart_items", $param2);
}

function selectUserOrder ($id)
{
    $param1 =
        [
            'user_id' => $id
        ];
    $userOrder = selectOne("orders", $param1);

    $param2 =
        [
            'order_id' => $userOrder['id']
        ];
    return selectAll("order_items", $param2);
}

// Вставка записи в таблицу
function insert($table, $params)
{
    global $pdo;
    $i = 0;
    $coll = "";
    $mask = "";
    foreach ($params as $key => $value)
    {
        if ($i === 0)
        {
            $coll = $coll . "$key";
            $mask = $mask . "'" . "$value" . "'";
        }
        else
        {
            $coll = $coll . ", $key";
            $mask = $mask . ", '" . "$value" . "'";
        }
        $i++;
    }
    $sql = "INSERT INTO $table ($coll) VALUES($mask)";
    $query = $pdo->prepare($sql);
    $query->execute($params);
    dbCheckError($query);
    return $pdo->lastInsertId();
}



//обновление данных в таблице
function update($table, $id, $params)
{
    global $pdo;
    $i = 0;
    $str= "";
    foreach ($params as $key => $value)
    {
        if ($i === 0)
        {
            $str = $str . $key . " = '" . $value . "'";
        }
        else
        {
            $str = $str . ", " . $key . " = '" . $value . "'";
        }
        $i++;
    }
    $sql = "UPDATE $table SET $str WHERE id = $id";
    $query = $pdo->prepare($sql);
    $query->execute($params);
    dbCheckError($query);
}

//удаление записи в таблице
function delete($table, $id)
{
    global $pdo;
    $sql = "DELETE FROM $table WHERE id = $id";
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
}

/*$arrData = [
    'admin' => 1,

];*/

//tt(selectOne('users', $arrData));