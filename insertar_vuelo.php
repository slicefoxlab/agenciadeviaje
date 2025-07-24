<?php
// SEMANA 6 - Insertar Vuelo en base de datos

include('db.php'); // SEMANA 6 - Conexión segura a MySQL

// Obtener datos del formulario
$origen = $_POST['origen'];
$destino = $_POST['destino'];
$fecha = $_POST['fecha'];
$plazas = $_POST['plazas_disponibles'];
$precio = $_POST['precio'];

// Validar datos básicos (SEMANA 6)
if ($origen == "" || $destino == "" || $fecha == "" || $plazas == "" || $precio == "") {
    die("Error: Todos los campos son obligatorios (SEMANA 6).");
}

// Insertar en la tabla VUELO (SEMANA 6)
$sql = "INSERT INTO VUELO (origen, destino, fecha, plazas_disponibles, precio)
        VALUES ('$origen', '$destino', '$fecha', $plazas, $precio)";

if ($conn->query($sql) === TRUE) {
    echo "✔️ Vuelo agregado exitosamente (SEMANA 6).<br>";
    echo "<a href='formulario_vuelo.html'>Agregar otro vuelo</a> | ";
    echo "<a href='ver_vuelos.php'>Ver vuelos</a>";
} else {
    echo "❌ Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

