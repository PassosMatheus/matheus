<?php
require 'environment.php';

$config = array();
if (ENVIRONMENT == 'developement'){
        $config['dbname'] = 'matheus';
        $config['host'] = 'localhost';
        $config['dbuser'] = 'root';
        $config['dbpass'] = '';
} else {
        $config['dbname'] = '3646276_matheus';
        $config['host'] = 'fdb28.awardspace.net';
        $config['dbuser'] = '3646276_matheus';
        $config['dbpass'] = 'matheus123';
}

global $db;
try {
    $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
} catch (PDOException $e){
    echo "Falhou: ".$e->getMessage();
}

?>