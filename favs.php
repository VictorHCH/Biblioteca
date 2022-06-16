<?php require('includes/valida.php') ?>
    <div id="find">
    </div>
    <div>
    <h1 class="galeria">Galeria de Residencias</h1>
    <?php
    //Se hace la conexion con la BD
    include("conexion.php");
    $id = $_SESSION['idUsuario'];
    //Validacion de usuario y contraseña
    $consulta = "SELECT r.idResidencia, r.imagen FROM residencias r INNER JOIN favoritos f ON f.idResidencia = r.idResidencia INNER JOIN usuarios u ON 
                    u.idUsuario = f.idUsuario WHERE u.idUsuario = '$id'";
    $query = mysqli_query($conexion, $consulta);
    $resultado = mysqli_num_rows($query);
    //Si se encontro el usuario entra al index
    if ($resultado) {
        while ($data = mysqli_fetch_array($query)) {
            $imagen = $data['imagen'];
            $idRed = $data['idResidencia'];
    ?>
            <div class="galeria">
                <div class="residencia">
                    <a href="libro.php?id=<?php echo $idRed ?>"><img src="data:image/jpg;base64,<?php echo base64_encode($imagen) ?>" alt=""></a>
                </div>
            </div>
    <?php
        }
    }
    ?>
</div>
<?php require('includes/footer.php') ?>