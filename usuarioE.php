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
<?php
include("conexion.php");
//Mostrar datos
if (empty($_GET['id'])) {
    header('Location: usuarios.php');
}
$iduser = $_GET['id'];
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
<?php
    include("conexion.php");
    $id = $_SESSION['idUsuario'];
    $consulta = "SELECT usuario FROM usuarios where idUsuario='$id'";
    $query = mysqli_query($conexion, $consulta);
    $resultado = mysqli_num_rows($query);
    if ($resultado) {
        while ($data = mysqli_fetch_array($query)) {
            $usuario = $data['usuario'];
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body id="header">
    <div id="logoHeader">
        <h1>Leyendo.com</h1>
        <div id="cerrar">
            <a href="logoff.php"><img src="img/cerrar.png"></a>
            <label><?php echo $usuario ?></label>
        </div>
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
                <label>Tipo</label>
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
                <input type="submit" value="Actualizar usuario">
                <a href="usuarios.php" class="g"><button>Regresar</button></a>
            </form>
        </div>
    </div>
    <?php require('includes/footer.php') ?>