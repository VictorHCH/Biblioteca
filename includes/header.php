<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leyendo.com</title>
    <link href="estilos.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/x-icon" href="img/Libro.ico">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="m.js"></script>
</head>
<body id="index">
    <div id="logoIndex">
        <h1>Leyendo.com</h1>
        <div id="cerrar">
            <a href="logoff.php"><img src="img/cerrar.png"></a>
        </div>
    </div>
    <div id="menu">
        <ul>
            <li><a href="index.php" class="current">Inicio</a></li>
            <li><a href="favs.php">Favoritos</a></li>
            <li><a href="usuarios.php">Usuarios</a></li>
            <li><a href="libros.php">Libros</a></li>
            <li><a href="cuenta.php">Cuenta</a></li>
        </ul>
    </div>
    <div id="find">
        <img src="img/lupa.png">
        <input type="text" placeholder="¿Qué buscas?">
    </div>