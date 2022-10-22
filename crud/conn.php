<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "crub";

// Creación de la conexión 
$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

// Comprobación de la conexión
if ($conn->connect_error)
{
    die("Error de conexión: " . $conn->connect_error);
}
?>
