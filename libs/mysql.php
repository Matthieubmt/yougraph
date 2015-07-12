<?php


/**
 *   BASE DE DONNEE PDO
 **/
$MYSQL_HOST ='localhost';
$MYSQL_BDD  ='yougraph';
$MYSQL_USER ='root';
$MYSQL_PASS ='root';
$MYSQL_PORT ='3306';

try{
    $MyPDO = new PDO('mysql:host='.$MYSQL_HOST.';port='.$MYSQL_PORT.';dbname='.$MYSQL_BDD, $MYSQL_USER, $MYSQL_PASS);
    $MyPDO->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $MyPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    $MyPDO->exec("SET CHARACTER SET utf8");
}catch (Exception $Error){
    echo 'Failed to connect to the database: ';
    echo $Error->getMessage();
    die();
}

?>