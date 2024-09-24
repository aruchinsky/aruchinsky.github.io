<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $fecha = $_POST['fecha'];
    $mensaje = $_POST['mensaje'];

    echo "<h1>Datos del formulario</h1>";
    echo "<p>Nombre: $nombre</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Fecha de entrega: $fecha</p>";
    echo "<p>Mensaje: $mensaje</p>";
}
?>
