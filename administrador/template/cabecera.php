<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    <?php $url="http://".$_SERVER['HTTP_HOST']."/sitioweb"?>
    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link active" href="#">Administrador del sitio web </a>
            <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/inicio.php">Inicio</a>
            <a class="nav-item nav-link" href="#">Libros</a>
            <a class="nav-item nav-link" href="#">Cerrar</a>
            <a class="nav-item nav-link" href="<?php echo $url;?>">Ver sitio web</a>
        </div>
    </nav>
    <div class="container">
        <br/>
        <div class="row">