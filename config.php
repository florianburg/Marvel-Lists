<?php
/**
 * Created by PhpStorm.
 * User: HP Florian
 * Date: 26-3-2019
 * Time: 09:14
 */
$dbHost = 'localhost';
$dbName = 'mdb';
$dbUser = 'root';
$dbPass = '';
// Deze PDO is voor het aangeven wat de naam van de db is en wat de host is, daarna geef je aan wie de user is en het wachtwoord
$db = new PDO (
    "mysql:host=$dbHost;dbname=$dbName",
    $dbUser,
    $dbPass
);
//is voor het gooien van exceptions
$db->setAttribute(
    PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION
);
?>