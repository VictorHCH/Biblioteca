<?php require('includes/valida.php') ?>
<?php
    include("conexion.php");
    if (empty($_GET['id'])) {
        header('Location: index.php');
    }
    $idRes = $_GET['id'];
    echo $idRes;
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
            <label><?php echo $descripcion ?></label><br>
            Autor(es)<label><?php echo $autores ?></label><br>
            Fecha: <label><?php echo $año ?></label><br>
            Numero de pagina: <label><?php echo $nPaginas ?></label>
            <a href=""><button>Leer</button></a>
            <a href=""><button>Descargar</button></a>
            <a href=""><button>Favoritos</button></a>
        </div>
        <div class="frame">
            <iframe src="https://drive.google.com/file/d/17oQmyEuZp6CaxDPj0iIKDRUtS0GVkoaf/preview?usp=sharing" frameborder="0"></iframe>
        </div>
    </div>
<?php require('includes/footer.php') ?>