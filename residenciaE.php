<?php
include("conexion.php");
//Mostrar datos
if (empty($_GET['id'])) {
    header('Location: libros.php');
}
$idRes = $_GET['id'];
session_start();
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leyendo.com</title>
    <link href="estilo.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/x-icon" href="img/Libro.ico">
</head>

<body>
    <div id="logo">
        <h1>Leyendo.com</h1>
    </div>
    <center>
        <form action="registerResidenciaAdmin.php" method="post" enctype="multipart/form-data">
            Tema: <input type="text" requiered name="tema" value="<?php echo $tema ?>"><br><br>
            Imagen: <input type="file" requiered name="img"><br><br>
            Descripción: <textarea requiered name="desc" cols="30" rows="10"><?php echo $descripcion ?></textarea><br><br>
            Año: <input type="date" requiered name="fecha" value="<?php echo $año ?>"><br><br>
            Autores: <textarea name="autores" requiered id="1" cols="30" rows="10" ><?php echo $autores ?></textarea><br><br>
            Numero de paginas : <input type="number" requiered name="numpag" value="<?php echo $nPaginas ?>"><br><br>
            Link: <input type="text" name="link" requiered value="<?php echo $link ?>">
            <input type="submit" value="Enviar">
        </form>
    </center>
</body>

</html>