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
                <textarea class='autoExpand' rows='3' data-min-rows='3' placeholder='Tema...' name="tema"></textarea><br><br>
                <label>Imagen:</label><br>
                <input type="file" requiered name="img"><br><br>
                <label>Descripción:</label><br>
                <textarea class='autoExpand' rows='8' data-min-rows='3' placeholder='Descripción...' name="desc"></textarea><br><br>
                <label>Fecha:</label><br>
                <input type="date" requiered name="fecha" value=""><br><br>
                <label>Autor(es):</label><br>
                <textarea class='autoExpand' rows='3' data-min-rows='3' placeholder='Autor(es)...' name="autores"></textarea><br><br>
                <label>Número de páginas:</label><br>
                <input type="number" requiered name="numpag" value="" placeholder="Páginas..."><br><br>
                <label>Link:</label><br>
                <input type="text" name="link" requiered value="" placeholder="Link...">
                <input type="submit" value="Enviar">
                <a href="libros.php" class="g"><button>Regresar</button></a>
            </form>
        </div>
    </div>
    <?php require('includes/footer.php') ?>