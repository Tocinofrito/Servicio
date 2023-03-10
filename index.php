<?php
//Archivo principal y manejo de errores
error_reporting(E_ALL);
ini_set('ignore_repeated_errors', TRUE);
ini_set('display_errors',TRUE); //Usar true para desarrollo ya que así nos mostrará los errores que vayan surgiendo
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
//echo "Connected successfully to MySQL";
//Muetra ruta en la que esta el proyecto echo(getcwd());
require_once 'libs/database.php';
require_once 'libs/controller.php';
require_once 'libs/view.php';
require_once 'controller/error.php';
require_once 'libs/app.php';

require_once 'config.php/config.php';

$app = new App();
error_log('Termina error_log');
error_log('-----------------------------------------------------------------------------------------------------------------------------------------');
