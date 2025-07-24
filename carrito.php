<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Carrito de Compras - SEMANA 6</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body>

  <!-- ================================
       Header con título y links
       ================================ -->
  <header>
    <h1>🛒 Carrito de Compras - SEMANA 6</h1>
    <nav class="header-links">
      <a href="index.php">🏠 Inicio</a>
      <a href="productos.php">🗺️ Ver Paquetes</a>
    </nav>
  </header>

  <!-- ================================
       Banner de OFERTA
       ================================ -->
  <div class="banner-oferta">
    ¡OFERTA ESPECIAL! 30% de descuento en viajes a Brasil esta semana. ¡Reserva ahora!
  </div>

  <!-- ================================
       Detalle del Carrito
       ================================ -->
  <main>
    <section>
      <h2>🛒 Tu Carrito de Compras</h2>
      <?php
        session_start();
        include("productos.php");

        if (empty($_SESSION['carrito'])) {
          echo "<p class='empty-message'>El carrito está vacío.</p>";
          echo "<a href='productos.php' class='btn'>Ver Productos</a>";
        } else {
          $total = 0;
          echo "<table>";
          echo "<tr><th>Producto</th><th>Cantidad</th><th>Subtotal CLP</th><th>Acción</th></tr>";
          foreach ($_SESSION['carrito'] as $id => $cantidad) {
            $subtotal = $productos[$id]['precio'] * $cantidad;
            $total += $subtotal;
            echo "<tr>";
            echo "<td>".$productos[$id]['nombre']."</td>";
            echo "<td>".$cantidad."</td>";
            echo "<td>".number_format($subtotal, 0, ',', '.')."</td>";
            echo "<td><a href='eliminar.php?id=$id' class='btn'>Eliminar</a></td>";
            echo "</tr>";
          }
          echo "</table>";
          echo "<div class='total-carrito'><strong>Total a pagar: $".number_format($total, 0, ',', '.')." CLP</strong></div>";
          echo "<a href='vaciar.php' class='btn'>Vaciar Carrito</a> ";
          echo "<a href='productos.php' class='btn'>Seguir Comprando</a>";
        }
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
