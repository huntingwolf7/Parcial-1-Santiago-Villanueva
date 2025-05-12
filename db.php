<?php

//Crear la conexión a la DB
$db_host = "localhost";
$db_username = "lobo";
$db_password = "NCEpKkZSb9spO6xn2zdw";
$db_database = "firstdb";

$db = new mysqli($db_host, $db_username, $db_password, $db_database);
mysqli_query($db, "SET NAMES 'utf8'");

if($db->connect_errno > 0) {
    die('No es posible conectarse a la DB ['. $db->connect_error . ']');
}

