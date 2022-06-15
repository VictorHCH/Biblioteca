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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="m.js"></script>
    <!--<script>
        $(document).ready(function(){
            $('.me ul li a:first').addClass('active');

            $('.me ul li a').click(function(){
                $('.me ul li a').removeClass('active');
                $(this).addClass('active');
            });
        });
        //window.alert('Sí funciona')
    </script>-->
</head>
<body id="index">
    <div id="logoIndex">
        <h1>Leyendo.com</h1>
        <div id="cerrar">
            <a href="logoff.php"><img src="img/cerrar.png"></a>
        </div>
    </div>
    <!--<div id="menu">
        <ul>
            <li><a href="index.php" class="current">Inicio</a></li>
            <li><a href="favs.php">Favoritos</a></li>
            <li><a href="usuarios.php">Usuarios</a></li>
            <li><a href="libros.php">Libros</a></li>
            <li><a href="cuenta.php">Cuenta</a></li>
        </ul>
    </div>-->
    <div class="me">
        <ul>
            <li><a href="">Inicio</a></li>
            <li><a href="">Favoritos</a></li>
            <li><a href="">Usuarios</a></li>
            <li><a href="">Libros</a></li>
            <li><a href="">Cuenta</a></li>
        </ul>
    </div>
    <div id="find">
        <img src="img/lupa.png">
        <input type="text" placeholder="¿Qué buscas?">
    </div>
    <div id="favs">
        <h1 >Favoritos</h1>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
    <div id="usuarios">
        <h1 >Usuarios</h1>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
    <div id="libros">
        <h1 >Libros</h1>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
    <div id="cuenta">
        <h1 >Cuenta</h1>
        <h1 >Cuenta</h1>
        <h1 >Cuenta</h1>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
</body>
</html>