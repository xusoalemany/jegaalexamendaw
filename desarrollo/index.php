<?php
$servername = "database";
$username = "root";
$password = "root";
$dbname = "jegaal";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

echo "Conexión exitosa";

$conn->close();
?>


