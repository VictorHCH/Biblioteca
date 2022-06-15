<?php
    //se inician las variable de session para guardar la session 
    session_start();
    //Se filtran los valores que mando el form
    $nombre = filter_input(0, 'nom');
    $pass = filter_input(0, 'pass');
    //Se inicia la session
    $_SESSION['usuario'] = $nombre; 
    //Se hace la conexion con la BD
    include("conexion.php");
    //Validacion de usuario y contraseña
    $consulta = "SELECT * FROM usuarios WHERE usuario='$nombre' AND pass='$pass'";
    $resultado = mysqli_query($conexion, $consulta);
    $filas = mysqli_num_rows($resultado);

    //Si se encontro el usuario entra al index
    if($filas){ 
        $_SESSION['tipo'] = 2;
    }else{
        $_SESSION['tipo'] = 0;
    }
    header('Location: index.php');
?>