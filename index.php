<?php require('includes/valida.php') ?>
<div id="find">
    <img src="img/Lupa.png">
    <input type="text" placeholder="¿Qué buscas?">
</div>
<div class="container">
    <ul class="slider">
        <li id="slide1"><a><img src="img/banner1.jpg" /></a></li>
        <li id="slide2"><a><img src="img/banner2.jpg" /></a></li>
        <li id="slide3"><a><img src="img/banner3.jpg"></a></li>
    </ul>
    <ul class="ind">
        <li><a href="#slide1">1</a></li>
        <li><a href="#slide2">2</a></li>
        <li><a href="#slide3">3</a></li>
    </ul>
</div>
<div>
    <h1 class="galeria">Libros disponibles</h1>
    <?php
    //Se hace la conexion con la BD
    include("conexion.php");
    //Validacion de usuario y contraseña
    $consulta = "SELECT idResidencia, tema, imagen, descripcion FROM residencias";
    $query = mysqli_query($conexion, $consulta);
    $resultado = mysqli_num_rows($query);
    //Si se encontro el usuario entra al index
    if ($resultado) {
        while ($data = mysqli_fetch_array($query)) {
            $tema = $data['tema'];
            $imagen = $data['imagen'];
            $descripcion = $data['descripcion'];
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

<div id="leidos">
    <h1 class="galeria">Libros más leídos</h1>
    <?php
    //Se hace la conexion con la BD
    include("conexion.php");
    //Validacion de usuario y contraseña
    $consulta = "SELECT idResidencia, tema, imagen, descripcion, leidos FROM residencias ORDER BY leidos DESC LIMIT 5";
    $query = mysqli_query($conexion, $consulta);
    $resultado = mysqli_num_rows($query);
    //Si se encontro el usuario entra al index
    if ($resultado) {
        while ($data = mysqli_fetch_array($query)) {
            $tema = $data['tema'];
            $imagen = $data['imagen'];
            $descripcion = $data['descripcion'];
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

<div id="descargados">
    <h1 class="galeria">Libros más descargados</h1>
    <?php
    //Se hace la conexion con la BD
    include("conexion.php");
    //Validacion de usuario y contraseña
    $consulta = "SELECT idResidencia, tema, imagen, descripcion, descargados FROM residencias ORDER BY descargados DESC LIMIT 5";
    $query = mysqli_query($conexion, $consulta);
    $resultado = mysqli_num_rows($query);
    //Si se encontro el usuario entra al index
    if ($resultado) {
        while ($data = mysqli_fetch_array($query)) {
            $tema = $data['tema'];
            $imagen = $data['imagen'];
            $descripcion = $data['descripcion'];
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

<div id="favoritos">
    <h1 class="galeria">Libros favoritos</h1>
    <?php
    //Se hace la conexion con la BD
    include("conexion.php");
    //Validacion de usuario y contraseña
    $consulta = "SELECT idResidencia, tema, imagen, descripcion, favoritos FROM residencias ORDER BY favoritos DESC LIMIT 5";
    $query = mysqli_query($conexion, $consulta);
    $resultado = mysqli_num_rows($query);
    //Si se encontro el usuario entra al index
    if ($resultado) {
        while ($data = mysqli_fetch_array($query)) {
            $tema = $data['tema'];
            $imagen = $data['imagen'];
            $descripcion = $data['descripcion'];
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