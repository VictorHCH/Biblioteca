<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link href="estilo.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="logo">
        <h1>Biblioteca</h1>
    </div>
    <div id="inicioSesion">
        <div id="img">
            <img src="img/Libro.png">
        </div>
        <div id="form">
            <form action="index.php" method="post">
                <label>Usuario</label><br/>
                <input type="text" placeholder="Usuario..."><br/>
                <label>Contraseña</label><br/>
                <input type="text" placeholder="Contraseña..."><br/>
                <input type="submit" value="Iniciar sesión">
                <div id="registro">
                    <p>¿Aún no tienes cuenta?</p>
                    <a href="registro.php"><button>Regístrate</button></a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>