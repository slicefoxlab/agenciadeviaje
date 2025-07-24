<?php
  // Evita error de sesión duplicada
  if (session_status() === PHP_SESSION_NONE) {
    session_start();
  }

  // Incluye SOLO la lista de productos (este archivo debes crearlo)
  include("lista_productos.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Paquetes Turísticos - SEMANA 6</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body>

  <!-- ================================
       Header con título y links
       ================================ -->
  <header>
    <h1>🗺️ Paquetes Turísticos </h1>
    <nav class="header-links">
      <a href="index.php">🏠 Inicio</a>
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
       Listado de Paquetes
       ================================ -->
  <main>
    <section>
      <h2>🗺️ Nuestros Paquetes Disponibles</h2>
      <div class="productos-lista">
        <?php
          foreach ($productos as $id => $producto) {
            echo "<div class='producto-card'>";
            echo "<h3>".$producto['nombre']."</h3>";
            echo "<p class='precio'>Precio: $".number_format($producto['precio'], 0, ',', '.')." CLP</p>";
            echo "<a href='agregar.php?id=$id' class='btn'>Agregar al Carrito</a>";
            echo "</div>";
          }
        ?>
      </div>
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
