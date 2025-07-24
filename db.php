<?php
// SEMANA 6 - Conexión segura a MySQL
$servername = "localhost";
$username = "root";
$password = "";
$database = "agencia";

$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
