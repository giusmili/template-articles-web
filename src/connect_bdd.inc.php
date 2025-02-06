<?php
// connection bdd
try{
    $_pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $_bdd = new PDO('mysql:host=localhost;
    dbname=posts', 
    'root', '',
    array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$_pdo_options));
    $_response = $_bdd->query('SELECT * FROM post ORDER BY date_modification DESC LIMIT 10');
}
catch(Exception $e)
    {
        die('Erreur s\'est produite: '.$e->getMessage());
}
