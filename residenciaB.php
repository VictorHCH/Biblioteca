<?php

    include("conexion.php");
    if(!empty($_POST)){
        $idresidencia = $_POST['idresidencia'];
        $consulta = "DELETE FROM residencias WHERE idResidencia = '$idresidencia'";
        $query = mysqli_query($conexion, $consulta);
        if($query){
            header("Location: libros.php");
        }else{
            echo "Error al eliminar";
        }

    }
    if(empty($_REQUEST['id'])){
        header("Location: libros.php");
    }else{
        $idresidencia = $_REQUEST['id'];
        $consulta = "SELECT tema, descripcion, imagen FROM residencias WHERE idResidencia='$idresidencia'";
        $query = mysqli_query($conexion, $consulta);
        $resultado = mysqli_num_rows($query);
        if($resultado > 0){
            while($data = mysqli_fetch_array($query)){
                $tema = $data['tema'];
                $descripcion = $data['descripcion'];
                $imagen = $data['imagen'];
            }
        }else{
            header("Location: libros.php");
        }
    }
?>

<?php require('includes/header.php') ?>
    <div id="find">
    </div>
    <div class="data_delete">
        <h2>¿Estás seguro de eliminar la siguiente residencia?</h2>
        <p>Tema: <span><?php echo $tema?></span></p>
        <!-- <p>Descripcion: <span><?php echo $descripcion ?></span></p> -->
        <img src="data:image/jpg;base64,<?php echo base64_encode($imagen)?>" width="45%">
        <form method="post" action="">
            <input type="hidden" name="idresidencia" value="<?php echo $idresidencia ?>">
            <input type="submit" class="btn_ok" value="Aceptar">
            <a href="libros.php" class="btn_cancel">Cancelar</a>
        </form>
    </div>
<?php require('includes/footer.php') ?>