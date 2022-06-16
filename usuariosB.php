<?php
    if(empty($_REQUEST['id'])){
        header("Location: usuarios.php");
    }else{
        include("conexion.php");
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

<?php require('includes/header.php') ?>
    <div id="find">
    </div>
    <div class="data_delete">
        <h2>¿Esta seguro de eliminar el siguiente registro?</h2>
        <p>Nombre: <span><?php echo $nombre?></span></p>
        <p>Usuario: <span><?php echo $usuario ?></span></p>
        <p>Tipo Usuario: <span><?php echo $tipoUsuario ?></span></p>
        <form action="">
            <a href="usuarios.php" class="btn_cancel">Cancelar</a>
            <input type="submit" value="Aceptar" class="btn_ok">
        </form>
    </div>
<?php require('includes/footer.php') ?>