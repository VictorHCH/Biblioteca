<?php
include("conexion.php");
//Mostrar datos
if (empty($_GET['id'])) {
    header('Location: usuarios.php');
}
$iduser = $_GET['id'];
session_start();
$_SESSION['id'] = $iduser;
$consulta = "SELECT * FROM usuarios WHERE idUsuario='$iduser'";
$query = mysqli_query($conexion, $consulta);
$resultado = mysqli_num_rows($query);
if ($resultado == 0) {
    header("Location: usuarios.php");
} else {
    while ($data = mysqli_fetch_array($query)) {
        $nombre = $data['nombre'];
        $apellido = $data['apellido'];
        $correo = $data['correo'];
        $usuario = $data['usuario'];
        $tipo = $data['tipoUsuario'];
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
    <link href="estilo.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/x-icon" href="img/Libro.ico">
</head>

<body>
    <div id="logo">
        <h1>Leyendo.com</h1>
    </div>
    <div id="register">
        <div id="formRegis">
            <form action="usuarioEBD.php" method="post">
                <label>Nombre</label><br />
                <input type="text" name="nombre" placeholder="Nombre..." value="<?php echo $nombre; ?>"><br />
                <label>Apellido</label><br />
                <input type="text" name="apellido" placeholder="Apellido..." value="<?php echo $apellido; ?>"><br />
                <label>Correo</label><br />
                <input type="email" name="email" placeholder="Correo..." value="<?php echo $correo; ?>"><br />
                <label>Usuario</label><br />
                <input type="text" name="usuario" placeholder="Usuario..." value="<?php echo $usuario; ?>"><br />
                <label>Tipó</label>
                <select name="tipo">
                    <option value="1">Usuario</option>
                    <?php
                    if ($tipo == 2) {
                    ?>
                        <option value="2" selected>Administrador</option>
                    <?php
                    } else {
                    ?>
                        <option value="2">Administrador</option>
                    <?php
                    }
                    ?>
                </select><br>
                <label>Contraseña</label><br />
                <input type="password" name="pass1" placeholder="Contraseña..."><br />
                <label>Confirmar contraseña</label><br />
                <input type="password" name="pass2" placeholder="Contraseña..."><br />
                <input type="submit" value="Actualizar Usuario">
            </form>
        </div>
    </div>
</body>

</html>