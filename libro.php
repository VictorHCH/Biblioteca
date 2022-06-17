<?php require('includes/valida.php') ?>
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
                <a href="" class="l"><button>Leer</button></a>
                <a href="" class="d"><button>Descargar</button></a>
                <a href="" class="f"><button>Favoritos</button></a>
            </div>
        </div>
    </div>
<?php require('includes/footer.php') ?>