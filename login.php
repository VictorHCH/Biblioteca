<?php
    session_start();
    //valida que la session este iniciada
    if(isset($_SESSION['tipo'])){
        if($_SESSION['tipo'] > 0){
            header('Location: index.php');
        }
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
<body>
    <div id="logo">
        <h1>Leyendo.com</h1>
    </div>
    <div id="inicioSesion">
        <div id="img">
            <img src="img/Libro.png">
        </div>
        <div id="formInicio">
            <div>
                <form action="logon.php" method="post">
                    <label>Usuario</label><br/>
                    <input type="text" name="nom" placeholder="Usuario..."><br/>
                    <label>Contraseña</label><br/>
                    <input type="password" name="pass" placeholder="Contraseña..."><br/>
                    <input type="submit" value="Iniciar sesión">
                </form>
                <div id="registro">
                    <p>¿Aún no tienes cuenta?</p>
                    <a href="register.php"><button>Regístrate</button></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>