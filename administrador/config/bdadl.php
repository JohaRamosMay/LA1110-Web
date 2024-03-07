<?php

$host = "localhost";
$bd = "u544602618_LA1110adl";
$usuario = "u544602618_bdadl";
$contrasenia = "K=fVjgtfR!x6";

try {

    $conexion = new PDO("mysql:host=$host;dbname=$bd", $usuario, $contrasenia);

} catch (Exception $ex) {
    echo $ex->getMessage();
}

?>
