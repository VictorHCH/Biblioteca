<?php require('includes/header.php') ?>
    <div id="find">
    </div>
    <div>
    <h1 class="galeria">Galeria de Residencias</h1>
    <?php
    //Se hace la conexion con la BD
    include("conexion.php");
    //Validacion de usuario y contraseña
    $consulta = "SELECT tema, imagen, descripcion FROM residencias";
    $query = mysqli_query($conexion, $consulta);
    $resultado = mysqli_num_rows($query);
    //Si se encontro el usuario entra al index
    if ($resultado) {
        while ($data = mysqli_fetch_array($query)) {
            $tema = $data['tema'];
            $imagen = $data['imagen'];
            $descripcion = $data['descripcion'];
    ?>
            <div class="galeria">
                <div class="residencia">
                    <img src="data:image/jpg;base64,<?php echo base64_encode($imagen) ?>" alt="">
                </div>
            </div>
    <?php
        }
    }
    ?>
</div>
<?php require('includes/footer.php') ?>