<?php require('includes/header.php') ?>
    <div id="find">
    </div>
    <?php 
    include("conexion.php");
    $id=$_SESSION['idUsuario'];
    $sql="select nombre, apellido, usuario, correo from usuarios where idUsuario='$id'";
    $result=mysqli_query($conexion, $sql);
    $resultado = mysqli_num_rows($result);
    if($resultado > 0){
        while($mostrar = mysqli_fetch_array($result)){
            $nombre = $mostrar['nombre']."<br>".$mostrar['apellido'];
    ?>
    <div id="cuenta">
        <h1><?php echo $nombre?></h1>
        <label><b>Usuario:</b> <?php echo $mostrar['usuario']?></label><br>
        <label><b>Correo:</b> <?php echo $mostrar['correo']?></label><br>
        <a href="modificaUsuario.php?id=<?php echo $id?>"><button>Modificar datos</button></a>
    </div>
    <?php
        }
    }
    ?>
<?php require('includes/footer.php') ?>