<?php
session_start();
if (isset($_GET['id'])) {
    unset($_SESSION['carrito'][$_GET['id']]);
}
header('Location: carrito.php');
?>



