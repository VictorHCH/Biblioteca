<?php
    session_start();
    if(isset($_SESSION['tipo'])){
        if($_SESSION['tipo'] == 0){
            header('Location: login.php');
        }
    }
    else{
        header('Location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leyendo.com</title>
    <link href="estilo.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/x-icon" href="img/Libro.ico">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body id="header">
    <div id="logoHeader">
        <h1>Leyendo.com</h1>
        <div id="cerrar">
            <a href="logoff.php"><img src="img/cerrar.png"></a>
            <label><?php echo $_SESSION['usuario'] ?></label>
        </div>
    </div>
    <div class="menu">
        <ul>
            <li><a href="index.php" id="index.php" class="a1">Inicio</a></li>
            <li><a href="favs.php" id="favs.php" class="a1">Favoritos</a></li>
            <li><a href="usuarios.php" id="usuarios.php" class="a1">Usuarios</a></li>
            <li><a href="libros.php" id="libros.php" class="a1">Libros</a></li>
            <li><a href="cuenta.php" id="cuenta.php" class="a1">Cuenta</a></li>
        </ul>
    </div>