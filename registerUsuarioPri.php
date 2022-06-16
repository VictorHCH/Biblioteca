<?php
    include("conexion.php");
    $nombre = filter_input(0, 'nombre');
    $apellido = filter_input(0, 'apellido');
    $email = filter_input(0, 'email');
    $usuario = filter_input(0, 'usuario');
    $pass1 = filter_input(0, 'pass1');
    $pass2 = filter_input(0, 'pass2');
    $tipo = filter_input(0, 'tipo');
    if($pass1 == $pass2 AND email_valid($email)){
        $query = "INSERT INTO usuarios(nombre, apellido, correo, usuario, pass, tipoUsuario) VALUES 
                ('$nombre', '$apellido', '$email', '$usuario', '$pass1', '$tipo')";
        $resultado = mysqli_query($conexion, $query);
        if(!$resultado){
            die("Error no se ingresaron los datos");
        }
        header("Location: usuarios.php");
        
    }
    else{
        header("Location: register.php");
    }
//    Valida que el correo sea institucional
   function email_valid($str){
        $matches = null;
        return (1 === preg_match('/^[A-z0-9\\._-]+@itparral.edu.mx$/', $str, $matches));
    }
?>