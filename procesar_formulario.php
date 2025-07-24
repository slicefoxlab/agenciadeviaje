<?php
// Semana 4: Clase avanzada en PHP para filtrar datos de viaje
class FiltroViaje {
    public $hotel, $ciudad, $pais, $fechaViaje, $duracion;

    public function __construct($hotel, $ciudad, $pais, $fechaViaje, $duracion) {
        $this->hotel = $hotel;
        $this->ciudad = $ciudad;
        $this->pais = $pais;
        $this->fechaViaje = $fechaViaje;
        $this->duracion = $duracion;
    }

    public function resumen() {
        return "Viaje a {$this->ciudad}, {$this->pais}, hospedado en {$this->hotel}, por {$this->duracion} días desde el {$this->fechaViaje}.";
    }
}

// Semana 4: Método de recuperación de datos usando POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hotel = $_POST['hotel'];
    $ciudad = $_POST['ciudad'];
    $pais = $_POST['pais'];
    $fecha = $_POST['fecha_viaje'];
    $duracion = $_POST['duracion'];

    $viaje = new FiltroViaje($hotel, $ciudad, $pais, $fecha, $duracion);

    echo "<h2>Datos recibidos:</h2>";
    echo "<p>" . $viaje->resumen() . "</p>";
}
?>
