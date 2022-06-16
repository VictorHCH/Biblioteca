<?php require('includes/header.php') ?>
    <div id="find">
        <img src="img/Lupa.png">
        <input type="text" placeholder="¿Qué buscas?">
    </div>
    <div class="container">
        <ul class="slider">
            <li id="slide1"><a><img src="img/banner1.jpg"/></a></li>
            <li id="slide2"><a><img src="img/banner2.jpg"/></a></li>
            <li id="slide3"><a><img src="img/banner3.jpg"></a></li>
        </ul>
        <ul class="ind">
            <li><a href="#slide1">1</a></li>
            <li><a href="#slide2">2</a></li>
            <li><a href="#slide3">3</a></li>
        </ul>
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
     if($resultado){ 
         while($data = mysqli_fetch_array($query)){
             $tema = $data['tema'];
             $imagen = $data['imagen'];
             $descripcion = $data['descripcion'];
             ?>
        <div class="galeria">
            <div class="residencia">
                <img src="data:image/jpg;base64,<?php echo base64_encode($imagen)?>" alt="">
            </div>
            <div class="pie">
                <p><?php  echo $tema ?></p>
              
            </div>
        </div>
<?php
         }
     }
?>

    </div>
<?php require('includes/footer.php') ?>