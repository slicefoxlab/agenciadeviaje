<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Agencia de Viajes - SEMANA 8</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body>
  
  <!-- ======================================
       Header con Título y Links
       ====================================== -->
  <header>
    <h1>🌎 Agencia de Viajes - SEMANA 8</h1>
    <nav class="header-links">
      <a href="productos.php">🗺️ Ver Paquetes</a>
      <a href="carrito.php">🛒 Ver Carrito</a>
    </nav>
  </header>

  <!-- ======================================
       Banner de OFERTA Parpadeante
       ====================================== -->
  <div class="banner-oferta">
    ¡OFERTA ESPECIAL! 30% de descuento en viajes a Brasil esta semana. Reserva ahora y vive la experiencia.
  </div>

  <!-- ======================================
       Menú Principal con iconos
       ====================================== -->
  <nav class="menu-principal">
    <a href="index.php">🏠 Inicio</a>
    <a href="formulario_vuelo.html">✈️ Agregar Vuelo</a>
    <a href="ver_vuelos.php">🗂️ Ver Vuelos</a>
    <a href="formulario_hotel.html">🏨 Agregar Hotel</a>
    <a href="ver_hoteles.php">🗂️ Ver Hoteles</a>
    <a href="formulario_reserva.html">📝 Agregar Reserva</a>
    <a href="ver_reservas.php">📋 Ver Reservas</a>
    <a href="consulta_reservas.php">📊 Consulta Avanzada de Reservas</a>
  </nav>

  <!-- ======================================
       NUEVA SECCIÓN - Buscador de Vuelos
       ====================================== -->
  <main>
    <section class="busqueda-vuelos">
      <h2>🔎 Buscar Vuelos por Destino</h2>
      <form action="buscar_vuelo.php" method="GET">
        <input type="text" name="destino" placeholder="Ej: Valdivia, Osorno..." required>
        <button type="submit">Buscar Vuelo</button>
      </form>
    </section>

    <!-- Contenido anterior de Semana 5 -->
    <section class="busqueda">
      <h2>🔎 Buscar destino</h2>
      <form>
        <input type="text" placeholder="Ej: Pucón, Valdivia..." required>
        <input type="date" required>
        <input type="date" required>
        <button type="submit">Buscar</button>
      </form>
    </section>

    <!-- Formulario de Intención de Viaje -->
    <section class="formulario-intencion">
      <h2>📝 Formulario de intención de viaje</h2>
      <form>
        <input type="text" placeholder="Nombre del hotel" required>
        <input type="text" placeholder="Ciudad" required>
        <input type="text" placeholder="País" required>
        <input type="date" required>
        <input type="number" placeholder="Duración (días)" required>
        <button type="submit">Enviar</button>
      </form>
    </section>
  </main>

  <!-- ======================================
       Footer
       ====================================== -->
  <footer>
    <p>© 2025 Agencia de Viajes. Todos los derechos reservados.</p>
  </footer>
  
</body>
</html>

