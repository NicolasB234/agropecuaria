<?php

$servername = "localhost";
$username = "c2072300_uni";
$password = "LIgomo14ki";
$database = "c2072300_uni";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    $sql = "INSERT INTO contactos (nombre, apellido, email, mensaje) VALUES ('$nombre', '$apellido', '$email', '$mensaje')";
    if ($conn->query($sql) === TRUE) {
        // Redirige al usuario al index después de 3 segundos
        header("refresh:1;url=https://unionarg.com/index.html");
        // Muestra una notificación al usuario
        echo '<script>alert("Tu mensaje ha sido enviado correctamente.");</script>';
        // Detiene la ejecución del script para evitar que se muestre el mensaje "Datos insertados correctamente"
        exit();
    } else {
        echo "Error al insertar datos: " . $conn->error;
    }
} else {
    echo "No se recibieron todos los datos del formulario.";
}

?>
