<?php
    include("conexion.php");
    session_start();
    $id = $_SESSION['id'];
    $nombre = filter_input(0, 'nombre');
    $apellido = filter_input(0, 'apellido');
    $email = filter_input(0, 'email');
    $usuario = filter_input(0, 'usuario');
    $pass1 = filter_input(0, 'pass1');
    $pass2 = filter_input(0, 'pass2');
    if(email_valid($email)){
        if($pass1 == ""){
            $query = "UPDATE usuarios SET nombre = '$nombre', apellido = '$apellido', correo = '$email', usuario = '$usuario'
                       WHERE idUsuario = '$id'";
            $resultado = mysqli_query($conexion, $query);
            if(!$resultado){
                die("Error no se ingresaron los datos");
            }
            header("Location: cuenta.php");
        }
        elseif($pass1 == $pass2){
            $query = "UPDATE usuarios SET nombre = '$nombre', apellido = '$apellido', correo = '$email', usuario = '$usuario', 
                        pass = '$pass1' WHERE idUsuario = '$id'";
            $resultado = mysqli_query($conexion, $query);
            if(!$resultado){
                die("Error no se ingresaron los datos");
            }
            header("Location: cuenta.php");
        }
        else{
            header("Location: modificaUsuario.php?id=$id");
            echo "Contraseña incorrecta";
        }
    }
    else{
        header("Location: modificaUsuario.php?id=$id");
        echo "Revisa el dominio del correo";
    }
//    Valida que el correo sea institucional
   function email_valid($str){
        $matches = null;
        return (1 === preg_match('/^[A-z0-9\\._-]+@itparral.edu.mx$/', $str, $matches));
    }
?>