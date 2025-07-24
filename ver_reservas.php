<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Listado de Reservas</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body>
  <header>
    <h1>📋 Listado de Reservas</h1>
    <nav class="header-links">
      <a href="index.php">🏠 Inicio</a>
    </nav>
  </header>

  <main>
    <section>
    <?php
    include("db.php");

    $sql = "SELECT * FROM RESERVA LIMIT 10";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>ID Reserva</th><th>ID Cliente</th><th>Fecha</th><th>ID Vuelo</th><th>ID Hotel</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row["id_reserva"]."</td>";
            echo "<td>".$row["id_cliente"]."</td>";
            echo "<td>".$row["fecha_reserva"]."</td>";
            echo "<td>".$row["id_vuelo"]."</td>";
            echo "<td>".$row["id_hotel"]."</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p class='notificacion'>⚠️ No hay reservas registradas.</p>";
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
