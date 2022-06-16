<?php include("includes/valida.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilo.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/x-icon" href="img/Libro.ico">
    <title>Leyendo.com</title>
</head>

<body>
<center>
    <div id="register">
        <div id="formRegis">
            <form action="residenciaEBD.php" method="post" enctype="multipart/form-data">
                <label>Tema</label><br>
                <textarea class='autoExpand' rows='3' data-min-rows='3' placeholder='Auto-Expanding Textarea' name="tema"></textarea><br><br>
                <label>Imagen:</label><br>
                <input type="file" requiered name="img"><br><br>
                <label>Descripción:</label><br>
                <textarea class='autoExpand' rows='8' data-min-rows='3' placeholder='Auto-Expanding Textarea' name="desc"></textarea><br><br>
                <label>Fecha:</label><br>
                <input type="date" requiered name="fecha" value=""><br><br>
                <label>Autor(es):</label><br>
                <textarea class='autoExpand' rows='3' data-min-rows='3' placeholder='Auto-Expanding Textarea' name="autores"></textarea><br><br>
                <label>Número de páginas:</label><br>
                <input type="number" requiered name="numpag" value=""><br><br>
                <label>Link:</label><br>
                <input type="text" name="link" requiered value="">
                <input type="submit" value="Enviar">
            </form>
        </div>
    </div>
    </center>
</body>

</html>