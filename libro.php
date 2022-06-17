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
    if (empty($_GET['id'])) {
        header('Location: index.php');
    }
    $idRes = $_GET['id'];
    $consulta = "SELECT * FROM residencias WHERE idResidencia ='$idRes'";
    $query = mysqli_query($conexion, $consulta);
    $resultado = mysqli_num_rows($query);
    if ($resultado == 0) {
        // header('Location: index.php');
    } else {
        while ($data = mysqli_fetch_array($query)) {
            $tema = $data['tema'];
            $imagen = $data['imagen'];
            $descripcion = $data['descripcion'];
            $año = $data['año'];
            $autores = $data['autores'];
            $nPaginas = $data['nPaginas'];
            $link = $data['link'];
            $favoritos = $data['favoritos'];
            $leidos = $data['leidos'];
            $descargados = $data['descargados'];
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
        <div class="cont_libros">
        <div class="img">
                <img src="data:image/jpg;base64,<?php echo base64_encode($imagen) ?>">
        </div>
        <div class="contenido">
            <h1><?php echo $tema ?></h1>
            <p><?php echo $descripcion ?></p><br>
            Autor(es): <p><?php echo $autores ?></p><br>
            Fecha: <p><?php echo $año ?></p><br>
            Número de páginas: <p><?php echo $nPaginas ?></p><br>
            <div class="botones">
                <a href="leer.php?id=<?php echo $idRes ?>" target="_blank" class="l"><button>Leer</button></a>
                <a href="descarga.php?id=<?php echo $idRes ?>" class="d"><button>Descargar</button></a>
                <?php
                    include("conexion.php");
                    $id = $_SESSION['idUsuario'];
                    $consulta = "SELECT r.idResidencia, r.imagen FROM residencias r INNER JOIN favoritos f ON f.idResidencia = r.idResidencia INNER JOIN usuarios u ON 
                                u.idUsuario = f.idUsuario WHERE u.idUsuario = '$id' AND r.idResidencia = '$idRes'";
                    $query = mysqli_query($conexion, $consulta);
                    $resultado = mysqli_num_rows($query);
                    if ($resultado) {
                        ?>
                            <a href="nofavoritos.php?id=<?php echo $idRes ?>" class="f"><button>No Favorito</button></a>
                        <?php
                    }
                    else{
                        ?>
                            <a href="favoritos.php?id=<?php echo $idRes ?>" class="f"><button>Favoritos</button></a>
                        <?php
                    }
                ?>
                <a href="index.php" class="l"><button>Regresar</button></a>
            </div>
        </div>
    </div>
<?php require('includes/footer.php') ?>