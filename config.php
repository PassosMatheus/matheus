<?php

$dsn = "mysql:dbname=matheus;host:localhost";
$dbuser = "root";
$dbpass = "";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);
} catch (PDOException $e){
    echo "Falhou: ".$e->getMessage();
}

?>