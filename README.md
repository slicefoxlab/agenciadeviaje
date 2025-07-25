agenciadeviaje
¡Entendido! Para que tu README.md se vea más profesional y visualmente atractivo, podemos usar varios elementos de formato que ofrece Markdown, como insignias (badges), una tabla de contenidos y una estructura más organizada.

Aquí tienes una versión mejorada. Simplemente copia y pega este código en tu archivo README.md.

🌎 Agencia de Viajes - Proyecto de Programación Web II
Aplicación web para la gestión de una agencia de viajes, desarrollada como parte de la asignatura Programación Web II. El proyecto demuestra funcionalidades de backend con PHP y una base de datos MySQL, junto con un flujo de trabajo colaborativo en GitHub.

📖 Tabla de Contenidos
✨ Características Principales
🛠️ Tecnologías Utilizadas
🚀 Instalación y Puesta en Marcha
📂 Estructura del Proyecto
🤝 Colaboración
✨ Características Principales
✈️ Módulo de Vuelos: Gestión completa de vuelos, incluyendo formularios de alta, listados y un buscador por destino.
🏨 Módulo de Hoteles: Registro y visualización de hoteles disponibles en el sistema.
📝 Sistema de Reservas: Creación y consulta de reservas, con una consulta avanzada para análisis de datos.
🛒 Carrito de Compras: Funcionalidad completa para la gestión de paquetes turísticos (agregar, eliminar, vaciar).
🛠️ Tecnologías Utilizadas
Lenguajes: PHP, SQL, HTML5, CSS3, JavaScript.
Base de Datos: MySQL.
Entorno de Servidor Local: Se recomienda XAMPP para compatibilidad con Apache y MySQL.
🚀 Instalación y Puesta en Marcha
Sigue estos pasos para ejecutar el proyecto en tu máquina local.

1. Prerrequisitos
Asegúrate de tener instalado un entorno de servidor local como XAMPP.

2. Clonar el Repositorio
Abre tu terminal y clona este repositorio en el directorio htdocs de tu XAMPP.

cd C:/xampp/htdocs
git clone https://github.com/slicefoxlab/agenciadeviaje.git
3. Configurar la Base de Datos
Inicia los servicios de Apache y MySQL desde el panel de XAMPP.
Ve a http://localhost/phpmyadmin/ y crea una nueva base de datos llamada agencia.
Importa el siguiente esquema SQL en tu nueva base de datos. Para ello, selecciona la base de datos agencia, ve a la pestaña SQL y ejecuta este código:
CREATE TABLE HOTEL (
  id_hotel INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(255) NOT NULL,
  ubicacion VARCHAR(255) NOT NULL,
  habitaciones_disponibles INT NOT NULL,
  tarifa_noche DECIMAL(10, 2) NOT NULL
);

CREATE TABLE VUELO (
  id_vuelo INT AUTO_INCREMENT PRIMARY KEY,
  origen VARCHAR(255) NOT NULL,
  destino VARCHAR(255) NOT NULL,
  fecha DATE NOT NULL,
  plazas_disponibles INT NOT NULL,
  precio DECIMAL(10, 2) NOT NULL
);

CREATE TABLE CLIENTE (
  id_cliente INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(255) NOT NULL,
  email VARCHAR(255) UNIQUE NOT NULL
);

CREATE TABLE RESERVA (
  id_reserva INT AUTO_INCREMENT PRIMARY KEY,
  id_cliente INT,
  fecha_reserva DATE NOT NULL,
  id_vuelo INT,
  id_hotel INT,
  FOREIGN KEY (id_cliente) REFERENCES CLIENTE(id_cliente),
  FOREIGN KEY (id_vuelo) REFERENCES VUELO(id_vuelo),
  FOREIGN KEY (id_hotel) REFERENCES HOTEL(id_hotel)
);
4. Ejecutar la Aplicación
Abre tu navegador web y navega a la siguiente URL para ver la aplicación en funcionamiento: http://localhost/agenciadeviaje/

📂 Estructura del Proyecto
agenciadeviaje/
├── 📄 agregar.php         # Lógica para añadir productos al carrito
├── 📄 carrito.php         # Vista y gestión del carrito de compras
├── 📄 consulta_reservas.php # Consulta avanzada de reservas
├── 📄 db.php              # Configuración de la conexión a la BD
├── 📄 eliminar.php        # Lógica para eliminar productos del carrito
├── 📄 formulario_hotel.html # Formulario para agregar hoteles
├── 📄 formulario_reserva.html # Formulario para agregar reservas
├── 📄 formulario_vuelo.html # Formulario para agregar vuelos
├── 📄 index.php           # Página principal y buscador
├── 📄 insertar_hotel.php  # Lógica para insertar hoteles en la BD
├── 📄 insertar_reserva.php # Lógica para insertar reservas en la BD
├── 📄 insertar_vuelo.php  # Lógica para insertar vuelos en la BD
├── 📄 lista_productos.php # Array con los paquetes turísticos
├── 📄 productos.php       # Vista de los paquetes turísticos
├── 📄 script.js           # Lógica JavaScript del cliente
├── 📄 styles.css          # Hoja de estilos de la aplicación
├── 📄 vaciar.php          # Lógica para vaciar el carrito
└── 📄 ver_*.php           # Scripts para visualizar datos de la BD
🤝 Colaboración
Este proyecto se gestiona siguiendo las mejores prácticas de colaboración en GitHub.

Ramas (Branches): El desarrollo de nuevas funcionalidades se realiza en ramas dedicadas.
Pull Requests (PRs): Los cambios se proponen mediante Pull Requests para ser revisados por el equipo.
Issues: Se utiliza para la gestión y discusión de tareas, errores y nuevas ideas.
Carlos Rojas Leiva Estudiante del Instituto Profesional IACC Ingenieria Informatica
