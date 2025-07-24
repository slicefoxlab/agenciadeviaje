<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Vuelos Registrados - SEMANA 6</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body>

  <!-- ================================
       Header con título y links
       ================================ -->
  <header>
    <h1>✈️ Vuelos Registrados - SEMANA 6</h1>
    <nav class="header-links">
      <a href="index.php">🏠 Inicio</a>
      <a href="productos.php">🗺️ Ver Paquetes</a>
      <a href="carrito.php">🛒 Ver Carrito</a>
    </nav>
  </header>

  <!-- ================================
       Banner de OFERTA
       ================================ -->
  <div class="banner-oferta">
    ¡OFERTA ESPECIAL! 30% de descuento en viajes a Brasil esta semana. ¡Reserva ahora!
  </div>

  <!-- ================================
       Listado de Vuelos
       ================================ -->
  <main>
    <section>
      <h2>✈️ Listado de Vuelos Registrados</h2>
      <?php
        include("db.php");
        $sql = "SELECT * FROM vuelo";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          echo "<table>";
          echo "<tr><th>Origen</th><th>Destino</th><th>Fecha</th><th>Plazas</th><th>Precio CLP</th></tr>";
          while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["origen"]."</td><td>".$row["destino"]."</td><td>".$row["fecha"]."</td><td>".$row["plazas_disponibles"]."</td><td>".$row["precio"]."</td></tr>";
          }
          echo "</table>";
        } else {
          echo "<p class='empty-message'>No hay vuelos registrados en el sistema (SEMANA 6).</p>";
        }
        $conn->close();
      ?>
    </section>
  </main>

  <!-- ================================
       Footer
       ================================ -->
  <footer>
    <p>© 2025 Agencia de Viajes. Todos los derechos reservados.</p>
  </footer>
  
</body>
</html>
