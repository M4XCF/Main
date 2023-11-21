<?php
$host = "localhost";
$user = "id21129834_usuario_usu";
$pass = "M24x09M03123!";
$db = "id21129834_universidad";

$conexion = mysqli_connect($host, $user, $pass, $db);

if (!$conexion) {
    echo "Fallo la conexión";
}
?>