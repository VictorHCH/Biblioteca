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
    if(!empty($_POST)){
        $idusuario = $_POST['idUsuario'];
        $consulta = "DELETE FROM usuarios WHERE idUsuario = '$idusuario'";
        $query = mysqli_query($conexion, $consulta);
        if($query){
            header("Location: usuarios.php");
        }else{
            echo "Error al eliminar";
        }

    }
    if(empty($_REQUEST['id'])){
        header("Location: usuarios.php");
    }else{
        $idusuario = $_REQUEST['id'];
        $consulta = "SELECT nombre, apellido, usuario, tipoUsuario FROM usuarios WHERE idUsuario='$idusuario'";
        $query = mysqli_query($conexion, $consulta);
        $resultado = mysqli_num_rows($query);
        if($resultado > 0){
            while($data = mysqli_fetch_array($query)){
                $nombre = $data['nombre']." ".$data['apellido'];
                $usuario = $data['usuario'];
                $tipoUsuario = $data['tipoUsuario'];
            }
        }else{
            header("Location: usuarios.php");
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
    <div class="data_delete">
        <h2>¿Estás seguro de eliminar el siguiente registro?</h2>
        <p>Nombre: <span><?php echo $nombre?></span></p>
        <p>Usuario: <span><?php echo $usuario ?></span></p>
        <p>Tipo de usuario: <span><?php echo $tipoUsuario ?></span></p>
        <form method="post" action="">
            <input type="hidden" name="idUsuario" value="<?php echo $idusuario?>">
            <input type="submit" class="btn_ok" value="Aceptar">
            <a href="usuarios.php" class="btn_cancel">Cancelar</a>
        </form>
    </div>
<?php require('includes/footer.php') ?>