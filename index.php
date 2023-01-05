<?php
//Archivo principal y manejo de errores
error_reporting(E_ALL);
ini_set('ignore_repeated_errors', TRUE);
ini_set('display_errors',FALSE); //Usar true para desarrollo ya que así nos mostrará los errores que vayan surgiendo
ini_set('log_errors', TRUE); //Hará que se registre en un error_log en vez del registro de errores del servidor
ini_set("error_log", "php-error.log");
error_log('Prueba de error 1');

$servername = "mysql";
$username = "root";
$password = "toor";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to MySQL";

error_log('Termina error_log');
error_log('-----------------------------------------------------------------------------------------------------------------------------------------');
