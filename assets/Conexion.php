<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "bd_restaurante";

try {
    $conexion = new mysqli($server, $user, $password, $db);
} catch (Exception $e) {
    die("La conexión falló: " . $e->getMessage());
}
?>