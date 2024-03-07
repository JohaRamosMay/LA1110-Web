<?php

$host = "localhost";
$bd = "u544602618_LA1110";
$usuario = "u544602618_db";
$contrasenia = "EH;t74un2E+";

try {

    $conexion = new PDO("mysql:host=$host;dbname=$bd", $usuario, $contrasenia);

} catch (Exception $ex) {
    echo $ex->getMessage();
}

?>
