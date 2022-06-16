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

    $consulta = "SELECT * FROM usuarios WHERE (usuario='$nombre' OR correo='$nombre') AND pass='$pass'";
    $query = mysqli_query($conexion, $consulta);
    $resultado = mysqli_num_rows($query);
    //Si se encontro el usuario entra al index
    if($resultado){ 
        while($data = mysqli_fetch_array($query)){
            $_SESSION['idUsuario'] = $data['idUsuario'];
            $_SESSION['tipo'] = $data['tipoUsuario'];
        }
    }else{
        $_SESSION['tipo'] = 0;
    }
    header('Location: index.php');
?>