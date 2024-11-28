

<?php

$host ='localhost';
$data = 'lekon_db';
$user = 'root';
$pass = '';
$chrs = 'utf8';
$attr = "mysql:host=$host; dbname=$data; charset=$chrs";

$opts = [
    PDO::ATTR_ERRMODE              => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE   => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES     => false,

];

?>