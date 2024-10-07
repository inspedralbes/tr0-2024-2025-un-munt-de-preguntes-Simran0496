<?php
/*
$host = 'localhost';
$db = 'db';
$user = 'root'; // Cambia esto si es necesario
$pass = ''; // Cambia esto si es necesario
*/
$host = 'localhost';
$db = 'a23gurkaukau_db';
$user = 'a23gurkaukau_simran'; // Cambia esto si es necesario
$pass = 'Simran1234'; // Cambia esto si es necesario
// Crear conexión
$conn = new mysqli($host, $user, $pass, $db);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
