<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hoteles con más de 2 reservas</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body>
  <header>
    <h1>🏨 Hoteles con más de 2 reservas</h1>
    <nav class="header-links">
      <a href="index.php">🏠 Inicio</a>
    </nav>
  </header>

  <main>
    <section>
    <?php
    include("db.php");

    $sql = "SELECT h.nombre, COUNT(r.id_reserva) AS total_reservas
            FROM HOTEL h
            JOIN RESERVA r ON h.id_hotel = r.id_hotel
            GROUP BY h.id_hotel
            HAVING total_reservas > 2";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>Hotel</th><th>Total de Reservas</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["nombre"] . "</td><td>" . $row["total_reservas"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "<p class='notificacion'>⚠️ No hay hoteles con más de dos reservas.</p>";
    }
    $conn->close();
    ?>
    </section>
  </main>

  <footer>
    <p>© 2025 Agencia de Viajes. Todos los derechos reservados.</p>
  </footer>
</body>
</html>
