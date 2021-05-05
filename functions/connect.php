<?php

$serverName = 'localhost';
$user = 'root';
$passwd = '';
$db = 'swiadectwa';

$conn = mysqli_connect($serverName, $user, $passwd, $db);
$conn->set_charset("UTF8");

if(!$conn){
    die('Błąd połączenia'.mysqli_connect_error());
}