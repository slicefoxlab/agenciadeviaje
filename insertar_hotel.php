<?php
include('db.php');

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$ubicacion = $_POST['ubicacion'];
$habitaciones = $_POST['habitaciones_disponibles'];
$tarifa = $_POST['tarifa_noche'];

// Validar datos
if ($nombre == "" || $ubicacion == "" || $habitaciones == "" || $tarifa == "") {
    die("Error: Todos los campos son obligatorios (SEMANA 6).");
}

// Insertar en la tabla
$sql = "INSERT INTO HOTEL (nombre, ubicacion, habitaciones_disponibles, tarifa_noche) VALUES ('$nombre', '$ubicacion', $habitaciones, $tarifa)";

if ($conn->query($sql) === TRUE) {
    echo "✅ Hotel agregado exitosamente (SEMANA 6).<br>";
    echo "<a href='formulario_hotel.html'>Agregar otro hotel</a> | ";
    echo "<a href='ver_hoteles.php'>Ver hoteles</a>";
} else {
    echo "❌ Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
