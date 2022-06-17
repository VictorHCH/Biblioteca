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
//Mostrar datos
if (empty($_GET['id'])) {
    header('Location: libros.php');
}
$idRes = $_GET['id'];
$_SESSION['id'] = $idRes;
$consulta = "SELECT * FROM residencias WHERE idResidencia ='$idRes'";
$query = mysqli_query($conexion, $consulta);
$resultado = mysqli_num_rows($query);
if ($resultado == 0) {
    header('Location: libros.php');
} else {
    while ($data = mysqli_fetch_array($query)) {
        $tema = $data['tema'];
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
<!--<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leyendo.com</title>
    <link href="estilo.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/x-icon" href="img/Libro.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        $(document)
            .one('focus.autoExpand', 'textarea.autoExpand', function() {
                var savedValue = this.value;
                this.value = '';
                this.baseScrollHeight = this.scrollHeight;
                this.value = savedValue;
            })
            .on('input.autoExpand', 'textarea.autoExpand', function() {
                var minRows = this.getAttribute('data-min-rows') | 0,
                    rows;
                this.rows = minRows;
                rows = Math.ceil((this.scrollHeight - this.baseScrollHeight) / 17);
                this.rows = minRows + rows;
            });
    </script>-->
</head>

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
    <div id="registerL">
        <div id="formRegisL">
            <form action="residenciaEBD.php" method="post" enctype="multipart/form-data">
                <label>Tema</label><br>
                <textarea class='autoExpand' rows='3' data-min-rows='3' placeholder='Auto-Expanding Textarea' name="tema"><?php echo $tema ?></textarea>
                <label>Imagen:</label><br>
                <input type="file" requiered name="img"><br><br>
                <label>Descripción:</label><br>
                <textarea class='autoExpand' rows='8' data-min-rows='3' placeholder='Auto-Expanding Textarea' name="desc"><?php echo $descripcion ?></textarea>
                <label>Fecha:</label><br>
                <input type="date" requiered name="fecha" value="<?php echo $año ?>"><br><br>
                <label>Autor(es):</label><br>
                <textarea class='autoExpand' rows='3' data-min-rows='3' placeholder='Auto-Expanding Textarea' name="autores"><?php echo $autores ?></textarea>
                <label>Número de páginas:</label><br>
                <input type="number" requiered name="numpag" value="<?php echo $nPaginas ?>"><br><br>
                <label>Link:</label><br>
                <textarea class='autoExpand' rows='3' data-min-rows='3' placeholder='Auto-Expanding Textarea' name="link"><?php echo $link ?>"></textarea>
                <input type="submit" value="Enviar">
                <a href="libros.php" class="g"><button>Regresar</button></a>
            </form>
        </div>
    </div>
    <?php require('includes/footer.php') ?>