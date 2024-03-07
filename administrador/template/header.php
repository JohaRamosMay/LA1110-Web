<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location:../index.php");
} else {

    if ($_SESSION['usuario'] == "ok") {
        $nombreUsuario = $_SESSION['nombreUsuario'];
    }
}

?>


<!doctype html>
<html lang="es">

<head>
    <title>Administrador del sitio</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>


</head>

<body>

    <?php $url = "http://" . $_SERVER['HTTP_HOST'] . "/administrador" ?>

    <nav class="nav justify-content-center">
        <a class="nav-link" href="<?php echo $url; ?>/administrador/inicio.php">Inicio</a>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Catalogo
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="<?php echo $url; ?>/seccion/productos.php">Funda de Libros</a></li>
                <li><a class="dropdown-item" href="<?php echo $url; ?>/seccion/productos_sm.php">Separadores Magnéticos</a></li>
                <li><a class="dropdown-item" href="<?php echo $url; ?>/seccion/productos_pl.php">Polos Literarios</a></li>
                <li><a class="dropdown-item" href="<?php echo $url; ?>/seccion/productos_tb.php">Tote Bags Bordadas</a></li>
                <li><a class="dropdown-item" href="<?php echo $url; ?>/seccion/productos_va.php">Velas Aromáticas</a></li>
                <li><a class="dropdown-item" href="<?php echo $url; ?>/seccion/productos_bj.php">Bullet Journals</a></li>
                <li><a class="dropdown-item" href="<?php echo $url; ?>/seccion/productos_pi.php">Post Its</a></li>
                <li><a class="dropdown-item" href="<?php echo $url; ?>/seccion/productos_adl.php">Accesorios de Lectura</a></li>
            
            </ul>
        </li>
        <a class="nav-link" href="<?php echo $url; ?>/seccion/cerrar.php">Cerrar Sesion</a>
        <a class="nav-link" target="_blank" href="<?php echo $url; ?>/../index.php">Ver sitio web</a>
    </nav>


    <div class="container">
        <br>
        <div class="row">