<?php require('includes/valida.php') ?>
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

    <div id="find">
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