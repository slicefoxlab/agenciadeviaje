<?php
session_start();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (!isset($_SESSION['carrito'][$id])) {
        $_SESSION['carrito'][$id] = 1;
    } else {
        $_SESSION['carrito'][$id]++;
    }
}
header('Location: productos.php');
?>
