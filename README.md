# agenciadeviaje
Agencia de Viajes - Proyecto de Programación Web II
Este repositorio contiene el código fuente de una aplicación web para una agencia de viajes, desarrollada como parte de la asignatura Programación Web II. La aplicación permite la gestión y reserva de vuelos, hoteles y paquetes turísticos.

✨ Características Principales
Gestión de Vuelos:

Formulario para agregar nuevos vuelos al sistema.

Visualización de todos los vuelos registrados.

Buscador de vuelos por destino.

Gestión de Hoteles:

Formulario para registrar nuevos hoteles.

Listado de hoteles disponibles en el sistema.

Sistema de Reservas:

Formulario para crear nuevas reservas asociadas a clientes, vuelos y hoteles.

Visualización de las últimas reservas realizadas.

Consulta avanzada para ver qué hoteles tienen más de 2 reservas.

Paquetes Turísticos:

Visualización de paquetes turísticos disponibles.

Carrito de compras funcional para agregar, eliminar y vaciar paquetes.

🛠️ Tecnologías Utilizadas
Frontend: HTML5, CSS3, JavaScript

Backend: PHP

Base de Datos: MySQL

Entorno de desarrollo: XAMPP (o similar)

🚀 Instalación y Puesta en Marcha
Para ejecutar este proyecto en tu entorno local, sigue estos pasos:

Clonar el Repositorio:

Bash

git clone https://github.com/slicefoxlab/agenciadeviaje.git
Configurar el Entorno:

Mueve la carpeta clonada agenciadeviaje al directorio htdocs de tu instalación de XAMPP (o www si usas WAMP/MAMP).

Inicia los servicios de Apache y MySQL desde el panel de control de XAMPP.

Crear la Base de Datos:

Abre tu navegador y ve a http://localhost/phpmyadmin/.

Crea una nueva base de datos con el nombre agencia. El archivo db.php está configurado para conectarse a esta base de datos.

Selecciona la base de datos agencia y ve a la pestaña SQL. Pega el siguiente código y ejecútalo para crear las tablas necesarias:

SQL

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

-- Nota: La tabla CLIENTE se infiere de la tabla RESERVA.
-- Puedes agregar datos de ejemplo para probar la aplicación.
Acceder a la Aplicación:

Una vez configurada la base de datos, abre tu navegador y visita:
http://localhost/agenciadeviaje/

🤝 Colaboración
Este proyecto utiliza un flujo de trabajo basado en GitHub para la colaboración, como parte de los requerimientos académicos.

Ramas (Branches): Las nuevas funcionalidades se desarrollan en ramas separadas para no afectar la rama principal (main).

Pull Requests (PRs): Todos los cambios deben ser propuestos a través de un Pull Request para su revisión.

Issues: La discusión de problemas, bugs o nuevas ideas se gestiona a través de la pestaña "Issues".
