<?php
$host = "localhost";
$user = "root";
$password = "1234";
$db = "registersigns";
$port = "3307";

$connessione = new mysqli($host, $user, $password, $db, $port);

if ($connessione === false) {
    die("Error during connection" . $connessione->connect_error);
}
