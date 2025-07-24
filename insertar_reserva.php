<?php
include("db.php");

$id_cliente = intval($_POST['id_cliente']);
$fecha_reserva = $_POST['fecha_reserva'];
$id_vuelo = intval($_POST['id_vuelo']);
$id_hotel = intval($_POST['id_hotel']);

if ($id_cliente && $fecha_reserva && $id_vuelo && $id_hotel) {
    $stmt = $conn->prepare("INSERT INTO RESERVA (id_cliente, fecha_reserva, id_vuelo, id_hotel) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("isii", $id_cliente, $fecha_reserva, $id_vuelo, $id_hotel);

    if ($stmt->execute()) {
        echo "<h3>✅ Reserva agregada correctamente</h3>";
        echo "<a href='formulario_reserva.html'>Agregar otra reserva</a> | <a href='index.php'>Inicio</a>";
    } else {
        echo "❌ Error al agregar reserva: " . $stmt->error;
    }
    $stmt->close();
} else {
    echo "❌ Datos inválidos. Completa todos los campos.";
}
$conn->close();
?>
