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
    <link href="estilos.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/x-icon" href="img/Libro.ico">
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
            <li><a href="#index" class="current">Inicio</a></li>
            <li><a href="#favs">Favoritos</a></li>
            <li><a href="#usuarios">Usuarios</a></li>
            <li><a href="#libros">Libros</a></li>
            <li><a href="#cuenta">Cuenta</a></li>
        </ul>
</div>
    <div id="find">
        <img src="img/lupa.png">
        <input type="text" placeholder="¿Qué buscas?">
    </div>
    <div>
        <h1 id="favs">Favoritos</h1>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
    <div>
        <h1 id="usuarios">Usuarios</h1>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
    <div >
        <h1 id="libros">Libros</h1>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
    <div >
        <h1 id="cuenta">Cuenta</h1>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
</body>
</html>