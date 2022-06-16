<?php include("includes/valida.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leyendo.com</title>
    <link href="estilo.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/x-icon" href="img/Libro.ico">
</head>
<body>
    <div id="logo">
        <h1>Leyendo.com</h1>
    </div>
    <div id="register">
        <div id="formRegis">
            <form action="registerUsuarioPri.php" method="post">
                <label>Nombre</label><br/>
                <input type="text" name="nombre" placeholder="Nombre..."><br/>
                <label>Apellido</label><br/>
                <input type="text" name="apellido" placeholder="Apellido..."><br/>
                <label>Correo</label><br/>
                <input type="email" name="email" placeholder="Correo..."><br/>
                <label>Usuario</label><br/>
                <input type="text" name="usuario" placeholder="Usuario..."><br/>
                <label>Tipo</label><br>
                <select name="tipo"><option value="1">Usuario</option><option value="2">Administrador</option></select><br>
                <label>Contraseña</label><br/>
                <input type="password" name="pass1" placeholder="Contraseña..."><br/>
                <label>Confirmar contraseña</label><br/>
                <input type="password" name="pass2" placeholder="Contraseña..."><br/>
                <input type="submit" value="Registrarse">
            </form>
        </div>
    </div>
</body>
</html>