<?php

require './enviroment.php';

$config = array();

if (ENVIROMENT == "development") {
    define("BASE_URL", "http://localhost/galeria-de-fotos");
    $config['dbname'] = 'galeria-de-fotos';
    $config['dbhost'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
} else {
    // $config para ambiente de produção
    define("BASE_URL", "");
    $config['dbname'] = '';
    $config['dbhost'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}

global $pdo;
try{
    $pdo = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['dbhost'].";charset=utf8",
        $config['dbuser'], $config['dbpass']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
} catch (PDOException $e) {
    echo "ERROR: " . $e->getMessage();
    exit;
}