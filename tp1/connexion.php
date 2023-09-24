<?php
$host = "localhost";
$db = "tp_1";
$user = "root";
$password = "";

$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

try {
    $oPDO = new PDO($dsn, $user, $password);

    if ($oPDO) {
        echo "Connected to the $db database successfully!";
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
